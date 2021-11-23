<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hero_title' => 'Expo Detail México',
                'hero_subtitle' => '"Lo mejor y los mejores en un mismo lugar"',
                'button_text' => 'Registrate ahora',
                'button_url' => NULL,
                'bottom_text' => NULL,
                'created_at' => '2021-10-11 21:56:19',
                'updated_at' => '2021-10-11 21:59:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'hero_title' => 'Detallado automovilístico en vivo',
                'hero_subtitle' => '"Lo mejor y los mejores en un mismo lugar."',
                'button_text' => 'Registrarse ahora',
                'button_url' => NULL,
                'bottom_text' => NULL,
                'created_at' => '2021-10-11 21:59:23',
                'updated_at' => '2021-10-11 21:59:23',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'hero_title' => 'El evento del año',
                'hero_subtitle' => '"Lo mejor y los mejores en un mismo lugar"',
                'button_text' => 'Registrarse ahora',
                'button_url' => NULL,
                'bottom_text' => NULL,
                'created_at' => '2021-10-11 22:00:08',
                'updated_at' => '2021-10-11 22:00:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}