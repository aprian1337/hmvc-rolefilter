<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accounts extends Migration
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
					'nama'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '100',
					],
					'username' => [
							'type'           => 'VARCHAR',
							'constraint'	 => '50',
					],
					'password' => [
						'type'           	 => 'VARCHAR',
						'constraint'		 => '255',
					],
					'role' => [
						'type'           => 'ENUM',
						'constraint'     => ['admin', 'users'],
						'default'        => 'users',
					],
					'created_at' => [
						'type'           => 'DATETIME',
						'null' 			 => TRUE
					],
					'updated_at' => [
						'type'           => 'DATETIME',
						'null' 			 => TRUE
					]
			]);
			$this->forge->addKey('id', true);
			$this->forge->createTable('accounts');
	}

	public function down()
	{
			$this->forge->dropTable('accounts');
	}
}
