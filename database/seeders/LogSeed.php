<?php

namespace Database\Seeders;

use App\Models\LogStok;
use Illuminate\Database\Seeder;

class LogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logseeeds = [
            [
                'user_id'           => '2', //jangan diubah karena dia admin_faskes
                'tipe_item'         => 'darah', //enum dari [darah/oksigen]
                'tipe_pergerakan'   => 'masuk', //enum dari [masuk/keluar]
                'jumlah'            => '12',
                'keterangan'        => 'Sumbangan dari PMI Provinsi',
                'faskes_id'         => '1',
                'created_at'        => '2020-03-07 20:05:21',
            ],
            [
                'user_id'           => '2', //jangan diubah karena dia admin_faskes
                'tipe_item'         => 'darah', //enum dari [darah/oksigen]
                'tipe_pergerakan'   => 'keluar', //enum dari [masuk/keluar]
                'jumlah'            => '1',
                'keterangan'        => 'Bapak saya minta darah',
                'faskes_id'         => '1',
                'created_at'        => '2020-03-07 20:05:21',
            ],
            [
                'user_id'           => '2', //jangan diubah karena dia admin_faskes
                'tipe_item'         => 'darah', //enum dari [darah/oksigen]
                'tipe_pergerakan'   => 'masuk', //enum dari [masuk/keluar]
                'jumlah'            => '25',
                'keterangan'        => 'Sumbangan dari PMI Daerah',
                'faskes_id'         => '2',
                'created_at'        => '2020-03-07 20:05:21',
            ],
            [
                'user_id'           => '2', //jangan diubah karena dia admin_faskes
                'tipe_item'         => 'darah', //enum dari [darah/oksigen]
                'tipe_pergerakan'   => 'keluar', //enum dari [masuk/keluar]
                'jumlah'            => '1',
                'keterangan'        => 'Korban Kecelakaan',
                'faskes_id'         => '4',
                'created_at'        => '2020-03-07 20:05:21',
            ],
        ];

        LogStok::insert($logseeeds);
    }
}