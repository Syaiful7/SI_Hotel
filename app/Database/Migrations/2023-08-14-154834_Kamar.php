<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kamar extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'			=> ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'no'			=> ['type' => 'int'],
            'tipe_kamar_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
			'created_at'	=> ['type' => 'datetime', 'null' => true],
			'updated_at'	=> ['type' => 'datetime', 'null' => true],
			'deleted_at'	=> ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('no');
        $this->forge->addForeignKey('tipe_kamar_id', 'm_tipe_kamar', 'id', '', 'CASCADE');

		$this->forge->createTable('m_kamar', true);
    }

    public function down()
    {
        $this->forge->dropTable('m_kamar');
    }
}