<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_videos')->delete();
        
        \DB::table('company_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'video_company_url' => 'vSBUdRQnqOc',
                'created_at' => '2021-10-13 23:43:11',
                'updated_at' => '2021-10-18 16:18:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}