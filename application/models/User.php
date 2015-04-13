<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

  const ENTITY = 'users';

  public function __construct()
  {
    // Call the CI_Model constructor
    parent::__construct();
  }

  public function getAllUsers() {
    return $this->db->get(self::ENTITY)->result();
  }

  public function create($stuff) {
    if (!isset($stuff['id'])) {
      $stuff['id'] = $this->db->insert_id() + 1;
    }
    return $this->db->insert(self::ENTITY, $stuff);
  }
  
  public function login($identity, $password)
  {
    $query = $this->db->select()
      ->from(self::ENTITY)
      ->where('email', $identity)
      ->where('password', MD5($password))
      ->limit(1)
      ->get();
      
    if($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }
}