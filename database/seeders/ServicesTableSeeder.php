<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service_title' => 'STANDS',
                'services_description' => '<p>En los stands se contarán con venta de productos a precio de exposición, así como la adquisición de nuevos puntos de venta y distribución, de igual manera los estudios de detallado mostrarán y ofrecerán sus servicios.</p>',
                'created_at' => '2021-10-11 22:04:54',
                'updated_at' => '2021-10-11 22:04:54',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'service_title' => 'CONFERENCIAS',
                'services_description' => '<p>Habrá conferencias abiertas al público, al igual que conferencias magistrales con costo.</p>',
                'created_at' => '2021-10-11 22:05:08',
                'updated_at' => '2021-10-11 22:05:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'service_title' => 'BANCO DE TAPITAS',
            'services_description' => '<p>Al presentar la cantidad de 50 tapitas de plástico menores de edad no pagarán acceso (se solicita acreditar la edad), BANCO DE TAPITAS AC. Es una asociación civil sin fines de lucro en apoyo a la lucha contra el cáncer infantil que recauda fondos a través del reciclaje. Estos son utilizados en tratamientos que van desde una quimioterapia hasta un trasplante de médula ósea.</p>',
                'created_at' => '2021-10-11 22:05:21',
                'updated_at' => '2021-10-11 22:05:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}