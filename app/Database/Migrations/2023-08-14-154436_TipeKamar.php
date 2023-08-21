<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipeKamar extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'			=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'nama'			=> ['type' => 'varchar', 'constraint' => 255],
			'deskripsi'     => ['type' => 'varchar', 'constraint' => 255],
            'harga'         => ['type' => 'int', ],
			'created_at'	=> ['type' => 'datetime', 'null' => true],
			'updated_at'	=> ['type' => 'datetime', 'null' => true],
			'deleted_at'	=> ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('nama');

		$this->forge->createTable('m_tipe_kamar', true);
    }

    public function down()
    {
        $this->forge->dropTable('m_tipe_kamar');
    }
}