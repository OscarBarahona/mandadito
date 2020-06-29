<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formulas
 *
 * @author arivas
 */
class Formulas {
    //put your code here
    function fechaInvalida($fecha){
        $valores = explode('-', $fecha);
        if(count($valores) == 3 && checkdate($valores[1], $valores[2], $valores[0])){
            return false;
        }
        return true;
    }
    function randomString($length, $type = '') {
    // Seleccionamos el tipo de caracteres que deseas que devuelva el string
        switch ($type) {
            case 'num':
                // Solo cuando deseas que devuelva numeros.
                $salt = '1234567890';
                break;
            case 'lower':
                // Solo cuando deseas que devuelva letras en minusculas.
                $salt = 'abcdefghijklmnopqrstuvwxyz';
                break;
            case 'upper':
                // Solo cuando deseas que devuelva letras en mayusculas.
                $salt = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            default:
                // Para cuando deseas que la cadena este compuesta por letras y numeros
                $salt = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                break;
        }
        $rand = '';
        $i = 0;
        while ($i < $length) {
            //Loop hasta que el string aleatorio contenga la longitud ingresada.
            $num = rand() % strlen($salt);
            $tmp = substr($salt, $num, 1);
            $rand = $rand . $tmp;
            $i++;
        }
        //Retorno del string aleatorio.
        return $rand;
    }


    function pertenencia($idPaquete){
        $query = new Querys();                                          
        $rst3 = $query->informacionPaquete($idPaquete);            
        $rsti = $query->informacionUsuarioRepartidor2();
        $polygon = array();
        $points = array();
        $contador =0;
        $listado = "";
        $separador ="" ;
        foreach ($rst3 as $informacionPuntos ):
            array_push($points,$informacionPuntos["latitud"]." ".$informacionPuntos["longitud"]);
        endforeach;
        foreach ($rsti as $posiblesR):
            $rst4 = $query->listadoPuntosZonaRepartidor($posiblesR["id"]);
            foreach ($rst4 as $puntosZ):
                 array_push($polygon,$puntosZ["lat"]." ".$puntosZ["lng"]);
            endforeach;
            $pointLocation = new pointLocation();                             
            // Las últimas coordenadas tienen que ser las mismas que las primeras, para "cerrar el círculo"
            foreach($points as $key => $point) {
                if($pointLocation->pointInPolygon($point, $polygon)!="outside"){
                    $contador = $contador+1;
                    $listado =$listado. $separador."'".$posiblesR["id"]."'";
                    $separador= ",";
                }
            }
        endforeach;   

        if($contador>0){              
            $rsti = $query->informacionUsuarioRepartidor3($listado);
        }
        return $rsti;
    }
    
    function pertenenciaMasivo($idPaquete){
        $query = new Querys();                                          
        $rst3 = $query->informacionPaqueteMasivo($idPaquete);            
        $rsti = $query->informacionUsuarioRepartidorMasivo2();
        $polygon = array();
        $points = array();
        $contador =0;
        $listado = "";
        $separador ="" ;
//        foreach ($rst3 as $informacionPuntos ):
//            array_push($points,$informacionPuntos["latitud"]." ".$informacionPuntos["longitud"]);
//        endforeach;
//        foreach ($rsti as $posiblesR):
////            $rst4 = $query->listadoPuntosZonaRepartidor($posiblesR["id"]);
////            foreach ($rst4 as $puntosZ):
////                 array_push($polygon,$puntosZ["lat"]." ".$puntosZ["lng"]);
////            endforeach;
////            $pointLocation = new pointLocation();                             
////            // Las últimas coordenadas tienen que ser las mismas que las primeras, para "cerrar el círculo"
////            foreach($points as $key => $point) {
////                if($pointLocation->pointInPolygon($point, $polygon)!="outside"){
////                    $contador = $contador+1;
////                    $listado =$listado. $separador."'".$posiblesR["id"]."'";
////                    $separador= ",";
////                }
////            }
//        endforeach;   

        if($contador>0){              
            $rsti = $query->informacionUsuarioRepartidor3($listado);
        }
        return $rsti;
    }
    
    function diferenciaTiempos($inicial, $final){
        $minutos = ceil((strtotime($final) - strtotime($inicial)) / 60);
        return convertToHoursMins($minutos, '%02d hours %02d minutes');
    }
    
    function tiemposHMS($min){
        
        /*
        $query = new Querys();
        $rst = $query->enteroANumero($numero);
        $tiempo = "00:00:00";
        foreach ($rst as $tim):
            $tiempo = $tim["tiempo"];
        endforeach;
           */
         $min=(int)$min;
    $heure=(int)($min/60);
    $minute=(($min/60)-$heure)*60;    
    return $heure .':' . $minute; 
        
        
        
    }
    
    function convertToHoursMins($time, $format = '%02d:%02d') {
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}

    function diferenciaTiempo($id){
        $query = new Querys();
        $rst = $query->numeroMinutosHastaElMomento($id);
        $minutos = 40;
        foreach ($rst as $min):
            $minutos = $min["minutos"];
        endforeach;
        
        return $minutos;
        
        
    }
    
    function diferenciaFecha($fechaInicial, $fechaFinal) { 
        
         
         return strtotime( $fechaFinal)-strtotime($fechaInicial);
        
    }
    
    function formatoMinutos($tiempo_en_segundos) {  
        $query = new Querys();
        $rst = $query->segundosAMinuto($tiempo_en_segundos);
        /*$horas = floor($tiempo_en_segundos / 3600);
        $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
        $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60); */
        $time="00:00:00";
        foreach($rst as $tiempo):
            $time = $tiempo["tiempo"];
        endforeach;
        return $time;     
    }
    
    function velocidad($tiempo, $distancia) { 
        $tiempo = $tiempo *0.277777777777777777777777777777777777;
        $distancia = $distancia / 1000;
        if($tiempo ==0) $tiempo = 1;
        return $distancia/ $tiempo;
    }
    
    function distanciaGeodesica($lat1, $long1, $lat2, $long2){

            $radioTierra = 6371;
            $dLat = deg2rad($lat2 - $lat1);  
            $dLng = deg2rad($long2 - $long1);  
            $sindLat =  sin($dLat / 2);  
            $sindLng =  sin($dLng / 2);  
            $va1 = pow($sindLat, 2) + pow($sindLng, 2)  
                    *  cos(deg2rad ($lat1)) *  cos(deg2rad ($lat2));  
            $va2 = 2 * atan2 (sqrt($va1), sqrt(1 - $va1));  
            $distancia = $radioTierra * $va2*1000;  
            return round ($distancia);
            
            /*return Math.round(D);
        
        
            $degtorad = 0.01745329;
            $radtodeg = 57.29577951;

            $dlong = ($long1 - $long2);
            $dvalue = (sin($lat1 * $degtorad) * sin($lat2 * $degtorad))
            + (cos($lat1 * $degtorad) * cos($lat2 * $degtorad)
            * cos($dlong * $degtorad));

            $dd = acos($dvalue) * $radtodeg;

            $miles = ($dd * 69.16);
            $km = ($dd * 111.302);

            return $km;
             
             */
        }

}
