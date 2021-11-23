<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BenefitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('benefits')->delete();
        
        \DB::table('benefits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => '¿Por qué asistir como patrocinador?',
                'answer' => '<p>Invitar a las marcas involucradas dentro de un mismo espacio, con la intención de darse a conocer.</p>',
                'created_at' => '2021-10-23 01:23:59',
                'updated_at' => '2021-10-23 01:23:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question' => '¿Por qué asistir como proveedor?',
            'answer' => '<p>Las marcas/proveedores tendrán la opción de mostrar y vender sus productos a costos por debajo del mercado con la finalidad de atraer nuevos clientes (precio distribuidor, no precio público).</p>',
                'created_at' => '2021-10-23 01:24:19',
                'updated_at' => '2021-10-23 01:24:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'question' => '¿Por qué asistir como detallador?',
                'answer' => '<p>Se pretende realizar clínicas/ demostraciones mismas que consistirán en clases teórico- prácticas. A su vez, se pretende hacer conferencias temáticas.</p>',
                'created_at' => '2021-10-23 01:24:33',
                'updated_at' => '2021-10-23 01:24:33',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'question' => '¿Por qué asistir como público general?',
                'answer' => '<p>Poder ser parte del primer evento de detallado de vehículos a nivel nacional, teniendo la posibilidad de poder conocer a los mejores exponentes del ramo, todos dentro de un mismo espacio.</p>',
                'created_at' => '2021-10-23 01:25:07',
                'updated_at' => '2021-10-23 01:25:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}