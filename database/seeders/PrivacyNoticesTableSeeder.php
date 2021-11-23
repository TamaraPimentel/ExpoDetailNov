<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrivacyNoticesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('privacy_notices')->delete();
        
        \DB::table('privacy_notices')->insert(array (
            0 => 
            array (
                'id' => 1,
            'content' => '<p><strong>AVISO DE PRIVACIDAD</strong></p><p>Luis Manuel Pérez Rodríguez, mejor conocido como Expo Detail México, con domicilio en calle Jilotepec 382, colonia Hab. La Romana, ciudad Estado de México, municipio o delegación Tlalnepantla de Baz, c.p. 54030, en la entidad de Estado de México, país México, y portal de internet www.expodetailmexico.com, es el responsable del uso y protección de sus datos personales, y al respecto le informamos lo siguiente:</p><p><br><strong>¿Para qué fines utilizaremos sus datos personales?</strong><br>De manera adicional, utilizaremos su información personal para las siguientes finalidades secundarias que no son necesarias para el servicio solicitado, pero que nos permiten y facilitan brindarle una mejor atención:</p><ul><li>Para llevar a cabo el registro de asistencia al evento</li><li>Para hacerle llegar información respecto a su registro</li><li>Para hacerle llegar boletines informativos sobre el evento</li><li>Mercadotecnia o publicitaria</li><li>Prospección comercia</li></ul><p><br>En caso de que no desee que sus datos personales sean tratados para estos fines secundarios, desde este momento usted nos puede comunicar lo anterior a través del siguiente mecanismo:<br>Enviar correo a<i> expodetailmexio@gmail.com</i><br><br>La negativa para el uso de sus datos personales para estas finalidades no podrá ser un motivo para que le neguemos los servicios y productos que solicita o contrata con nosotros.<br><br><strong>¿Qué datos personales utilizaremos para estos fines?</strong><br>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales:<br><br>Nombre<br>Domicilio<br>Teléfono particular<br>Teléfono celular<br>Correo electrónico<br>Edad<br>Puesto o cargo que desempeña<br>Correo electrónico institucional<br>Teléfono institucional<br><br><strong>¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso?</strong><br>Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.<br><br>Para el ejercicio de cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva a través del siguiente medio:<br>Enviando un correo a <i>expodetailmexico@gmail.com</i><br><br>Para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, ponemos a su disposición el siguiente medio:<br><br>Por medio de correo electrónico Los datos de contacto de la persona o departamento de datos personales, que está a cargo de dar trámite a las solicitudes de derechos ARCO, son los siguientes:</p><p>a) Nombre de la persona o departamento de datos personales: Luis Manuel Pérez Rodríguez<br>b) Domicilio: calle Jilotepec 382, colonia Hab. La Romana, ciudad Estado de México, municipio o delegación Tlalnepantla de Baz, c.p. 54030, en la entidad de Estado de México, país México<br>c) Correo electrónico: expodetailmexico@gmail.com<br>d) Número telefónico: 5548140114<br>Otro dato de contacto: 5539846825<br><br><strong>Usted puede revocar su consentimiento para el uso de sus datos personales</strong><br><br>Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que para ciertos fines, la revocación de su consentimiento implicará que no le podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.&nbsp;<br>Para revocar su consentimiento deberá presentar su solicitud a través del siguiente medio:<br><br>Número telefónico, correo electrónico o persona de datos personales.<br><br>Para conocer el procedimiento y requisitos para la revocación del consentimiento, ponemos a su disposición el siguiente medio:<br><br>Número telefónico o correo electrónico<br><br><strong>¿Cómo puede limitar el uso o divulgación de su información personal?</strong><br>Con objeto de que usted pueda limitar el uso y divulgación de su información personal, le ofrecemos los siguientes medios:<br>Enviado de un correo electrónico para expresarnos el que ya no quiere recibir ofertas o promociones por parte de Expo Detail México<br><br>Asimismo, usted se podrá inscribir a los siguientes registros, en caso de que no desee obtener publicidad de nuestra parte:<br>Registro Público de Usuarios, para mayor información consulte el portal de internet de la CONDUSEF<br><br><strong>¿Cómo puede conocer los cambios en este aviso de privacidad?</strong><br>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas.<br><br>Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a través de: Correos electrónicos de los titulares.<br><br>El procedimiento a través del cual se llevarán a cabo las notificaciones sobre cambios o actualizaciones al presente aviso de privacidad es el siguiente:<br><br>Se enviará un correo electrónico por el cuál se hará de su conocimiento los cambios que se lleguen a presentar en el aviso de privacidad.<br><br><strong>Su consentimiento para el tratamiento de sus datos personales</strong><br>Consiento que mis datos personales sean tratados de conformidad con los términos y condiciones informados en el presente aviso de privacidad.[ ]<br><br>Última actualización: 29/09/2021</p>',
                'created_at' => '2021-10-09 18:31:43',
                'updated_at' => '2021-10-09 18:31:43',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}