<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailTransaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'			=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'kamar_id'      => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
			'transaksi_id'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'created_at'	=> ['type' => 'datetime', 'null' => true],
			'updated_at'	=> ['type' => 'datetime', 'null' => true],
			'deleted_at'	=> ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
        $this->forge->addForeignKey('kamar_id', 'm_kamar', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('transaksi_id', 't_transaksi', 'id', '', 'CASCADE');

		$this->forge->createTable('t_detail_transaksi', true);
    }

    public function down()
    {
        $this->forge->dropTable('t_detail_transaksi');
    }
}