<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Querys
 *
 * @author arivas
 */
class Querys {

  function loginUsuario($usuario, $password){
    $acme = new ACME();        
    $passwordEncrypt = base64_encode($password);      
    echo $consulta="SELECT * FROM usuario 
    where alias='$usuario' and contrasenia='$passwordEncrypt' and estado=2";
    return $acme->seleccion($consulta);        
  }

  function   ingresarLog($opcion, $accion) {
    $acme = new ACME();
    $iduser = Yii::app()->user->userCode;
    $encrip = new Encryption();
    $opcion = $encrip->decode($opcion);

    $consulta2 = "INSERT INTO `log`.`logs`(`usuario`, `opcion`, `fechTrxIn`, `accion` )
    VALUES('$iduser', '$opcion', now(), '$accion' )";
    return $acme->guardarIdent($consulta2);
  }

  function ingresarLogFin($opcion) {
    $acme = new ACME();
    $consulta = "UPDATE `log`.`logs`
    SET `fechTrxFi`=now() 
    WHERE `correlativo`=" . $opcion;
    return $acme->guardar($consulta);
  }

  function listEstaciones($empresa){
    $acme = new ACME();     
    $consulta="SELECT a.idestaciones idestacion,c.nombre empresa, a.nombre estacion, a.descripcion, tip.nombre tipo, a.direccion, a.lat, a.lng  
    FROM  estaciones a
    inner join tipoEstacion tip on tip.idtipoEstacion=a.tipo
    inner join empresaxestaciones b on a.idestaciones=b.idestaciones
    inner join empresa c on c.idempresa=b.idempresa
    where a.estado='A' and c.estado='A' and b.idempresa=$empresa";
    return $acme->seleccion($consulta);        
  }

  function listEstacionesActivas(){
    $acme = new ACME();     
    $consulta="SELECT idestaciones, nombre, lat, lng FROM estaciones  WHERE estado='A'";
    return $acme->seleccion($consulta);        
  }

  function todosPuntos(){
    $acme = new ACME();     
    $empresa = Yii::app()->user->empresa;   
    $consulta="SELECT a.idestaciones correlativo, upper(a.nombre) nombre, a.lat, a.lng, coalesce(upper(a.direccion),'No disponible') direccion, b.icono, b.nombre tipo 
    FROM estaciones a
    inner join tipoEstacion b on a.tipo=b.idtipoEstacion
    inner join empresaxestaciones exe on exe.idestaciones=a.idestaciones
    where estado='A' and  exe.idempresa=$empresa";
    return $acme->seleccion($consulta);        
  }

  function listadoEmpresas(){
    $acme = new ACME();     
    $consulta=" SELECT idempresa id, nombre  FROM  empresa where estado='A'";
    return $acme->seleccion($consulta);        
  }

  function datosSensor($id){
    $acme = new ACME();     
    $consulta="SELECT e.nombre empresa, c.nombre estacion, a.nombre sensor,a.icono, b.valor, b.bateria, b.actualizacion 
    FROM propiedades a
    inner join valoresResumen b on a.idpropiedades=b.idpropiedades
    inner join estaciones c on c.idestaciones=a.idestaciones
    where a.estado='A' and c.estado='A' and a.idestaciones=$id";
    return $acme->seleccion($consulta);        
  }

  function tipoInventario($id){
    $acme = new ACME();     
    $consulta="SELECT distinct idTipoInventario id, a.nombre campo
    FROM tipoInventario a
    INNER JOIN inventarioDetalle b on a.idinventario=b.idTipoInventario
    INNER JOIN estacionxInventario c on c.idtipinventario=a.idinventario and c.idinventariodetalle=b.idinventarioDetalle
    WHERE c.idestacion=$id";
    return $acme->seleccion($consulta);        
  }

  function ListtipoInventario($id){
    $acme = new ACME();     
    $consulta= "SELECT distinct  c.idinventario id, upper(c.nombre) nombre FROM estaciones a
    left join tipoEstacionxTipoInventario b on a.tipo=b.tipoEstacion
    left join tipoInventario c on c.idinventario=b.tipoInventario
    where b.tipoInventario in (SELECT distinct idtipinventario FROM estacionxInventario WHERE idestacion=$id)
    order by 1 asc ,2";
    return $acme->seleccion($consulta);        
  }

  function ListtipoInventarioUnico($id, $estacion){
    $acme = new ACME(); 

    $consulta= "SELECT distinct  c.idinventario id, upper(c.nombre) nombre FROM estaciones a
    left join tipoEstacionxTipoInventario b on a.tipo=b.tipoEstacion
    left join tipoInventario c on c.idinventario=b.tipoInventario
    where b.tipoInventario =$id
    order by 1 asc ,2";

    if($id=="T"){
      $consulta= "SELECT distinct  c.idinventario id, upper(c.nombre) nombre FROM estaciones a
      left join tipoEstacionxTipoInventario b on a.tipo=b.tipoEstacion
      left join tipoInventario c on c.idinventario=b.tipoInventario
      where b.tipoInventario in (SELECT distinct idtipinventario FROM estacionxInventario WHERE idestacion=$estacion)
      order by 1 asc ,2";

    }
    return $acme->seleccion($consulta);        
  }



  function propiedadInventario($id, $id2){
    $acme = new ACME();     
    $consulta="SELECT distinct b.idinventarioDetalle id, b.nombre campo
    FROM tipoInventario a
    INNER JOIN inventarioDetalle b on a.idinventario=b.idTipoInventario
    INNER JOIN estacionxInventario c on c.idtipinventario=a.idinventario and c.idinventariodetalle=b.idinventarioDetalle
    WHERE c.idestacion=$id and idinventario=$id2";
    return $acme->seleccion($consulta);        
  }


  function informacionInventario($estacion,$tipoInventario ){
    $acme = new ACME();     
    $consulta="SELECT distinct idinventariodetalle valor
    FROM estacionxInventario a
    WHERE a.idestacion=$estacion  and a.idtipinventario=$tipoInventario ";
    return $acme->seleccion($consulta);        
  }

  function informacionInventario2($estacion,$tipoInventario ){
    $acme = new ACME();     
    $consulta="SELECT  group_concat(distinct(idinventariodetalle),'') valor
    FROM estacionxInventario a
    WHERE a.idestacion=$estacion  and a.idtipinventario=$tipoInventario ";
    return $acme->seleccion($consulta);        
  }


  function datosInventario($id){
    $acme = new ACME();     
    $consulta=" SELECT  b.idTipoInventario idpropiedad, b.nombre propiedad,  group_concat(valor separator '...') valor
    FROM tipoInventario a
    INNER JOIN inventarioDetalle b on a.idinventario=b.idTipoInventario
    INNER JOIN estacionxInventario c on c.idtipinventario=a.idinventario 
    and c.idinventariodetalle=b.idinventarioDetalle
    WHERE c.idestacion=$id GROUP BY 1,2";
    return $acme->seleccion($consulta);        
  }

  function informacionValores($estacion, $tipoInve, $detalle){
   if($detalle==""){
    $comodin=0;
    $comodin2="";

  }else{
    $comodin=$detalle;
    $comodin2=$detalle;
  }
  $consulta="( SELECT @rownum$comodin:=@rownum$comodin+1 AS rownum, idinventariodetalle,  concat(idestacionxInventario,'||',valor) valor 
  FROM (SELECT @rownum$comodin:=0) r, estacionxInventario a 
  WHERE a.idestacion=$estacion  and a.idtipinventario=$tipoInve and idinventariodetalle=$comodin ) b$comodin2";
  return $consulta;        
}

function informacionValoresInfo2($estacion, $tipoInve, $detalle){
 $acme = new ACME();
       // $consulta;

 $consulta="SELECT idestacionxInventario correl, idinventariodetalle id, valor
 , (SELECT count(1)
 FROM estacionxInventario x  
 WHERE x.idestacion=a.idestacion  and x.idtipinventario=a.idtipinventario  and x.idinventariodetalle=a.idinventariodetalle) cantidad 
 
 from   estacionxInventario a 
 WHERE a.idestacion=$estacion  and a.idtipinventario=$tipoInve  and idinventariodetalle=$detalle order by idestacionxInventario asc";
 return $acme->seleccion($consulta);     
}


function informacionValoresInfo($estacion, $tipoInve, $detalle){
 if($detalle==""){
  $comodin=0;
  $comodin2="";

}else{
  $comodin=$detalle;
  $comodin2=$detalle;
}
$consulta="( SELECT @rownum$comodin:=@rownum$comodin+1 AS rownum, idinventariodetalle,  concat(valor) valor 
FROM (SELECT @rownum$comodin:=0) r, estacionxInventario a 
WHERE a.idestacion=$estacion  and a.idtipinventario=$tipoInve and idinventariodetalle=$comodin ) b$comodin2";
return $consulta;        
}

function informacionValoresPlantilla($estacion, $tipoInve, $detalle){
 if($detalle==""){
  $comodin=0;
  $comodin2="";

}else{
  $comodin=$detalle;
  $comodin2=$detalle;
}
$consulta="( SELECT @rownum$comodin:=@rownum$comodin+1 AS rownum, idinventariodetalle,  concat(idestacion,'||',idtipinventario,'||',idestacionxInventario,'||',valor) valor 
FROM (SELECT @rownum$comodin:=0) r, estacionxInventario a 
WHERE a.idestacion=$estacion  and a.idtipinventario=$tipoInve and idinventariodetalle=$comodin ) b$comodin2";
return $consulta;        
}

function ejecucionMySQL($consulta){
 $acme = new ACME();
       // $consulta;
 return $acme->seleccion($consulta);
}

function informacionDispositivo($id){
  $acme= new ACME();
  $consulta="SELECT a.idpropiedades, c.estacion, c.serial, a.icono, upper(a.nombre) dispositivo, upper(coalesce(b.valor,'')) valor, date(b.actualizacion) actualizacion, time(b.actualizacion) timeactualizacion, b.bateria, a.color, upper(coalesce(a.detalle,'')) detalle
  FROM propiedades a
  INNER JOIN propiedadxestacion c on a.idpropiedades = c.propiedad
  inner join valoresResumen b on b.propiedad =c.propiedad and b.estacion= c.estacion and b.serial= c.serial    
  where a.estado='A' and c.estacion=$id 
  order by b.serial desc, b.actualizacion desc";
  return $acme->seleccion($consulta);
}

function informacionDispositivotrz($id, $estacion,$serial,$fechaini,$fechafin){
  $acme= new ACME();
  $condicion=" BETWEEN '$fechaini' and '$fechafin' ";

 // $consulta="SELECT a.tipo, upper(c.nombre) nombre, c.color,b.serial, a.bateria, a.fecha, a.valor,
 // concat(MONTHNAME(a.fecha),'-',day(a.fecha),' / ',hour(a.hora),':',minute(a.hora)) label
 //            FROM valorestrx a
 //            left join propiedadxestacion b on b.propiedad=a.tipo and b.serial=a.codigo
 //            left join propiedades c on c.idpropiedades=b.propiedad
 //            WHERE fecha $condicion
 //            and codigo='$serial' 
 //            and c.idpropiedades=$id and b.estacion=$estacion
 //            order by a.fecha, a.hora";
            $consulta="SELECT a.propiedad tipo, upper(b.nombre) nombre, b.color,c.serial,  a.bateria,a.fecha, a.valor
, concat(MONTHNAME(a.fecha)
,'-',case when day(a.fecha)<10 then concat('0',day(a.fecha)) else day(a.fecha) end
,' / ',case when hour(a.hora)<10 then concat('0',hour(a.hora)) else hour(a.hora) end
,':',case when minute(a.hora)<10 then concat('0',minute(a.hora)) else minute(a.hora) end) label

FROM iot.iottrx a
left join sigfox.propiedades b on a.propiedad=b.idpropiedades
left join sigfox.propiedadxestacion c on c.propiedad=a.propiedad and a.codigo=c.serial
where date(a.fecha) $condicion and c.serial='$serial' and c.estacion=$estacion and c.propiedad=$id
order by c.serial asc, timestamp(a.fecha, a.hora) asc 
";

if($fechaini=='0' && $fechafin=='0'){
        // $condicion=" = current_date ";
  // $condicion=" = (SELECT max(fecha) FROM valoresTRX WHERE codigo='$serial') ";
   $condicion=" = (SELECT max(x.fecha) FROM iot.iottrx  x WHERE x.codigo='$serial') ";

  //  $consulta=" SELECT  c.tipo, upper(a.nombre) nombre, a.color, b.serial, c.bateria, c.fecha ,  c.valor 
  //  , concat(MONTHNAME(c.fecha),'-',day(c.fecha),' / ',hour(c.hora),':',minute(c.hora)) label
  //  , c.hora hora 
  // FROM valoresTRX  c  
  // left join propiedadxestacion b on b.propiedad=c.TIPO and b.serial=c.CODIGO  
  // inner join propiedades  a on a.idpropiedades=b.propiedad  
  // where date(c.FECHA) $condicion and a.idpropiedades=$id and b.estacion=$estacion and b.serial='$serial' 
  // order by FECHA asc, c.hora";
  $consulta="SELECT a.propiedad tipo, upper(b.nombre) nombre, b.color,c.serial,  a.bateria,a.fecha, a.valor
, concat(MONTHNAME(a.fecha)
,'-',case when day(a.fecha)<10 then concat('0',day(a.fecha)) else day(a.fecha) end
,' / ',case when hour(a.hora)<10 then concat('0',hour(a.hora)) else hour(a.hora) end
,':',case when minute(a.hora)<10 then concat('0',minute(a.hora)) else minute(a.hora) end) label
FROM iot.iottrx a
left join sigfox.propiedades b on a.propiedad=b.idpropiedades
left join sigfox.propiedadxestacion c on c.propiedad=a.propiedad and a.codigo=c.serial
where date(a.fecha)$condicion and c.serial='$serial' and c.estacion=$estacion and c.propiedad=$id
order by c.serial asc, timestamp(a.fecha, a.hora)asc 
";
}
 // echo $consulta;

return $acme->seleccion($consulta);
}


function informacionDispositivotrzTable($id, $estacion,$serial,$fechaini,$fechafin){
  $acme= new ACME();
  $condicion=" BETWEEN '$fechaini' and '$fechafin' ";

//    $consulta= "SELECT a.TIPO, a.correl, upper(a.nombre) nombre, a.color, a.serial, a.fecha, a.hora hora, a.bateria, a.valor ,  a.fecha label from (SELECT c.TIPO,   upper(a.nombre) nombre, a.color, b.serial, c.FECHA fecha, max( c.hora) hora 
//   FROM valoresTRX  c
//   left join propiedadxestacion b on b.propiedad=c.TIPO and b.serial=c.CODIGO 
//   inner join propiedades a on a.idpropiedades=b.propiedad 
//   where date(c.FECHA)  $condicion and a.idpropiedades=$id and b.estacion=$estacion and b.serial='$serial'
//   group by c.TIPO,  a.nombre, a.color, b.serial, c.FECHA) as b
//   inner join (
//   SELECT c.TIPO, c.correl, upper(a.nombre) nombre, a.color, b.serial, c.FECHA fecha, c.hora hora, c.bateria, c.valor
//   FROM valoresTRX  c
//   left join propiedadxestacion b on b.propiedad=c.TIPO and b.serial=c.CODIGO 
//   inner join propiedades a on a.idpropiedades=b.propiedad 
//   where date(c.FECHA) $condicion and a.idpropiedades=$id and b.estacion=$estacion and b.serial='$serial'
// ) as a on a.tipo = b.tipo and a.nombre = b.nombre and a.color = b.color and a.fecha = b.fecha and a.hora = b.hora";

// $consulta=" SELECT  c.TIPO, c.correl, upper(a.nombre) nombre, a.color, b.serial, c.FECHA fecha, c.hora hora, c.bateria, c.valor, c.hora label
//   FROM valoresTRX  c
//   left join propiedadxestacion b on b.propiedad=c.TIPO and b.serial=c.CODIGO 
//   inner join propiedades a on a.idpropiedades=b.propiedad 
//   where date(c.FECHA) $condicion and a.idpropiedades=$id and b.estacion=$estacion and b.serial='$serial'
//  order by FECHA asc, c.hora ASC";
 $consulta="SELECT a.propiedad tipo, a.correl, upper(b.nombre) nombre, b.color,c.serial, a.fecha, a.hora , a.bateria, a.valor, a.hora label
FROM iot.iottrx a
left join sigfox.propiedades b on a.propiedad=b.idpropiedades
left join sigfox.propiedadxestacion c on c.propiedad=a.propiedad and a.codigo=c.serial
where date(a.fecha) $condicion and c.serial='$serial' and c.estacion=$estacion and c.propiedad=$id
order by c.serial asc, timestamp(a.fecha, a.hora)asc ";

if($fechaini=='0' && $fechafin=='0'){
        // $condicion=" = current_date ";
  // $condicion=" = (SELECT max(fecha) FROM valoresTRX WHERE codigo='$serial') ";
  $condicion=" = (SELECT max(x.fecha) FROM iot.iottrx x WHERE x.codigo='$serial') ";
 // 
 //  $consulta=" SELECT  c.TIPO, c.correl, upper(a.nombre) nombre, a.color, b.serial, c.FECHA fecha, c.hora hora, c.bateria, c.valor, c.hora label
 //  FROM valoresTRX  c
 //  left join propiedadxestacion b on b.propiedad=c.TIPO and b.serial=c.CODIGO 
 //  inner join propiedades a on a.idpropiedades=b.propiedad 
 //  where date(c.FECHA) $condicion and a.idpropiedades=$id and b.estacion=$estacion and b.serial='$serial'
 // order by FECHA asc, c.hora ASC";
 $consulta="SELECT a.propiedad tipo, a.correl, upper(b.nombre) nombre, b.color,c.serial, a.fecha, a.hora , a.bateria, a.valor, a.hora label
FROM iot.iottrx a
left join sigfox.propiedades b on a.propiedad=b.idpropiedades
left join sigfox.propiedadxestacion c on c.propiedad=a.propiedad and a.codigo=c.serial
where date(a.fecha) $condicion and c.serial='$serial' and c.estacion=$estacion and c.propiedad=$id
order by c.serial asc, timestamp(a.fecha, a.hora)asc";
}
 // $consulta;

return $acme->seleccion($consulta);
}
//DATE_SUB(current_date, INTERVAL 20 DAY)  


function imagenesDispositivos($serial){
  $acme= new ACME();

  $consulta= "SELECT distinct trim(b.dispositivo) serial, trim(direccion) img 
FROM propiedadxestacion a
inner join imgxdispositivo b on a.serial=b.dispositivo
inner join imagen c on c.correl=b.img
  where a.serial='$serial'";
  return $acme->seleccion($consulta);
}


}
