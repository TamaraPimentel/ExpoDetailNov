<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_contacts')->delete();
        
        \DB::table('contact_contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'facebook_url' => 'https://www.facebook.com/Expo-Detail-México-106743035054588/',
                'instragram_url' => 'https://www.instagram.com/expodetailmexico?r=nametag',
                'youtube_url' => NULL,
                'tiktok_url' => 'https://vm.tiktok.com/ZMRESmbQK/',
                'twitter_url' => NULL,
                'other_url' => NULL,
                'button_text' => 'CONOCE LA SEDE',
                'button_url' => 'https://www.google.com/maps/place/Centro+de+Convenciones+Tlatelolco/@19.4558388,-99.139472,15z/data=!4m2!3m1!1s0x0:0x3e8f5e7e2478a372?sa=X&ved=2ahUKEwjizZCY56fzAhUdhv0HHcLzC-8Q_BJ6BAhQEAU',
                'created_at' => '2021-09-30 23:05:48',
                'updated_at' => '2021-10-11 22:14:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}