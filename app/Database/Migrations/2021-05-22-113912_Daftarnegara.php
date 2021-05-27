<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftarnegara extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'namanegara'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'kota' => [
				'type' => 'TEXT',
				'null' => false,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('negara');
	}

	public function down()
	{
		$this->forge->dropTable('negara');
	}
}
