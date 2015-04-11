<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookshelf extends CI_Model {
  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }

  public function getAllBooks() {
    return $this->db->get('books')->result();
  }

}