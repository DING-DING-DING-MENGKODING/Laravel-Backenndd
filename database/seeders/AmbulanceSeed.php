<?php

namespace Database\Seeders;

use App\Models\Ambulance;
use Illuminate\Database\Seeder;

class AmbulanceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ambulances = [
            [
                'nama_mobil'    => 'Toyota Hiace',
                'faskes_id'     => '1',
                'nomor_polisi'  => 'DD 5454 XYZ',
                'status'        => 'Available',
                'created_at'    => '2020-03-07 20:05:21',
            ],
            [
                'nama_mobil'    => 'Toyota Kijang',
                'faskes_id'     => '1',
                'nomor_polisi'  => 'DD 3454 AA',
                'status'        => 'Unavailable',
                'created_at'    => '2020-03-08 20:05:21',
            ],
        ];

        Ambulance::insert($ambulances);
    }
}