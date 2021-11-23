<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service_videos')->delete();
        
        \DB::table('service_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service_video_url' => 'dvWG7IZe0bU',
                'created_at' => '2021-10-14 00:46:55',
                'updated_at' => '2021-10-17 21:00:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}