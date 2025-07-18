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
                'latitude'       => '-5.148711',
                'longitude'      => '119.439071',
                'about'          => 'Rumah Sakit Sandi Karsa Makassar adalah rumah sakit yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun xxxx dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-08 20:05:21',
            ],
            [
                'nama'           => 'Cerebellum Clinic',
                'jenis_layanan'  => 'Klinik',
                'alamat'         => 'Jl. Swadaya No.4, Masale, Kec. Panakkukang, Kota Makassar',
                'latitude'       => '-5.149727',
                'longitude'      => '119.439208',
                'about'          => 'Cerebellum Clinic Makassar adalah klinik yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun xxxx dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-09 20:05:21',
            ],
            [
                'nama'           => 'Puskesmas Tamamaung',
                'jenis_layanan'  => 'Puskesmas',
                'alamat'         => 'Jl. Abdullah Daeng Sirua No.158, Masale, Kec. Panakkukang, Kota Makassar',
                'latitude'       => '-5.151256',
                'longitude'      => '119.445602',
                'about'          => 'Puskesmas Tamamamaung Makassar adalah klinik yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun xxxx dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-10 20:05:21',
            ],
            [
                'nama'           => 'RS Hermina Makassar',
                'jenis_layanan'  => 'Rumah Sakit',
                'alamat'         => 'Jl. Toddopuli Raya Timur No.7, Borong, Kec. Manggala, Kota Makassar',
                'latitude'       => '-5.1526871',
                'longitude'      => '119.4440595',
                'about'          => 'RS Hermina Makassar adalah klinik yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun xxxx dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-10 20:05:21',
            ],
            [
                'nama'           => 'Klinik Bayangkara Panaikang',
                'jenis_layanan'  => 'Klinik',
                'alamat'         => 'Jl. Urip Sumoharjo Komp Aspol Panaikang No.KM7 No. A8, Karampuang, Kec. Panakkukang, Kota Makassar',
                'latitude'       => '-5.1526628',
                'longitude'      => '119.4441048',
                'about'          => 'Klinik Bayangkara Panaikang adalah klinik yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun xxxx dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-10 20:05:21',
            ],
            [
                'nama'           => 'Puskesmas Ballaparang Kec. Rappocini',
                'jenis_layanan'  => 'Puskesmas',
                'alamat'         => 'Jl. NIkel III, Balla Parang, Kec. Rappocini, Kota Makassar',
                'latitude'       => '-5.1517075',
                'longitude'      => '119.4195507',
                'about'          => 'Puskesmas Ballaparang adalah klinik yang terletak di Makassar, Sulawesi Selatan. Rumah sakit ini didirikan pada tahun xxxx dan berlokasi di Jalan Perintis Kemerdekaan, tak jauh dari kampus Universitas Hasanuddin. Rumah sakit ini mempunyai klinik spesialis',
                'created_at'     => '2020-03-10 20:05:21',
            ],
            
        ];

        Faskes::insert($faskeses);
    }
}