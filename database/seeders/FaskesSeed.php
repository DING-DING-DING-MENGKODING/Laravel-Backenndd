<?php

namespace Database\Seeders;

use App\Models\Faskes;
use Illuminate\Database\Seeder;

class FaskesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faskeses = [
            [
                'nama'           => 'RS Wahidin',
                'jenis_layanan'  => 'Rumah Sakit',
                'alamat'         => 'Jl. Perintis Kemerdekaan Nomor 75, Makassar',
                'latitude'       => '-5.134315',
                'longitude'      => '119.494396',
                'about'          => 'Rumah Sakit Umum Pusat dr. Wahidin Sudirohusodo adalah rumah sakit yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun 1993 dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-07 20:05:21',
            ],
            [
                'nama'           => 'RS Sandi Karsa Makassar',
                'jenis_layanan'  => 'Rumah Sakit',
                'alamat'         => 'Jl. Abdullah Daeng Sirua No.16A, Makassar',
                'latitude'       => '-5.134315',
                'longitude'      => '119.494396',
                'about'          => 'Rumah Sakit Umum Pusat dr. Wahidin Sudirohusodo adalah rumah sakit yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun 1993 dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-07 20:05:21',
            ],
        ];

        Faskes::insert($faskeses);
    }
}