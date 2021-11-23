<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'quote' => 'Lo que espero del evento es encontrar mucha variedad de productos para el detailing así como técnicas y procesos de diferentes colegas para poder hacer que el público en general conozca más este hermoso mundo.',
                'name' => 'Gerardo Cabrera Dávalos',
                'created_at' => '2021-10-17 20:55:56',
                'updated_at' => '2021-10-17 20:55:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'quote' => 'Espero conocer a los diferentes participantes, estudios así como los productos y marcas que ofrecen. Consejos y experiencias a impartir, pero sobre todo vivir y ser parte de la experiencia de Expo Detail México.',
                'name' => 'Octavio Martínez',
                'created_at' => '2021-10-17 20:56:20',
                'updated_at' => '2021-10-17 20:56:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'quote' => 'Me complacería que en este evento pudiéramos unir fuerzas para futuros negocios en el ramo del detallado para así poder conocer variedad de marcas de productos y equipos para el detallado automotriz, así como el apoyo entre colegas.',
                'name' => 'Marco Antonio Rosas García',
                'created_at' => '2021-10-17 20:56:40',
                'updated_at' => '2021-10-17 20:56:40',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'quote' => 'Un evento de alto impacto. Estamos contado los días para lo que será el mejor evento del año en el ramo del detallado Automotriz en México, un evento del cual esperamos realizar alianzas estratégicas de alto impacto con negocios similares.',
                'name' => 'Felipe Rocha Camacho',
                'created_at' => '2021-10-17 20:57:01',
                'updated_at' => '2021-10-17 20:57:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'quote' => 'Me da mucha alegría un evento tan grande en México, así puedo conocer más sobre este hermoso oficio del detallado, convivir con expertos y conocer más marcas de productos, herramientas, así como técnicas y tips para así seguir mejorando día con día.',
                'name' => 'Víctor Saul Reyes Alba',
                'created_at' => '2021-10-17 20:57:25',
                'updated_at' => '2021-10-17 20:57:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'quote' => 'Expectativas: ver y probar los productos de los mayores exponentes del Detail a nivel mundial. Y lo importante es que los expositores sean apasionados, que sepan las propiedades y correctos usos de los productos que promueven.',
                'name' => 'Alexander Salnikov Irigoyen',
                'created_at' => '2021-10-17 20:57:45',
                'updated_at' => '2021-10-17 20:57:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}