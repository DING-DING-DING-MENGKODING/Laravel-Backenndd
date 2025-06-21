<?php

namespace Database\Seeders;

use App\Models\TransaksiStok;
use Illuminate\Database\Seeder;

class TransaksiStokSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datastransaksis = [
            [
                'user_id'        => '4',
                'faskes_id'      => '1',
                'admin_id'       => '2',
                'status'         => 'masuk',
                'jumlah'         => '7',
                'created_at'     => '2020-03-07 20:05:21',
            ],
            [
                'user_id'        => '4',
                'faskes_id'      => '1',
                'admin_id'       => '2',
                'status'         => 'masuk',
                'jumlah'         => '5',
                'created_at'     => '2020-03-07 20:05:21',
            ],
            [
                'user_id'        => '4',
                'faskes_id'      => '1',
                'admin_id'       => '2',
                'status'         => 'keluar',
                'jumlah'         => '10',
                'created_at'     => '2020-03-07 20:05:21',
            ],
        ];

        TransaksiStok::insert($datastransaksis);
    }
}