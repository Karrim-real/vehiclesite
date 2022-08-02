<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('drive')->delete();
    $drives = array(
      array('id' =>1, 'name' =>'4WD (4 wheel drive)'),
      array('id' =>2, 'name' =>'Rear Wheel Drive (RWD)'),
      array('id' =>3, 'name' =>'Front Wheel Drive (FWD)'),
      array('id' =>4, 'name' =>'All-Wheel-Drive (AWD))'),

    );
    DB::table('drive')->insert($drives);
    }
}
