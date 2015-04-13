<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Authors extends REST_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Author', 'authors_model', TRUE);
  }
  
  protected function is_logged_in()
  {
    return $this->session->userdata('logged_in') != null;
  }
  
  protected function restrict()
  {
    if(! $this->is_logged_in()) {
       $this->output->set_status_header(403);
       $stuff = (object)array('status' => FALSE);
       $this->output->set_content_type('application/json')->set_output(json_encode($stuff));
       $this->output->_display();
       exit();
    }
  }

  public function index_get() {

    $this->response($this->authors_model->getAll());
  }

  public function index_post() {
    $this->restrict();
    
    $created = $this->authors_model->create($this->post());
    if ($created) {
      if(!$this->input->is_ajax_request()) {
        redirect('/authors' . '/'. $created['id']);
      } else {
        $this->response($created);
      }
      
    } else {
      $this->response((object)array('status' => FALSE, 'message' => 'Database insert failed'), 500);
    }
    
  }

  public function author_get($id) {
    log_message('info', 'Searching author with id ' . $id);
    $author = $this->authors_model->get($id);
    $this->response($author);
  }

  public function author_put($id) {
    $this->restrict();
    
    log_message('info', 'Updating author with id ' . $id);
    $data = array(
      'id'          =>  $id,
      'name'       =>  $this->put('name'),
    );
    $book = $this->authors_model->update($id, $data);
  }

  public function author_delete($id) {
    $this->restrict();
    
    log_message('info', 'Deleting author with id ' . $id);
    $result = $this->authors_model->delete($id);
    if($result) {
      log_message('info', 'Author with id ' . $id . ' deleted');
      $this->response((object)array('status' => FALSE, 'id' => $id), 200);  
    } else {
      log_message('error', 'Author with id ' . $id . ' could not be deleted');
      $this->response((object)array('status' => FALSE, 'message' => 'Could not delete author with id ' . $id), 500);
    }
    
  }
}
