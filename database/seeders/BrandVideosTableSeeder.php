<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brand_videos')->delete();
        
        \DB::table('brand_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video_url' => 'gb8_xwPWwSo',
                'created_at' => '2021-10-23 20:50:53',
                'updated_at' => '2021-10-23 20:50:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'video_url' => 'uJLJGtNCxu4',
                'created_at' => '2021-10-23 20:51:21',
                'updated_at' => '2021-10-23 20:51:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}