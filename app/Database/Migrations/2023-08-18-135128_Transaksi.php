<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'			=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'tamu_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'tgl_mulai'     => ['type' => 'datetime'],
            'tgl_selesai'   => ['type' => 'datetime'],
            'total_harga'   => ['type' => 'int', 'constraint' =>11],
            'pembayaran'    => ['type' => 'varchar', 'constraint' => 255],
			'created_at'	=> ['type' => 'datetime', 'null' => true],
			'updated_at'	=> ['type' => 'datetime', 'null' => true],
			'deleted_at'	=> ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
        $this->forge->addForeignKey('tamu_id', 'users', 'id', '', 'CASCADE');

		$this->forge->createTable('t_transaksi', true);
    }

    public function down()
    {
        $this->forge->dropTable('t_transaksi');
    }
}