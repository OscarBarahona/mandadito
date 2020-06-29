<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Querys
 *
 * @author Oscar Barahona
 */
class Empresa {

  function lstEmpresa($empresa){
    $temporal="";
    if($empresa!='1'){
      $temporal=" AND idempresa='$empresa' ";
    }
    $acme = new ACME();        
    $consulta="SELECT idempresa id, upper(nombre) nombre
    FROM empresa WHERE estado='A' $temporal
    order by nombre asc";
    return $acme->seleccion($consulta);        
  }


  function lstTipoEstacion(){
    $acme = new ACME();        
    $consulta="SELECT idtipoEstacion id, nombre nombre 
    FROM tipoEstacion
    ORDER BY idtipoEstacion ASC";	
    return $acme->seleccion($consulta);        
  }


  function InsertEmpresa($nombre,$telefono,$direccion){
    $acme = new ACME();        
    $consulta=" INSERT INTO empresa(nombre, telefono, direccion)
    VALUES('$nombre', '$telefono', '$direccion')";
    return $acme->guardarIdent($consulta);        
  }

  function InsertEstacion($nombre,$tipo,$descripcion,$direccion,$lat,$lng,$responsable){
    $acme = new ACME();        
    $consulta=" INSERT INTO estaciones(nombre, tipo, descripcion, direccion, lat, lng, estado, fechaCreacion, responsable)
    VALUES('$nombre', $tipo, '$descripcion', '$direccion', '$lat', '$lng', 'A', current_timestamp, '$responsable')";
    return $acme->guardarIdent($consulta);        
  }


  function InsertRelacionEmpresaxEstacion($empresa,$estacion){
    $acme = new ACME();        
    $consulta="INSERT INTO sigfox.empresaxestaciones(idempresa, idestaciones)
    VALUES($empresa, $estacion)";
    return $acme->guardarIdent($consulta);        
  }

  function lstEstaciones($empresa){
    $acme = new ACME();        
    $consulta="SELECT c.idestaciones id, upper(c.nombre) nombre
    FROM empresa a
    inner join empresaxestaciones b on a.idempresa=b.idempresa
    inner join estaciones c on c.idestaciones=b.idestaciones
    where a.estado='A' and  c.estado='A' and a.idempresa=3";
    return $acme->seleccion($consulta);        
  }
  
  function lstInfoEmpresa($empresa){
    $acme = new ACME();        
    $consulta="SELECT * FROM empresa WHERE idempresa=$empresa";
    return $acme->seleccion($consulta);        
  }


  function updateEmpresa($id,$nombre, $direccion, $telefono){
    $acme = new ACME();        
    $consulta="UPDATE sigfox.empresa
    SET nombre='$nombre', telefono='$telefono', direccion='$direccion'
    WHERE idempresa=$id";
    return $acme->guardar($consulta);        
  }

  function bajaEmpresa($id){
    $acme = new ACME();        
    $consulta=" UPDATE sigfox.empresa
    SET estado='I'
    WHERE idempresa=$id";
    return $acme->guardar($consulta);        
  }

  function createEmpresa($nombre,$telefono,$direccion){
    $acme = new ACME();        
    $consulta="INSERT INTO sigfox.empresa(nombre, telefono, estado, fecha, direccion)
    VALUES('$nombre', '$telefono', 'A', current_timestamp, '$direccion')";
    return $acme->guardarIdent($consulta);        
  }


}