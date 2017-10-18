<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{

  public function run()
   {
      $faker=Faker::create();
      
      for ($i=0; $i < 3000; $i++) { 
         \DB::table('cliente')->insert(array{
            'NOM_CLIE'=>$faker->firstname,
            'PAT_CLIE'=>$faker->lastname,
            'MAT_CLIE'=>$faker->lastname,
            'CI_CLIE'=>$faker->buildingNumber,
            'TEL_CLIE'=>$faker->buildingNumber

         });
      }
   }



}
