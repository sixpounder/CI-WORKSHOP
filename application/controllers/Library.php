<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function index() 
  {
    $this->loadModel('bookshelf');

    $this->setOutputData('books', $this->bookshelf->getAllBooks());

    $this->__view('posts/index');
  }
}

?>