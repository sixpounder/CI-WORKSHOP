<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Model {
  const ENTITY = 'articles';

  public function __construct()
  {
    parent::__construct();
  }

}