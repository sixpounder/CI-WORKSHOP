<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->loadModel('Book', 'books_model');
    $this->setTitle('Bookshelf');
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
      $this->not_found();
    } else {
      $this->setTitle($book->title);

      $this->load->helper('html');
      $this->view('books/show');  
    }
    
  }

  public function create()
  {
    if($this->is_logged_in()) {
      
      $this->load->helper('form');
      $this->loadModel('Author', 'authors_model');
  
      $this->setOutputData('authors', $this->authors_model->getAll());
      $this->setOutputData('author_id', $this->input->get('author_id'));
      $this->setTitle('New book');
      
      $this->view('books/new');
    } else {
      $this->forbidden();
    }
  }

  public function edit($id)
  {
    if($this->is_logged_in()) {
      $this->load->helper('form');
      $this->loadModel('Author', 'authors_model');
  
      $this->setOutputData('authors', $this->authors_model->getAll());
      $this->setOutputData('book', $this->books_model->get($id));
      $this->setTitle('Edit book');
      
      $this->view('books/edit'); 
    } else {
      $this->forbidden();
    }
  }
  
  public function delete($id)
  {
    if($this->is_logged_in()) {
      $this->setOutputData('book', $this->books_model->get($id));
      $this->view('books/delete');
    } else {
      $this->forbidden();
    }
  }
}
