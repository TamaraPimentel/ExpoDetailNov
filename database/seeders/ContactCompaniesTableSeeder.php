<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_companies')->delete();
        
        \DB::table('contact_companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_name' => 'Expo Detail México',
                'description' => 'Expo Detail México es un espacio en el cual se busca el crecimiento de el Detallado Profesional de vehículos, mediante una exposición de proveedores, conferencias magistrales y centro de negocios.',
                'company_email' => 'contacto@expodetailmexico.com',
                'company_phone' => '5548140114',
                'company_address' => 'Jilotepec número 382, La Romana Tlalnepantla Estado de México.',
                'facebook_url' => 'https://www.facebook.com/Expo-Detail-México-106743035054588/',
                'instagram_url' => 'https://www.instagram.com/expodetailmexico?r=nametag',
                'youtube_url' => NULL,
                'tiktok_url' => 'https://vm.tiktok.com/ZMRESmbQK/',
                'twitter_url' => NULL,
                'other_url' => NULL,
                'created_at' => '2021-09-30 23:08:08',
                'updated_at' => '2021-10-11 22:16:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}