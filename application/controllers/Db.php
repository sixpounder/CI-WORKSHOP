<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    if (!$this->input->is_cli_request()) {
      exit("No direct script access allowed");
    }

    if (ENVIRONMENT !== 'development') {
      exit("You REALLY don't want to do this");
    }

    $this->faker = Faker\Factory::create();
  }

  public function migrate()
  {
    $this->load->library('migration');
    if($this->migration->current() === FALSE) {
      echo($this->migration->error_string());
    } else {
      echo 'Everything is accomplished';
      echo PHP_EOL;
    }
  }

  public function seed()
  {
    echo "Seeding active database";
    echo PHP_EOL;

    $data = array('email' => 'admin@myblog.org', 'password' => 'hashmeforgodsake', 'admin' => TRUE);

    $this->load->model('User', 'user_model', TRUE);

    $this->user_model->create($data);
  }
}
