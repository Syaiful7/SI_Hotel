<?php

namespace App\Database\Seeds;

use App\Entities\User;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;
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
            $auth = service('authorization');
            $auth->createGroup($key['name'], $key['description']);
        }
        // Tabel Auth Groups Done
        // Tabel Users
        $data_user =
            [
                'email'            => 'admin@hotel.com',
                'username'         => 'admin',
                'password'          => 'Tugas1234',
                'active'           => 1,
            ];
            $user = new User($data_user);
            $users = model(UserModel::class);
            $users->withGroup('Admin')->insert($user);
        // tabel users done

        $tipe_kamar =
        [
            [
                'nama' => 'Deluxe Room',
                'deskripsi' => 'Deluxe',
                'harga' => 200000,
            ],
            [
                'nama' => 'Double Suite',
                'deskripsi' => 'Suite',
                'harga' => 150000,
            ],
            [
                'nama' => 'Single Room',
                'deskripsi' => 'Single',
                'harga' => 100000,
            ],
        ];
        foreach ($tipe_kamar as $key) {
            $tipeKamarModel = model('TipeKamarModel', false);
            $tipeKamarModel->insert($key);
        }
        
        $tipeKamarModel = model('TipeKamarModel', false);
            
        $kamar =
        [
            [
                'no' => '1',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Deluxe Room')->first()['id'],
            ],
            [
                'no' => '2',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Deluxe Room')->first()['id'],
            ],
            [
                'no' => '3',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Double Suite')->first()['id'],
            ],
            [
                'no' => '4',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Double Suite')->first()['id'],
            ],
            [
                'no' => '5',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Double Suite')->first()['id'],
            ],
            [
                'no' => '6',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Single Room')->first()['id'],
            ],
            [
                'no' => '7',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Single Room')->first()['id'],
            ],
            [
                'no' => '8',
                'tipe_kamar_id' => $tipeKamarModel->where('nama', 'Single Room')->first()['id'],
            ],
        ];
        foreach ($kamar as $key) {
            $kamarModel = model('KamarModel', false);
            $kamarModel->insert($key);
        }
    }
}