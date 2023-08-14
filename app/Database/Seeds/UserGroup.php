<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserGroup extends Seeder
{
    public function run()
    {
        // Tabel Auth Groups
		$data_groups =
        [
            [
                'name'			=> 'Tamu',
                'description'	=> 'Mengelompokkan Tamu menjadi satu',
            ],
            [
                'name'			=> 'Admin',
                'description'	=> 'Mengelompokkan Admin menjadi satu',
            ],
        ];
    foreach ($data_groups as $key) {
        $this->db->table('auth_groups')->insert($key);
    }
    // Tabel Auth Groups Done

    }
}
