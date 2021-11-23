<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactFormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_forms')->delete();
        
        \DB::table('contact_forms')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Tamara Martinez Pimentel',
                'subject' => 'Pruebas',
                'email' => 'tamyx.p@hotmail.com',
            'message' => 'Ignoren mi mensaje :)',
            'created_at' => '2021-10-25 16:26:11',
            'updated_at' => '2021-10-25 22:12:57',
            'deleted_at' => '2021-10-25 22:12:57',
        ),
    ));
        
        
    }
}