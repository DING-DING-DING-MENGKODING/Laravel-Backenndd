<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'Afdhal Hilmi',
                'email'          => 'suadmin@example.com',
                'password'       => bcrypt('123'),
                'nomor_whatsapp' => '+6289506425222',
                'role'           => 'super_admin',
                'created_at'     => '2020-03-07 20:05:21',
            ],
            [
                'name'           => 'Raffi Tes Tes',
                'email'          => 'admin@example.com',
                'password'       => bcrypt('123'),
                'nomor_whatsapp' => '+62882020802944',
                'role'           => 'admin_faskes',
                'created_at'     => '2020-03-08 20:05:21',
            ],
            [
                'name'           => 'Adinda Ambulance',
                'email'          => 'driver@example.com',
                'password'       => bcrypt('123'),
                'nomor_whatsapp' => '+6287763443067',
                'role'           => 'user_ambulance',
                'created_at'     => '2020-03-09 20:05:21',
            ],
            [
                'name'           => 'Bang Dika',
                'email'          => 'user@example.com',
                'password'       => bcrypt('123'),
                'nomor_whatsapp' => '+6285925165412',
                'role'           => 'user_mobile',
                'created_at'     => '2020-04-12 20:05:21',
            ],
        ];

        User::insert($users);
    }
}