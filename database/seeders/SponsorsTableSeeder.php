<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sponsors')->delete();
        
        \DB::table('sponsors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'TEST PATROCINADOR',
                'web_url' => 'https://google.com',
                'created_at' => '2021-10-11 22:07:57',
                'updated_at' => '2021-10-11 22:07:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}