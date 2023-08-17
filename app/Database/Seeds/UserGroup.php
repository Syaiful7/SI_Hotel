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
            [
                'name'			=> 'Resepsionis',
                'description'	=> 'Mengelompokkan Resepsionis menjadi satu',
            ],
            [
                'name'			=> 'Owner',
                'description'	=> 'Mengelompokkan Owner menjadi satu',
            ],
        ];
        foreach ($data_groups as $key) {
            $this->db->table('auth_groups')->insert($key);
        }
        // Tabel Auth Groups Done
        // Tabel Users
        $data_user =
        [
            [
                'email'            => 'admin@hotel.com',
                'username'         => 'admin',
                'password_hash'    => password_hash('Tugas1234', PASSWORD_BCRYPT),
                'active'           => 1
            ],
        ];
        foreach ($data_user as $key) {
        $this->db->table('users')->insert($key);
        }
        // tabel users done

        // Tabel auth_groups_users
        $data_auth_groups_users =
			[
				[
					'group_id'	=> ($this->db->table('auth_groups')->where("name", "Admin")->get()->getFirstRow())->id,
					'user_id'         => ($this->db->table('users')->where("username", "admin")->get()->getFirstRow())->id,
				],
			];
		foreach ($data_auth_groups_users as $key) {
			$this->db->table('auth_groups_users')->insert($key);
		}
		// tabel auth_groups_users done
    }
}