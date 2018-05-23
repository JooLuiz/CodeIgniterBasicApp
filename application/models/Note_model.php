<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note_model extends CI_Model {

	public function __constructor(){
		parent::__constructor();
		$this->load->database();
    }

    //Method add_note takes the note data and inserts it in the database.

    public function add_note($data){
          $this->db->insert('notes', $data);
    	  return $idOfInsertedData = $this->db->insert_id();
    }

    //Method get_notes gets all the notes of an user based on its id.

    public function get_notes($id){
        $this->db->where('user_id', $id);
        $query = $this->db->get('notes');
        return $query->result();
    }

}