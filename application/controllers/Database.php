<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {
  
  public $_config = array(
    'authors_count' => 20,
    'books_count' => 100,
    'drops' => array('migrations', 'authors', 'users', 'tags', 'books_tags', 'books')
  );
  
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
    $this->benchmark->mark('reset_start');
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
    $this->benchmark->mark('reset_end');
    echo "Overall time: {$this->benchmark->elapsed_time('reset_start', 'reset_end')}s".PHP_EOL.PHP_EOL;
  }
  
  public function down($requiresNewTransactionContext = 'trx')
  {
    $this->benchmark->mark('down_start');
    if($requiresNewTransactionContext == 'trx') {
      echo 'Using new transaction context for DOWN operation'.PHP_EOL;
      $this->db->trans_start();  
    }
    
    foreach($this->_config['drops'] as $drop) {
      $this->dbforge->drop_table($drop, TRUE);
      echo "Table $drop dropped".PHP_EOL;
    }
    
    if($requiresNewTransactionContext == 'trx') {
      $this->db->trans_complete();  
    }

    $this->benchmark->mark('code_end');
    echo "Table drops completed in {$this->benchmark->elapsed_time('down_start', 'down_end')}s".PHP_EOL.PHP_EOL;
  }

  public function migrate($requiresNewTransactionContext = 'trx')
  {
    $this->benchmark->mark('migrate_start');
    if($requiresNewTransactionContext == 'trx') {
      echo 'Using new transaction context for MIGRATE operation'.PHP_EOL;
      $this->db->trans_start();
    }
    $this->load->library('migration');
    if($this->migration->current() === FALSE) {
      echo($this->migration->error_string());
      echo PHP_EOL;
    }
    
    if($requiresNewTransactionContext == 'trx') {
      $this->db->trans_complete();  
    }

    $this->benchmark->mark('migrate_end');

    echo "Schema migration completed in {$this->benchmark->elapsed_time('migrate_start', 'migrate_end')}s".PHP_EOL.PHP_EOL;
  }

  public function seed($requiresNewTransactionContext = 'trx')
  {
    $this->benchmark->mark('seed_start');
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

    for ($i = 0; $i < $this->_config['authors_count']; $i++) {
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

    for ($i = 0; $i < $this->_config['books_count']; $i++) {
        echo ".";

        $data = array(
            'id' => $i + 1,
            'title' => $this->faker->sentence(4),
            'synopsis' => $this->faker->paragraph(),
            'author_id' => $this->faker->numberBetween(1, $this->_config['authors_count']),
            'cover' => $this->faker->randomElement(array('/assets/images/c4.jpg', '/assets/images/c5.jpg', '/assets/images/c6.jpg','/assets/images/c7.jpg','/assets/images/c8.jpg'))
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
    $this->benchmark->mark('seed_end');
    echo "Seed completed in {$this->benchmark->elapsed_time('seed_start', 'seed_end')}s".PHP_EOL;
  }
}
