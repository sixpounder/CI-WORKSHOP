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
    return $this->db->select('books.id as id, books.title as title, authors.id as author_id, authors.name as author_name')
      ->from(self::ENTITY)
      ->join('authors', 'books.author_id = authors.id')
      ->order_by('title ASC')
      ->get()->result();
  }

  public function get($id) {
    if (!$id || $id == 0) {
      return null;
    }

    $book = $this->db->select()->from(self::ENTITY)->where('id', $id)->get();
    
    if($book->num_rows() != 0) {
      $book = $book->result()[0];
      $book->author = $this->db->select()->from('authors')->where('id', $book->author_id)->get()->result()[0];
      return $book;
    } else {
      return null;
    }
    
    
  }

  public function search($match) {
    $matches = array('title' => $match);
    return $this->db->select()
      ->from(self::ENTITY)
      ->like($matches)
      ->order_by('title ASC')
      ->get()
      ->result();
  }

  public function byAuthorId($author_id) {
    return $this->db->select()
      ->from(self::ENTITY)
      ->where('author_id', $author_id)
      ->order_by('title ASC')
      ->get()
      ->result();
  }

  public function create($data) {
    $data['id'] = $this->db->insert_id(); //<-- This seems to have problems with sqlite, using a workaround

    $id = $this->db->select_max('id')->from(self::ENTITY)->get()->result()[0]->id + 1;
    $data['id'] = $id;

    if($this->db->insert(self::ENTITY, $data)) {
      return $data;
    } else {
      return (object)array('status' => FALSE, 'code' => $this->db->_error_number(), 'message' => $this->db->_error_message());
    }
    
  }

  public function update($id,$data) {
    $updated = $this->db->update(self::ENTITY, $data, "id = " . $id);

    if($updated) {
      return $data;
    } else {
      return (object)array('status' => FALSE, 'code' => $this->db->_error_number(), 'message' => $this->db->_error_message());
    }
    
  }
  
  public function delete($id) {
    $this->db->where('id', $id);
    return $this->db->delete(self::ENTITY);
  }

}