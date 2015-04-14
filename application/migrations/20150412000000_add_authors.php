<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_authors extends CI_Migration {
  public function up() 
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'autoincrement' => TRUE
      ),
      'name' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      )
    ));

    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('authors', TRUE);
  }

  public function down()
  {
    $this->dbforge->drop_table('authors');
  }
}

?>