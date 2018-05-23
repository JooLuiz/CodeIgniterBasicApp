<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __constructor(){
        parent::__constructor();
        $this->load->model('User_model', 'userMod');
    }
    
    #Index Page

    public function index(){
        $this->load->view('header');
        if($this->check_session()){
            $this->load->view('home_page_logged');
        }else{
            $this->load->view('home');
        }
        $this->load->view('footer');
    }

    #User Actions Page

    #Register View

    public function register(){

        $this->load->view('header');
        if($this->check_session()){
            $this->load->view('home_page_logged');
        }else{
            $this->load->view('register_page');
        }
        $this->load->view('footer');

    }

    #Login View

    public function login(){

        $this->load->view('header');
        if($this->check_session())  {
            $this->load->view('home_page_logged');
        }else{
            $this->load->view('login');
        }
        $this->load->view('footer');

    }

    #Login method that checks the user data and sets the session

    public function logging_in(){
         $this->load->model('User_model', 'userMod');

        if (!empty($_POST)) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($email && $password) {
                $data = array(
                    'email' => $email,
                    'password' => $password
                );

                $logging = $this->userMod->login($data);
                if ($logging){
                    $id = $this->userMod->get_user_id($email);
                    $username = $this->userMod->get_user_username($email);
                    $birthday = $this->userMod->get_user_birthday($email);
                    $session_data = array(
                        'username' => $username,
                        'email' => $email,
                        'password' => $password,
                        'birthday' => $birthday,
                        'id' => $id,
                    );
                    $this->session->set_userdata($session_data);
                    redirect('index.php');
                }else{
                    $this->session->set_flashdata('error', 'User or password Incorrect');
                    redirect('index.php');
                }            
            }else{
                $this->session->set_flashdata('error', 'The form was incorectly filled');
                redirect('index.php');
            }
        }else{
            $this->session->set_flashdata('error', 'The form was incorectly filled');
            redirect('index.php');
        }
                
    }

    #register method that checks the data, register the user in the database and sets the session

    public function registration(){
        
        $this->load->model('User_model', 'userMod');

        if (!empty($_POST)) {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password_confirmation = $this->input->post('password_confirmation');
            $birthday = $this->input->post('birthday');

            if (($username && $email && $password && $birthday && $password_confirmation) && ($password == $password_confirmation)) {
                $data = array(
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'birthday' => $birthday
                );

                $registering = $this->userMod->register($data);
                if ($registering){
                    $id = $this->userMod->get_user_id($email);
                    $session_data = array(
                        'username' => $username,
                        'email' => $email,
                        'password' => $password,
                        'birthday' => $birthday,
                        'id' => $id,
                    );
                    $this->session->set_userdata($session_data);
                    redirect('index.php');
                }else{
                    $this->session->set_flashdata('error', 'Ops, something wrong happened');
                    redirect('index.php');
                }           
            }else{
                $this->session->set_flashdata('error', 'The form was incorectly filled');
                redirect('index.php');    
            }
        }else{
            $this->session->set_flashdata('error', 'Formulário Preenchido Incorretamenet');
            redirect('index.php');
        }
    }

    #logout method

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('birthday');
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('logout', 'Logged out Successfully');
        redirect('index.php');
    }

    #Notes Functions

    #Notes Homepage

    public function note_home(){
        $this->load->model('Note_model', 'noteMod');

        $this->load->view('header');
        if($this->check_session()){
            $data['notes'] = $this->noteMod->get_notes($this->session->userdata('id'));
            $this->load->view('note_home_page', $data);
        }else{
            $this->login();
        }
        $this->load->view('footer');
    }

    #Notes function that checks the new note data and adds it in the database

    public function adding_note(){
        $this->load->model('Note_model', 'noteMod');

        if (!empty($_POST)) {
            $title = $this->input->post('title');
            $type = $this->input->post('type');
            $description = $this->input->post('description');
            $date = $this->input->post('date');
            $user_id = $this->session->userdata('id');
            
            if ($title && $type && $description && $date) {
                $data = array(
                    'user_id' => $user_id,
                    'title' => $title,
                    'type' => $type,
                    'description' => $description,
                    'date' => $date
                );

                $sending = $this->noteMod->add_note($data);
                if ($sending == false){
                    $this->session->set_flashdata('error', 'Falha ao registrar nova nota');
                    redirect('index.php');
                }else{
                    redirect('index.php/notes');    
                }
            }else{
                $this->session->set_flashdata('error', 'The form was incorectly filled');
                redirect('index.php');
            }
        }else{
            $this->session->set_flashdata('error', 'The form was incorectly filled');
            redirect('index.php');
        }
    }

    #Function Responsible for checking the user session

    private function check_session(){
        if($this->session->userdata('email') != ''){
            return true;
        }else{
            return false;
        }
    }
}

?>