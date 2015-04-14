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
    $this->load->dbforge();
  }
  
  public function reset($transactional = 'trx')
  {
    echo "Transaction context is ".($transactional == 'trx' ? 'ON' : 'OFF').PHP_EOL;
    
    if($transactional == 'trx') {
      $this->db->trans_start();  
    }
    
    $this->down('notrx');
    $this->migrate('notrx');
    $this->seed('notrx');
    
    if($transactional == 'trx') {
      $this->db->trans_complete();
    }
  }
  
  public function down($requiresNewTransactionContext = 'trx')
  {
    if($requiresNewTransactionContext == 'trx') {
      echo 'Using new transaction context for DOWN operation'.PHP_EOL;
      $this->db->trans_start();  
    }
    
    $this->dbforge->drop_table('migrations');
    $this->dbforge->drop_table('authors');
    $this->dbforge->drop_table('users');
    $this->dbforge->drop_table('tags');
    $this->dbforge->drop_table('books_tags');
    $this->dbforge->drop_table('books');
    echo "All tables dropped";
    echo PHP_EOL;
    
    if($requiresNewTransactionContext == 'trx') {
      $this->db->trans_complete();  
    }
  }

  public function migrate($requiresNewTransactionContext = 'trx')
  {
    if($requiresNewTransactionContext == 'trx') {
      echo 'Using new transaction context for MIGRATE operation'.PHP_EOL;
      $this->db->trans_start();
    }
    $this->load->library('migration');
    if($this->migration->current() === FALSE) {
      echo($this->migration->error_string());
    } else {
      echo 'Schema migrated';
      echo PHP_EOL;
    }
    
    if($requiresNewTransactionContext == 'trx') {
      $this->db->trans_complete();  
    }
  }

  public function seed($requiresNewTransactionContext = 'trx')
  {
    if($requiresNewTransactionContext == 'trx') {
      echo 'Using new transaction context for SEED operation'.PHP_EOL;
      $this->db->trans_start();  
    }
    
    echo "Seeding active database (".$this->db->hostname.")";
    echo PHP_EOL;

    echo "Seeding admin...";
    $users = array('email' => 'admin@bookshelf.org', 'password' => MD5('hashmeforgodsake'), 'admin' => TRUE);
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
    echo "Seeding tags";

    $this->load->model('Tag', 'tags_model', TRUE);

    for ($i = 0; $i < 100; $i++) {
        echo ".";

        $data = array(
            'id' => $i + 1,
            'name' => $this->faker->word()
        );

        $this->tags_model->create($data);
    }

    echo PHP_EOL;
    
    if($requiresNewTransactionContext == 'trx') {
      $this->db->trans_complete();  
    }
  }
}
