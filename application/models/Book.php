<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Model {
  const ENTITY = 'books';

  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }

  public function getAll() {
    return $this->db->select()
      ->from(self::ENTITY)
      ->join('authors', 'books.author_id = authors.id')
      ->order_by('title ASC')
      ->get()->result();
  }

  public function get($id) {
    if (!$id) {
      return null;
    }

    $book = $this->db->select()->from(self::ENTITY)->where('id', $id)->get()->result()[0];
    $book->author = $this->db->select()->from('authors')->where('id', $book->author_id)->get()->result()[0];

    return $book;
  }

  public function search($match) {
    $matches = array('title' => $match, 'author' => $match);
    return $this->db->select()
      ->from(self::ENTITY)
      ->like($matches)
      ->order_by('title ASC')
      ->get()
      ->result();
  }

  public function create($data) {
    if (!isset($data['id'])) {
      $data['id'] = $this->db->insert_id() + 1;
    }
    if($this->db->insert(self::ENTITY, $data)) {
      return $data;
    } else {
      return (object)array('status' => FALSE, 'code' => $this->db->_error_number(), 'message' => $this->db->_error_message());
    }
    
  }

}