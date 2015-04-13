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
    if ($book == null) {
      $this->notFound();
    } else {
      $this->setTitle($book->title);

      $this->load->helper('html');
      $this->view('books/show');  
    }
    
  }

  public function create()
  {
    $this->load->helper('form');
    $this->loadModel('Author', 'authors_model');

    $this->setOutputData('authors', $this->authors_model->getAll());
    $this->setTitle('New book');
    
    $this->view('books/new');
  }

  public function edit($id)
  {
    $this->load->helper('form');
    $this->loadModel('Author', 'authors_model');

    $this->setOutputData('authors', $this->authors_model->getAll());
    $this->setOutputData('book', $this->books_model->get($id));
    $this->setTitle('Edit book');
    
    $this->view('books/edit');
  }
  
  public function delete($id)
  {
    $this->setOutputData('book', $this->books_model->get($id));
    $this->view('books/delete');
  }
}
