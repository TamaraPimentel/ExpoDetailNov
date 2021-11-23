<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => '¿Cómo es el proceso de pre registro?',
                'answer' => 'En la pantalla de inicio se encuentra el botón que te redireccionará al área de método de pago, luego te mandará a realizar el pago seguro donde ya realizado el pago, generará un comprobante y tu gafete para que el día del evento lo presentes impreso.',
                'created_at' => '2021-10-11 22:09:40',
                'updated_at' => '2021-10-11 22:09:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question' => '¿Hay estacionamiento?',
                'answer' => 'El lugar cuenta con servicio de estacionamiento y Valet Parking, también tienes la opción de estacionarte en la plaza “Puerta Tlatelolco” que se encuentra a 2 minutos de la sede.',
                'created_at' => '2021-10-11 22:09:54',
                'updated_at' => '2021-10-11 22:09:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'question' => '¿Hay hospedaje cerca?',
                'answer' => 'A 15 minutos del Centro de Convenciones Tlatelolco se encuentra avenida Paseo de la Reforma, teniendo como referencia el Ángel de la Independencia donde existe una gran variedad de hoteles para su máximo confort.',
                'created_at' => '2021-10-11 22:11:13',
                'updated_at' => '2021-10-11 22:11:13',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'question' => '¿Las conferencias tendrán algún costo?',
                'answer' => 'Dentro de la exposición habrá conferencias generales gratuitas y habrá conferencias magistrales con costo.',
                'created_at' => '2021-10-11 22:11:50',
                'updated_at' => '2021-10-11 22:11:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}