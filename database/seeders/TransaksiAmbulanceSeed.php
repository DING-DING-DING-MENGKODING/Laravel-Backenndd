<?php

namespace Database\Seeders;

use App\Models\TransaksiAmbulance;
use Illuminate\Database\Seeder;

class TransaksiAmbulanceSeed extends Seeder
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
                'ambulance_id'   => '1',
                'driver_id'      => '3',
                'lokasi_user_latitude'  => '-5.148731',
                'lokasi_user_longitude' => '119.439074',
                'status'         => 'pending',
                'created_at'     => '2020-03-07 20:05:21',
            ],
            [
                'user_id'        => '4',
                'faskes_id'      => '1',
                'admin_id'       => '2',
                'ambulance_id'   => '2',
                'driver_id'      => '3',
                'lokasi_user_latitude'  => '-5.148731',
                'lokasi_user_longitude' => '119.439074',
                'status'         => 'completed',
                'created_at'     => '2020-03-07 20:05:21',
            ],
        ];

        TransaksiAmbulance::insert($datastransaksis);
    }
}