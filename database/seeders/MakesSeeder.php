<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makes')->delete();
        $makes = array(
          array('id' =>1 , 'name' => 'Audi' ,'code' => 'AUDI'),
          array('id' =>2 , 'name' => 'Bentley' ,'code' => 'BENTL'),
          array('id' =>3 , 'name' => 'BMW' ,'code' => 'BMW'),
          array('id' =>4 , 'name' => 'Chevrolet' ,'code' => 'CHEV'),
          array('id' =>5 , 'name' => 'Daewoo' ,'code' => 'DAEW'),
          array('id' =>6 , 'name' => 'Daihatsu' ,'code' => 'DAIHAT'),
          array('id' =>7 , 'name' => 'FIAT' ,'code' => 'FIAT'),
          array('id' =>8 , 'name' => 'Ford' ,'code' => 'FORD'),
          array('id' =>9 , 'name' => 'Honda' ,'code' => 'HONDA'),
          array('id' =>10 , 'name' => 'HUMMER' ,'code' => 'AMGEN'),
          array('id' =>11 , 'name' => 'Hyundai' ,'code' => 'HYUND'),
          array('id' =>12 , 'name' => 'Infiniti' ,'code' => 'INFIN'),
          array('id' =>13 , 'name' => 'Isuzu' ,'code' => 'ISU'),
          array('id' =>14 , 'name' => 'Jaguar' ,'code' => 'JAG'),
          array('id' =>15 , 'name' => 'Jeep' ,'code' => 'JEEP'),
          array('id' =>16 , 'name' => 'Kia' ,'code' => 'KIA'),
          array('id' =>17 , 'name' => 'Land Rover' ,'code' => 'ROV'),
          array('id' =>18 , 'name' => 'Lexus' ,'code' => 'LEXUS'),
          array('id' =>19 , 'name' => 'Maybach' ,'code' => 'MAYBACH'),
          array('id' =>20 , 'name' => 'Mazda' ,'code' => 'MAZDA'),
          array('id' =>21 , 'name' => 'Mercedes-Benz' ,'code' => 'MB'),
          array('id' =>22 , 'name' => 'Mitsubishi' ,'code' => 'MIT'),
          array('id' =>23 , 'name' => 'Nissan' ,'code' => 'NISSAN'),
          array('id' =>24 , 'name' => 'Peugeot' ,'code' => 'PEUG'),
          array('id' =>25 , 'name' => 'Porsche' ,'code' => 'POR'),
          array('id' =>26 , 'name' => 'Renault' ,'code' => 'REN'),
          array('id' =>27 , 'name' => 'Subaru' ,'code' => 'SUB'),
          array('id' =>28 , 'name' => 'Suzuki' ,'code' => 'SUZUKI'),
          array('id' =>29 , 'name' => 'Tesla' ,'code' => 'TESLA'),
          array('id' =>30 , 'name' => 'Toyota' ,'code' => 'TOYOTA'),
          array('id' =>31 , 'name' => 'Volkswagen' ,'code' => 'VOLKS'),
          array('id' =>32 , 'name' => 'Volvo' ,'code' => 'VOLVO'),
          array('id' =>33 , 'name' => 'Hino' ,'code' => 'HINO'),
        );
        DB::table('makes')->insert($makes);
    }
    
}
