<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
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
			'nama_barang'       => [
				'type'           => 'TEXT',
			],
            'harga'      => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
            'pk_barang'      => [
				'type'           => 'INT',
                'constraint'     => 11,
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

		$this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
?>