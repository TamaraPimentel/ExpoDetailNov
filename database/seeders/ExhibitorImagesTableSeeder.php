<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExhibitorImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exhibitor_images')->delete();
        
        \DB::table('exhibitor_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-23 17:41:26',
                'updated_at' => '2021-10-23 17:41:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}