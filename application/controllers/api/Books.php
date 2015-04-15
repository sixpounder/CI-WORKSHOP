<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/API_Base.php';

class Books extends API_Base {

  public function __construct() {
    parent::__construct();
    log_message('debug', 'Initializing books api');
    $this->load->model('Book', 'books_model', TRUE);
  }

  public function index_get() {
    log_message('debug', 'Books::index_get');
    $res = null;
    if($this->get('author_id') != null) {
      $res = $this->books_model->byAuthorId($this->get('author_id'));
    } else {
      $res = $this->books_model->getAll();
    }
    
    $this->response($res);
  }

  public function index_post() {
    log_message('debug', 'Books::index_post');
    $this->restrict();
    
    $created = $this->books_model->create($this->post());
    if ($created) {
      if(!$this->input->is_ajax_request()) {
        redirect('/books' . '/'. $created['id']);
      } else {
        $this->response($created);  
      }
      
    } else {
      $this->response((object)array('status' => FALSE, 'message' => 'Book creation failed'), 500);
    }
    
  }

  public function book_get($id) {
    log_message('info', 'Searching book with id ' . $id);
    $book = $this->books_model->get($id);
    $this->response($book);
  }

  public function book_put($id) {
    $this->restrict();
    
    log_message('info', 'Updating book with id ' . $id);
    $data = array(
      'id'          =>  $id,
      'title'       =>  $this->put('title'),
      'synopsis'    =>  $this->put('synopsis'),
      'author_id'   =>  $this->put('author_id'),
      'cover'       =>  $this->put('cover'),
    );
    $book = $this->books_model->update($id, $data);
  }

  public function book_delete($id) {
    $this->restrict();
    
    log_message('info', 'Deleting book with id ' . $id);
    $result = $this->books_model->delete($id);
    if($result) {
      log_message('info', 'Book with id ' . $id . ' deleted');
      $this->response((object)array('status' => FALSE, 'id' => $id), 200);  
    } else {
      log_message('error', 'Book with id ' . $id . ' could not be deleted');
      $this->response((object)array('status' => FALSE, 'message' => 'Could not delete book with id ' . $id), 500);
    }
    
  }
}
