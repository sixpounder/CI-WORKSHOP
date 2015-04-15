<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Model {
  const ENTITY = 'tags';

  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }
  
  public function create($data)
  {

    if($this->db->insert(self::ENTITY, $data)) {
      $data['id'] = $this->db->insert_id();
      return $data;
    } else {
      return (object)array('status' => FALSE, 'code' => $this->db->_error_number(), 'message' => $this->db->_error_message());
    }
  }
}