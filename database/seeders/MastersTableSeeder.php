<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MastersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('masters')->delete();
        
        \DB::table('masters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Juan Vidrio',
                'date' => '2022-02-06 12:00:00',
                'price' => '400',
                'topic' => 'Vapor en el Detallado de vehículos',
                'created_at' => '2021-10-24 01:45:55',
                'updated_at' => '2021-10-24 01:47:08',
                'deleted_at' => NULL,
                'owner_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Emir Ortíz',
                'date' => '2022-02-05 12:00:00',
                'price' => '400',
                'topic' => 'Corrección y nivelación de trasnparente',
                'created_at' => '2021-10-25 18:27:28',
                'updated_at' => '2021-10-25 18:27:28',
                'deleted_at' => NULL,
                'owner_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Carmen Mar',
                'date' => '2022-02-05 14:00:00',
                'price' => '400',
                'topic' => 'Limpieza y reacondicionamiento de interiores',
                'created_at' => '2021-10-25 18:28:04',
                'updated_at' => '2021-10-25 18:28:04',
                'deleted_at' => NULL,
                'owner_id' => 3,
            ),
        ));
        
        
    }
}