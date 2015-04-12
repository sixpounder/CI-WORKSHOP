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
    return $this->db->select()->from(self::ENTITY)->order_by('name ASC')->get()->result();
  }

  public function getAllArray() {
    return $this->db->select()->from(self::ENTITY)->order_by('name ASC')->get()->result_array();
  }

  public function get($id) {
    return $this->db->select()->from(self::ENTITY)->where('id', $id)->get()->result();
  }

  public function search($match) {
    $matches = array('name' => $match);
    return $this->db->select()->from(self::ENTITY)->like($matches)->get()->result();
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