<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MademeAnExhibitorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mademe_an_exhibitors')->delete();
        
        \DB::table('mademe_an_exhibitors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tamara Martinez Pimentel',
                'email' => 'tamyx.p@hotmail.com',
                'message' => 'Probando expositor',
                'created_at' => '2021-10-25 22:11:25',
                'updated_at' => '2021-10-25 22:12:50',
                'deleted_at' => '2021-10-25 22:12:50',
            ),
        ));
        
        
    }
}