<?php

use Illuminate\Database\Seeder;
use App\dataKaryawan;

class DataKaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(dataKaryawan::class, 50)->create(); 
    }
}
