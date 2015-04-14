<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_books_tags extends CI_Migration {
  public function up() 
  {
    $this->dbforge->add_field(array(
      'book_id' => array(
        'type' => 'INT',
        'constraint' => 11,
      ),
      'tag_id' => array(
        'type' => 'INT',
        'constraint' => 11,
      )
    ));

    $this->dbforge->add_key('book_id', TRUE);
    $this->dbforge->add_key('tag_id', TRUE);
    $this->dbforge->create_table('books_tags', TRUE);
  }

  public function down()
  {
    $this->dbforge->drop_table('books_tags');
  }
}

?>