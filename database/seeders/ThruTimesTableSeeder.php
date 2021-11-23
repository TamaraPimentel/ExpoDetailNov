<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThruTimesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('thru_times')->delete();
        
        \DB::table('thru_times')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Evento Febrero 2022',
                'description' => '<p>Expo Detail México en su primera edición reunirá a más de 40 marcas abriendo paso a nuevas oportunidades de crecimiento a fin de que profesionales, inversionistas, entusiastas, principiantes, emprendedores y público en general sean beneficiados.</p>',
                'created_at' => '2021-10-17 20:54:56',
                'updated_at' => '2021-10-17 21:54:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '5 y 6 FEB',
                'description' => '<p>Expo Detail México busca persistir a través del tiempo reuniendo toda clase de opiniones y puntos de vista sobre el detallado y marcar el inicio de una extraordinaria experiencia, captando el interés en toda la República Mexicana y reconociendo el arduo esfuerzo de todos y cada uno para llevar a cabo este magno evento.</p>',
                'created_at' => '2021-10-17 21:55:04',
                'updated_at' => '2021-10-17 21:55:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}