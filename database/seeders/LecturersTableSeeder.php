<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lecturers')->delete();
        
        \DB::table('lecturers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'G test',
                'date' => '2022-02-05 10:00:00',
                'topic' => 'test',
                'created_at' => '2021-10-25 02:46:59',
                'updated_at' => '2021-10-25 18:57:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}