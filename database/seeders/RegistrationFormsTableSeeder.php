<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegistrationFormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('registration_forms')->delete();
        
        \DB::table('registration_forms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Jorge Martinez',
                'phone' => '5529376288',
                'email' => 'jorgemdj.oficial@gmail.com',
                'company' => 'Car Care Detail',
                'position' => NULL,
                'link' => 1,
                'created_at' => '2021-10-10 21:07:08',
                'updated_at' => '2021-10-10 21:07:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Adrian Serrrano',
                'phone' => '5537106097',
                'email' => 'adrian281197@gmail.com',
                'company' => 'ASVDetail',
                'position' => 'Emprendedor',
                'link' => 1,
                'created_at' => '2021-10-13 15:02:16',
                'updated_at' => '2021-10-13 15:02:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Alfredo Sergio Gómez Mayorga',
                'phone' => '5516938234',
                'email' => 'sergio_mayor_1@hotmail.com',
                'company' => 'Barher',
                'position' => 'Residente',
                'link' => 1,
                'created_at' => '2021-10-13 16:29:05',
                'updated_at' => '2021-10-13 16:29:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Hugo Martínez Olvera',
                'phone' => '5529700275',
                'email' => 'h.mtz03@hotmail.com',
                'company' => '-',
                'position' => '-',
                'link' => 1,
                'created_at' => '2021-10-13 16:35:09',
                'updated_at' => '2021-10-13 16:35:09',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Iván Alejandro Abeldaño Ponce',
                'phone' => '5525047529',
                'email' => 'alexcossin@outlook.com',
                'company' => 'Mazda',
                'position' => 'Detallador/Preparador',
                'link' => 1,
                'created_at' => '2021-10-13 18:06:34',
                'updated_at' => '2021-10-13 18:06:34',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Roberto Valverde Taboada',
                'phone' => '5516576882',
                'email' => 'chilismorris@hotmail.com',
                'company' => 'VAJ detailing',
                'position' => 'Detallador',
                'link' => 1,
                'created_at' => '2021-10-13 22:01:51',
                'updated_at' => '2021-10-13 22:01:51',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'MARCO GARCIA',
                'phone' => '5558788495',
                'email' => 'starkiler65@gmail.com',
                'company' => 'EMPIRE GAMO',
                'position' => 'ventas',
                'link' => 1,
                'created_at' => '2021-10-13 22:24:58',
                'updated_at' => '2021-10-13 22:24:58',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Gerardo Cabrera Davalos',
                'phone' => '3328339177',
                'email' => 'jerrysdetailcarstudio@gmail.com',
                'company' => 'Jerry\'s Detail',
                'position' => 'Director',
                'link' => 1,
                'created_at' => '2021-10-14 00:52:14',
                'updated_at' => '2021-10-14 00:52:14',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Cintia Donaji Pinedo Sánchez',
                'phone' => '3328339177',
                'email' => 'jerrysdetailcarstudio@gmail.com',
                'company' => 'Jerry\'s Detail',
                'position' => 'Administradora',
                'link' => 1,
                'created_at' => '2021-10-14 00:53:51',
                'updated_at' => '2021-10-14 00:53:51',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'JESUS ERNESTO HOLDER MARQUEZ',
                'phone' => '9515057465',
                'email' => 'jesusholder@hotmail.com',
                'company' => 'BLACK DIAMOND PREMIUM CAR DETAILING',
                'position' => 'GERENTE GENERAL',
                'link' => 1,
                'created_at' => '2021-10-17 15:33:51',
                'updated_at' => '2021-10-17 15:33:51',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Soledad Sanchez Herrera',
                'phone' => '9511775740',
                'email' => 'jesusholder@hotmail.com',
                'company' => 'BLACK DIAMOND PREMIUM CAR DETAILING',
                'position' => 'GERENTE ADMINISTRATIVO',
                'link' => 1,
                'created_at' => '2021-10-18 01:06:58',
                'updated_at' => '2021-10-18 01:06:58',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Cristhian Alberto Balderas Rodríguez',
                'phone' => '5563467515',
                'email' => 'marol2906@hotmail.com',
                'company' => 'Balderas Car Detailing',
                'position' => 'Propietario',
                'link' => 1,
                'created_at' => '2021-10-19 18:09:02',
                'updated_at' => '2021-10-19 18:09:02',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Marco Antonio Pérez Rodríguez',
                'phone' => '5526754243',
                'email' => 'visionrock101@gmail.com',
                'company' => 'Phenomania',
                'position' => 'Independiente',
                'link' => 1,
                'created_at' => '2021-10-19 22:20:36',
                'updated_at' => '2021-10-19 22:20:36',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Diana Vanessa Carrera',
                'phone' => '5511563459',
                'email' => 'meine.tier@gmail.com',
                'company' => 'CAR WASH MUSTANG',
                'position' => 'GERENTE',
                'link' => 1,
                'created_at' => '2021-10-20 21:03:11',
                'updated_at' => '2021-10-20 21:03:11',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Julio César Yañez Garcia',
                'phone' => '5529077944',
                'email' => 'juliocesar.yg91@gmail.com',
                'company' => 'Bimbo',
                'position' => 'Empleado',
                'link' => 1,
                'created_at' => '2021-10-21 14:29:27',
                'updated_at' => '2021-10-21 14:29:27',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Arturo Noriega',
                'phone' => '5554143558',
                'email' => 'arturo_noriegav@yahoo.com.mx',
                'company' => 'S.I.T.E.S.',
                'position' => 'Owner',
                'link' => 1,
                'created_at' => '2021-10-23 16:25:21',
                'updated_at' => '2021-10-23 16:25:21',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Jacob Israel Tinajero',
                'phone' => '5520508214',
                'email' => 'tatianatatita2@gmail.com',
                'company' => 'Esteticars Israel Tinajero',
                'position' => 'Encargado',
                'link' => 1,
                'created_at' => '2021-10-24 15:15:29',
                'updated_at' => '2021-10-24 15:15:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}