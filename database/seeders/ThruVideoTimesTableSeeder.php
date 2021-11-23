<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThruVideoTimesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('thru_video_times')->delete();
        
        \DB::table('thru_video_times')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video_url' => 'sgnVfdw4FyY',
                'created_at' => '2021-10-17 21:04:35',
                'updated_at' => '2021-10-17 21:04:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}