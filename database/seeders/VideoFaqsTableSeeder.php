<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('video_faqs')->delete();
        
        \DB::table('video_faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video_faqs' => 'Q7Glrmra4aA',
                'created_at' => '2021-10-14 01:08:36',
                'updated_at' => '2021-10-17 21:03:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}