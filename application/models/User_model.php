<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __constructor(){
		parent::__constructor();
		$this->load->database();
    }

    //login method checks the params data with the database data calling the check_login method
    public function login($data){

        return $this->check_login($data);

    }

    //register method checks the params data with the database data calling the check_email and check_username methods (in my app no one can have the same e-mail or username, but the app rules are up to the developer). If the everything is right, a new user is registred in the database.

    public function register($data){

        if(($this->check_email($data['email'])) && ($this->check_username($data['username']))){
            $this->db->insert('users', $data);
            return $idOfInsertedData = $this->db->insert_id();
        }else{
            return false;
        }

    }

    //This function gets the user id by its e-mail and returns it.

    public function get_user_id($em){
        $this->db->select('id');
        $this->db->where('email', $em);
        $query = $this->db->get('users');
        foreach ($query->result() as $row)
            {
                return $row->id;
            }
    }

    //This function gets the user username by its e-mail and returns it.

    public function get_user_username($em){
        $this->db->select('username');
        $this->db->where('email', $em);
        $query = $this->db->get('users');
        foreach ($query->result() as $row)
            {
                return $row->username;
            }
    }

    //This function gets the user birthday by its e-mail and returns it.

    public function get_user_birthday($em){
        $this->db->select('birthday');
        $this->db->where('email', $em);
        $query = $this->db->get('users');
        foreach ($query->result() as $row)
            {
                return $row->birthday;
            }
    }

    //PRIVATE FUNCTIONS

    //All my private functions are used to check the user data in the database, to assert that there's no repeated data.

    private function check_email($email){
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() != 0){
            return false;
        }else{
            return true;
        }
    }

    private function check_username($username){
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        if($query->num_rows() != 0){
            return false;
        }else{
            return true;
        }
    }

    private function check_login($data){
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $query = $this->db->get('users');
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }

}
