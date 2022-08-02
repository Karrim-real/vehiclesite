<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('body')->delete();
    $bodies = array(
      array('id' =>1, 'name' =>'Sedan / Saloon'),
      array('id' =>2, 'name' =>'Station Wagon'),
      array('id' =>3, 'name' =>'Coupe'),
      array('id' =>4, 'name' =>'Sport-Utility Vehicle SUV'),
      array('id' =>5, 'name' =>'Hatchback'),
      array('id' =>6, 'name' =>'Micro'),
      array('id' =>7, 'name' =>'Convertible'),
      array('id' =>8, 'name' =>'Van'),
      array('id' =>9, 'name' =>'Pickup Truck'),
      array('id' =>10, 'name' =>'Truck'),
      array('id' =>11, 'name' =>'Sports Car'),
      array('id' =>12, 'name' =>'Bus'),


    );
    DB::table('body')->insert($bodies);
    
    }
}
