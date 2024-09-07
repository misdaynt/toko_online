<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'salt' => [
				'type'           => 'TEXT',
			],
			'avatar'      => [
				'type'           => 'TEXT',
				'null'=> TRUE,
			],
            'role'      => [
				'type'           => 'INT',
				'constraint'     => 1,
                'default' =>1,
			],
            'created_by'      => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
            'created_date'      => [
				'type'           => 'DATETIME',
			],
            'created_by'      => [
				'type'           => 'INT',
				'constraint'     => 11,
                'NULL' => TRUE,
			],
            'created_date'      => [
				'type'           => 'DATETIME',
				'null'     => TRUE,
			],
            
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
?>