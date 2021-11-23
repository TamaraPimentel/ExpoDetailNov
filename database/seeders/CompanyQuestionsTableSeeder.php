<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_questions')->delete();
        
        \DB::table('company_questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'statement' => '¿QUIÉNES SOMOS?',
                'meaning' => '<p>Somos un espacio para la convivencia armónica entre marcas, detalladores profesionales y público en general; buscando el intercambio de opiniones y fomentando el entusiasmo e interés por el detallado de vehículos, &nbsp;todo esto con la finalidad de que los partícipes sean beneficiados.</p>',
                'created_at' => '2021-10-11 22:01:24',
                'updated_at' => '2021-10-11 22:01:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'statement' => 'MISIÓN',
                'meaning' => '<p>Fomentar el crecimiento y la convivencia entre marcas, proveedores, distribuidores, detalladores profesionales, entusiastas y emprendedores.&nbsp;</p>',
                'created_at' => '2021-10-11 22:02:11',
                'updated_at' => '2021-10-11 22:02:11',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'statement' => 'VISIÓN',
                'meaning' => '<p>Ser el primer evento masivo de detallado en México que dé la oportunidad de abrir el mercado nacional a todo el mundo, con la finalidad de brindar calidad y competencia en el detallado mundial.&nbsp;</p>',
                'created_at' => '2021-10-11 22:02:24',
                'updated_at' => '2021-10-11 22:02:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'statement' => 'VALORES',
                'meaning' => '<ul><li>Honestidad</li><li>Transparencia</li><li>Coherencia</li><li>Libertad</li><li>Excelencia</li><li>Adaptabilidad</li><li>Diligencia</li><li>Constancia</li><li>Justicia</li><li>Cercanía</li></ul>',
                'created_at' => '2021-10-11 22:03:06',
                'updated_at' => '2021-10-11 22:03:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'statement' => 'OBJETIVO ESPECÍFICO',
                'meaning' => '<p>Ampliar la cultura del correcto cuidado de vehículos en México.</p>',
                'created_at' => '2021-10-11 22:03:32',
                'updated_at' => '2021-10-11 22:03:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'statement' => 'OBJETIVO GENERAL',
                'meaning' => '<p>Ser un evento incluyente, atrayendo a hombres y mujeres que se han desarrollado en el mundo del detallado de vehículos profesional y a su vez a quienes desean incursionar en el mismo, con la finalidad de ampliar el abanico de opciones.</p>',
                'created_at' => '2021-10-11 22:03:45',
                'updated_at' => '2021-10-11 22:03:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}