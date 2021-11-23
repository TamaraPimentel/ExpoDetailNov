<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeaderPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('header_photos')->delete();
        
        \DB::table('header_photos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-04 17:05:17',
                'updated_at' => '2021-10-04 17:05:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}