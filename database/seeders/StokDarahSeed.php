<?php

namespace Database\Seeders;

use App\Models\StokDarah;
use Illuminate\Database\Seeder;

class StokDarahSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '1',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '2',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '3',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '4',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '5',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '6',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '7',
                'jumlah'         => '7',
            ],
            [
                'faskes_id'      => '1',
                'jenis_darah_id' => '8',
                'jumlah'         => '7',
            ],
        ];

        StokDarah::insert($datas);
    }
}