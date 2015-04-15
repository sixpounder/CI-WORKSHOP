<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_books extends CI_Migration {
  public function up() 
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'title' => array(
        'type' => 'VARCHAR',
        'constraint' => 100
      ),
      'synopsis' => array(
        'type' => 'VARCHAR',
        'constraint' => 1000,
        'default' => null,
        'null' => true
      ),
      'author_id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE
      ),
      'cover' => array(
        'type' => 'VARCHAR',
        'constraint' => 1024,
        'default' => ''
      )
    ));

    $this->dbforge->add_key('id', TRUE);
    
    $this->dbforge->create_table('books', TRUE);
  }

  public function down()
  {
    $this->dbforge->drop_table('books');
  }
}

?>