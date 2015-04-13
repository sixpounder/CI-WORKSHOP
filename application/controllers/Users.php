<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('User', 'users_model');
    $this->setTitle('Bookshelf - login');
  }
  
  public function login()
  {
    $this->load->helper('form');
    if($this->session->userdata('logged_in')) {
      redirect('/', 'refresh');
    } else {
      $this->view('users/login');
    }
  }

	public function auth()
	{
  	 $this->load->library('form_validation');
   
     $this->form_validation->set_rules('email', 'Email', 'trim|required');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_user_data');
   
     if($this->form_validation->run() == FALSE)
     {
       $this->setOutputData('invalid', TRUE);
       $this->view('users/login');
     }
     else
     {
       redirect('/', 'refresh');
     }
	}
	
	public function check_user_data($password)
  {
    $username = $this->input->post('email');
    $password = $password;
    $result = $this->users_model->login($username, $password);
	  
	  if($result) {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id' => $row->id,
          'email' => $row->email
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    } else {
      
        $this->form_validation->set_message('check_user_data', 'Invalid username or password');
        return FALSE;
        
    }
  }
  
  public function logout()
  {
    $this->session->unset_userdata('logged_in');
    $this->session->sess_destroy();
    redirect('/', 'refresh');
  }
}
