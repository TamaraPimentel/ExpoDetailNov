<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exponents')->delete();
        
        \DB::table('exponents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MVZ Juan Vidrio Borrego',
                'topic' => 'Vapor en el Detallado de vehículos',
                'date' => '2022-02-06 12:00:00',
                'curriculum' => '<p>MVZ Juan Vidrio Borrego Gladiola&nbsp;<br>No.65 Zapopan Jalisco&nbsp;<br>33 36843628&nbsp;<br>juanvidrio@vaporza.com.mx&nbsp;</p><p><strong>Director comercial&nbsp;</strong></p><p>ㅡ Educación<br>● Médico Veterinario Zootecnista Universidad de Guadalajara&nbsp;<br>● Especialista en AVES de Producción Universidad de Gdl&nbsp;<br>● Diplomado Marketing Digital Estratégico y Redes Sociales UVM&nbsp;<br>● CURSO Plan de acción para el hogar ante COVID 19 IMSS&nbsp;<br>● CURSO Todo sobre la Prevención del COVID 19 IMSS&nbsp;</p><p>&nbsp;</p><p>ㅡ Experiencia&nbsp;<br>VAPORZA / Director Comercial&nbsp;<br>2001 - ACTUALIDAD, Zapopan Jalisco&nbsp;<br><br>Apasionado por la vida microscópica, la limpieza y tecnologías sustentables .&nbsp;<br>Por cerca de 20 años ha visitado y capacitado sobre el uso y aplicaciones del Vapor Seco en más de 250 plantas de la industria alimenticia, farmacéutica, metalmecánica; así como asesoría en hoteles, hospitales y restaurantes, respecto a la tecnología de Vapor Seco, ventajas y usos. Ha recibido capacitaciones en USA , Italia y Suiza sobre tecnología de equipos de Vapor Seco y otras tecnologías de limpieza. Asistencia a SEMA, y conferencista en CESVI y Cámara de Comercio de Guadalajara. Asistencia como capacitador en más de 25 cursos de auto detallado con el fin de demostrar las ventajas del Vapor Seco, características del Vapor, y el uso de equipos. Desarrollo de videos referentes a Vapor Seco y limpieza, que la suma de estos son más de medio millón de visualizaciones. Participación en el desarrollo de 2 patentes mexicanas enfocadas a la limpieza con Vapor Seco, así como la investigación y desarrollo de un protector y estabilizador de vacunas para el agua de bebida y un producto hidratante para combatir estrés calórico en Aves de Producción</p>',
                'created_at' => '2021-10-24 01:44:36',
                'updated_at' => '2021-10-24 01:44:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Emir Ortíz',
                'topic' => 'Corrección y nivelación de trasnparente',
                'date' => '2022-02-05 12:00:00',
                'curriculum' => '<ul><li>Fundador y director de Perfect Shine.</li><li>Con más de 10 años de experiencia.</li><li>Master Trainer de Angelwax México.</li><li>Certificaciones:<br><br>Gtechniq<br>Angelwax<br>Feynlab<br>SistemX<br>3D USA<br>Rupes USA<br>Xpel<br>&nbsp;</li><li>Fundador de Perfect Shine Academy.</li><li>Instructor en más de 30 cursos para detalladores amateurs y avanzados.</li><li>Más de 300 alumnos en todo México forman parte de la experiencia Perfect Shine Academy.</li></ul>',
                'created_at' => '2021-10-25 16:57:16',
                'updated_at' => '2021-10-25 16:57:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Carmen Mar',
                'topic' => 'Limpieza y reacondicionamiento de interiores',
                'date' => '2022-02-05 14:00:00',
            'curriculum' => '<ul><li>Cofundadora de Perfect Shine (La catedral del brillo)</li><li>Instructora de Perfect Shine Academy</li><li>Con 8 años de experiencia en el detallado automotriz (correcciones de pintura, acabados de show, aplicación de recubrimientos cerámicos y detallado de interiores)</li><li>Primera mujer detailer certificada en Xpel y Angelwax</li><li>Certificaciones:<br><br>3D USA<br>Angelwax<br>Rupes USA<br>Xpel (PPF)</li></ul>',
                'created_at' => '2021-10-25 17:40:52',
                'updated_at' => '2021-10-25 17:40:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}