<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('transmission')->delete();
    $transmissions = array(
      array('id' =>1, 'name' =>'Automatic'),
      array('id' =>2, 'name' =>'Manual'),
      array('id' =>3, 'name' =>'Automated Manual'),
      array('id' =>4, 'name' =>'Continuously Variable'),
    );
    DB::table('transmission')->insert($transmissions);
    }
}
