<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {
  public function up() 
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'autoincrement' => TRUE
      ),
      'email' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),
      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),
      'admin' => array(
        'type' => 'BOOLEAN',
        'default' => FALSE
      )
    ));

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('users');
  }

  public function down()
  {
    $this->dbforge->drop_table('users');
  }
}

?>