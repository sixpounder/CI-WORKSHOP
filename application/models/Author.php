<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Model {
  const ENTITY = 'authors';

  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }

  public function getAll() {
    return $this->db->select('authors.id, authors.name, COUNT(books.id) as books_authored')
      ->from(self::ENTITY)
      ->join('books', 'books.author_id = authors.id', 'left outer')
      ->group_by('authors.id, authors.name')
      ->order_by('name ASC')
      ->get()
      ->result();
  }

  public function get($id) {
    
     if (!$id || $id == 0) {
      return null;
    }

    $author = $this->db->select()->from(self::ENTITY)->where('id', $id)->limit(1)->get();
    
    if($author->num_rows() != 0) {
      $author = $author->result()[0];
      $author->books = $this->db->select()->from('books')->where('author_id', $author->id)->get()->result();
      return $author;
    } else {
      return null;
    }
  }

  public function search($match) {
    $matches = array('name' => $match);
    return $this->db->select()->from(self::ENTITY)->like($matches)->get()->result();
  }

  public function create($data) {
    //if(!isset($data['id'])) {
    //  $id = $this->db->select_max('id')->from(self::ENTITY)->get()->result()[0]->id + 1;
    //  $data['id'] = $id;  
    //}
    
    if($this->db->insert(self::ENTITY, $data)) {
      $data['id'] = $this->db->insert_id();
      return $data;
    } else {
      return (object)array('status' => FALSE, 'code' => $this->db->_error_number(), 'message' => $this->db->_error_message());
    }
    
  }

}