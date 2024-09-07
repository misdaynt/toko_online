<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_barang'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'komentar'       => [
				'type'           => 'TEXT',
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
        $this->forge->addForeignKey('id_user','user','id');
        $this->forge->addForeignKey('id_barang','barang','id');
		$this->forge->createTable('komentar');
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
?>