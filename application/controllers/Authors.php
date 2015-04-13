<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authors extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Author', 'authors_model');
    $this->setTitle('Bookshelf');
  }
  
  public function index()
  {
    $this->setOutputData('authors', $this->authors_model->getAll());
    $this->view('authors/index');
  }
  
  public function show($id)
  {
    $this->setOutputData('author_id', $id);
    $this->view('authors/show');
  }
  
  public function create()
  {
    if($this->is_logged_in()) {
      $this->view('authors/create');
    } else {
      $this->forbidden();  
    }
  }
}
