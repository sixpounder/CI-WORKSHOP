<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->loadModel('Book', 'books_model');
    $this->setOutputData('title', 'Libreria');
  }

  public function index()
  {
    $this->setOutputData('books', $this->books_model->getAll());
    $this->view('books/index');
  }

  public function show($id)
  {
    $book = $this->books_model->get($id);
    $this->setOutputData('book', $book);
    $this->setTitle($book->title);

    $this->load->helper('html');
    $this->view('books/show');
  }
}
