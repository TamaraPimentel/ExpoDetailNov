<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExposerImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exposer_images')->delete();
        
        \DB::table('exposer_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-23 01:30:56',
                'updated_at' => '2021-10-23 01:30:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}