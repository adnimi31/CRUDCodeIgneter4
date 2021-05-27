<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
			'foto' => [
				'type' => 'TEXT',
				'null' => false,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alamat' => [
				'type' => 'TEXT',
				'null' => false,
			],
			'nohp' => [
				'type'       => 'VARCHAR',
				'constraint' => '15',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
