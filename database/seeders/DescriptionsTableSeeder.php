<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DescriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('descriptions')->delete();
        
        \DB::table('descriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'DESCRIPCIÓN DETALLADA DEL EVENTO',
                'description' => '<p>Se podrá observar la competencia, probar y lanzar nuevos productos, estudiar el mercado, incrementar distribuidores y concretar negocios, se enriquecerá a los detalladores y visitantes de conocimientos, se darán a conocer productos y/o servicios.</p>',
                'created_at' => '2021-10-17 20:54:16',
                'updated_at' => '2021-10-17 20:54:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}