<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhotoDescriptionGralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('photo_description_grals')->delete();
        
        \DB::table('photo_description_grals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-17 21:04:17',
                'updated_at' => '2021-10-17 21:04:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}