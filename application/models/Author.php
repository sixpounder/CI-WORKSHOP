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
    return $this->db->get(self::ENTITY)->result();
  }

  public function get($id) {
    return $this->db->get(self::ENTITY)->where('id', $id)->result();
  }

  public function search($match) {
    $matches = array('name' => $match);
    return $this->db->get(self::ENTITY)->like($matches)->result();
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