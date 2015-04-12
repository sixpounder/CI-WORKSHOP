<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {
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

    echo "Seeding admin...";
    $users = array('email' => 'admin@myblog.org', 'password' => 'hashmeforgodsake', 'admin' => TRUE);
    $this->load->model('User', 'user_model', TRUE);
    $this->user_model->create($users);

    echo PHP_EOL;
    echo "Seeding authors";

    $this->load->model('Author', 'authors_model', TRUE);

    for ($i = 0; $i < 100; $i++) {
        echo ".";

        $data = array(
            'id' => $i + 1,
            'name' => $this->faker->firstName." ".$this->faker->lastName
        );

        $this->authors_model->create($data);
    }

    echo PHP_EOL;
    echo "Seeding books";

    $this->load->model('Book', 'books_model', TRUE);

    for ($i = 0; $i < 100; $i++) {
        echo ".";

        $data = array(
            'id' => $i + 1,
            'title' => $this->faker->sentence(4),
            'author_id' => $this->faker->numberBetween(1,100),
            'cover' => $this->faker->randomElement(array('/assets/images/c1.jpg', '/assets/images/c2.jpg', '/assets/images/c3.jpg'))
        );

        $this->books_model->create($data);
    }

    echo PHP_EOL;
  }
}
