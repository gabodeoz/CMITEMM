<?php
/**
 * Description of Log
 *
 * @author Microtemm
 */
class Log {
        
    static function write ($txt){     
       $actual='';
       $datetime = new DateTime();
       $datetime->setTimezone(new DateTimeZone('America/Mexico_City'));
       //C:\xampp\htdocs\envio-sms\log
       $fichero = 'C:\xampp\htdocs\cmi\log\log.txt';                
       // Abre el fichero para obtener el contenido existente
       $actual = file_get_contents($fichero);        
        // Añade una nuevo texto
       $actual .=" \n". $datetime->format('Y\-m\-d\ H:i:s')."\t".$txt."\t";
        // Escribe el contenido al fichero
        file_put_contents($fichero, $actual);
    }
}
