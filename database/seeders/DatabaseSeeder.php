<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $this->call(UserSeed::class);
        $this->call(FaskesSeed::class);


        $darahs = [
            ['nama_jenis' => 'A+'],
            ['nama_jenis' => 'A-'],
            ['nama_jenis' => 'B+'],
            ['nama_jenis' => 'B-'],
            ['nama_jenis' => 'AB+'],
            ['nama_jenis' => 'AB-'],
            ['nama_jenis' => 'O+'],
            ['nama_jenis' => 'O-'],
        ];

        $oksigens = [
            ['nama_jenis' => '0.3'],
            ['nama_jenis' => '0.5'],
            ['nama_jenis' => '1'],
            ['nama_jenis' => '1.5'],
            ['nama_jenis' => '2'],
            ['nama_jenis' => '6'],
            ['nama_jenis' => '7'],
        ];

        DB::table('jenis_darahs')->insert($darahs);
        DB::table('jenis_oksigens')->insert($oksigens);
    }
}
