<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Books extends REST_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Book', 'books_model', TRUE);
  }

  public function index_get() {

    $this->response($this->books_model->getAll());
  }

  public function index_post() {
    $created = $this->books_model->create($this->post());
    if ($created) {
      if(!$this->input->is_ajax_request()) {
        redirect('/books' . '/'. $created['id']);
      } else {
        $this->response($created);  
      }
      
    } else {
      $this->response((object)array('status' => FALSE, 'message' => 'Database insert failed'), 500);
    }
    
  }

  public function book_get($id) {
    log_message('info', 'Searching book with id ' . $id);
    $book = $this->books_model->get($id);
    $this->response($book);
  }

  public function book_put($id) {
    log_message('info', 'Updating book with id ' . $id);
    log_message('info', json_encode($this->put()));
    $data = array(
      'id'          =>  $id,
      'title'       =>  $this->put('title'),
      'author_id'   =>  $this->put('author_id'),
      'cover'       =>  $this->put('cover'),
    );
    $book = $this->books_model->update($id, $data);
  }

  public function book_delete($id) {
    log_message('info', 'Deleting book with id ' . $id);
    $result = $this->books_model->delete($id);
    $this->response($result);
  }
}
