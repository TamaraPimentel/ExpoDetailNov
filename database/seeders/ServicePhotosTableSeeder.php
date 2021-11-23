<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicePhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service_photos')->delete();
        
        \DB::table('service_photos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-14 00:04:45',
                'updated_at' => '2021-10-14 00:04:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}