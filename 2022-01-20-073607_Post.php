<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{ $this->forge->addField([
		'id' => [
			 'type'           => 'INT',
			 'constraint'     => 11,
			 'unsigned'       => TRUE,
			 'auto_increment' => TRUE
		  ],
		 'suhu' => [
			  'type'           => 'INT',
			  'constraint'     => 100,
			  'unsigned' => TRUE
		  ],
		  'kelembapan'     => [
			  'type'   => 'INT',
			  'constraint' => 100,
			  'unsigned' => TRUE
		  ],
	  ]);
	  $this->forge->addKey('id', TRUE);
	  $this->forge->createTable('posts');
		//
	}

	public function down()
	{
		//
	}
}
