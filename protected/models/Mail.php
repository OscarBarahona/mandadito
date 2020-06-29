<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mail
 *
 * @author arivas
 */
Yii::import('application.extensions.phpmailer.JPhpMailer');
class Mail {

    //put your code here
     function dia2($permiso, $usuario, $fechaI, $empresa, $codigoI, $nombreArchivo) {
       
        $encrip = new Encryption();          
        $contador=0;
        $query = new Querys();
        $url = Yii::app()->request->baseUrl;       
        $usuario2 = $query->informacionUsuarioID($codigoI);             
        $nombreUsux = "";            
        foreach ($usuario2 as $nam):              
            $nombreUsux = $nam["nombre"];              
        endforeach;


 
         
        $valor = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Documento sin título</title>
<style>
.text-info {
  color: #4dd4fd;
}
.text-success {
  color: #9ad268;
}
.text-warning {
  color: #ffc545;
}
.text-danger {
  color: #fe402b;
}

.label-success,
.badge-success {
  background-color: #9ad268;
  color: #fff;
}
.label-danger,
.badge-danger {
  background-color: #fe402b;
  color: #fff;
}
.label-warning,
.badge-warning {
  background-color: #ffc545;
  color: #fff;
}
.label-info,
.badge-info {
  background-color: #4dd4fd;
  color: #fff;
}
</style>
</head>

<body style='padding:20px;'>
<div style='border: solid 1px #eee; background-color: #FFFFFF; color: #333;'>

<table cellspacing='0' cellpadding='0' border='0' background='#FFFFFF' width='100%'>
  <tr>
    <td width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' >&nbsp;</td>
    <td  width='92%' colspan='23' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF' width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%' style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr><tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='21' style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e;border:1px solid #eee; font-weight:bold;background-color:#f2f2f2;text-align:center;'  bgcolor='#FFFFFF' >RESUMEN CONSOLIDADO COLABORADORES DE $nombreUsux</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr> <tr>
    <td  width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF' width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%' style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";
        $listadoA = $query->listadoUsuarioCadena($usuario, $permiso, $empresa,$codigoI);
        foreach ($listadoA as $lstA):
            $contador++;
            $usuario2 = $query->informacionUsuarioID($lstA["id"]);
            $codigo = "";
            $nombreUsu = "";
            $direccion="http://200.35.189.158/redcontrol/";
            foreach ($usuario2 as $nam):
                $codigo = $nam["id"];
                $nombreUsu = $nam["nombre"];
                $direccion = $nam["direccion"];
            endforeach;

            $ident = $query->informacionMenuResumenSupervisor($lstA["id"]);
            $identify="cHq2qPgBDA7s03ceSggX5nnbzAHZn02uiojTYvMVIww";
            foreach ($ident as $ident2):
                $identify = $ident2["idmenu"];
                $identify= $encrip->encode($identify);
            endforeach;

  $valor = $valor . "<tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='21' style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e;border:1px solid #eee; font-weight:bold;background-color:#f2f2f2;text-align:center;'  bgcolor='#FFFFFF' >RESUMEN DEL DIA $fechaI DE $nombreUsu</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='10' bgcolor='#4c649b' height='40'  style='border-collapse:collapse;   text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Agenda Programada&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='10' bgcolor='#4c649b' height='40'  style='border-collapse:collapse;   text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Agenda Re-programada&nbsp;&nbsp;</td>
    <td style='border-right:solid 1px #eee;'></td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='2' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Fecha</td>
    <td colspan='3' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Usuario</td>
    <td colspan='3' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Cliente</td>
    <td colspan='2' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Estado</td>
    
    <td>&nbsp;</td>
    <td colspan='2' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Fecha</td>
    <td colspan='3' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Usuario</td>
    <td colspan='3' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Cliente</td>
    <td colspan='2' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Estado</td>
     
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";

   

 $rst3 = $query->informacionVisitasResumenUsu($lstA["id"], $fechaI);

            $color = "f9f9f9";
            $numero = $numeroA = $numeroB = 0;
            $list1 = array();
            $list2 = array();
            foreach ($rst3 as $info):


                if ($info["izde"] == 0) {
                    $list1[$numeroA] = array($info["fechaNueva"], $info["nomUsu"], $info["cliente"], $info["color"], $info["id"]);
                    $numeroA = $numeroA + 1;
                } else {

                    $list2[$numeroB] = array($info["fechaNueva"], $info["nomUsu"], $info["cliente"], $info["color"], $info["id"]);
                    $numeroB = $numeroB + 1;
                }

            endforeach;
            
           
            $i = 0;
            $max = 0;
            if (count($list1) > count($list2)) {
                $max = $numeroA;
                $a = count($list2);
                for ($i = $a; $i < $max; $i++) {
                    $list2[$i] = array(" ", " ", " ", " ","-");
                }
            } else {
                $max = $numeroB;
                $a = count($list1);
                for ($i = $a; $i < $max; $i++) {
                    $list1[$i] = array(" ", " ", " ", " ","-");
                }
            }

           // echo "<br><br>Mi valor es: ".$max;
            for ($x = 0; $x < $max; $x++) {
                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;

                $img2 = "-";
                $img1 = "-";
                $href="";
                $href2="";
                if ($list1[$x][3] != "") {
                    $imx ="  ";
                    if($list1[$x][4]!="-"){
                        $imx="<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($list1[$x][4])."' ><img  width='16'  height='16' src='http://200.35.189.158/redcontrol/img/" . $list1[$x][3] . "' /></a>";
                    }
                    $img1 =  $imx ;
                    
                    $href="<a href=".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($list1[$x][4])."' >";
                    $href2="</a>";
                    
                }
                if ($list2[$x][3] != "") {
                    $imx ="  ";
                    if($list2[$x][4]!="-"){
                        $imx="<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($list2[$x][4])."' ><img  width='16'  height='16' src='http://200.35.189.158/redcontrol/img/" . $list2[$x][3] . "' /></a>";
                    }
                    $img2 =  $imx ;
                    $href=  "<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($list2[$x][4])."' >";
                    $href2="</a>";
                    
                }
                  
                $valor = $valor . "<tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'></td>
    <td bgcolor='#FFFFFF' height='20' style='border-left:solid 1px #eee;'>&nbsp;</td>
    <td colspan='2' height='20' bgcolor='#$color' style='color:#777777;font-size:10px;border:1px "
                        . "solid #eee;background-color:#$color' ><div style='background-color:#$color'>" . $list1[$x][0] . "&nbsp;</div></td>
    <td colspan='3' height='20' bgcolor='#$color' style='color:#777777;font-size:10px;border:1px solid #eee;background-color:#$color'><div style='background-color:#$color'>" . $list1[$x][1] . "&nbsp;</div></td>
    <td colspan='3' height='20' bgcolor='#$color' style='color:#777777;font-size:10px;border:1px solid #eee;'><div style='background-color:#$color'>" .$href. $list1[$x][2] .$href2. "&nbsp;</div>
    </td>
    <td colspan='2' bgcolor='#$color' height='20' style='color:#777777;font-size:10px;border:1px solid #eee;'><div style='background-color:#$color; text-align:center'>"
                        .  $img1 . "&nbsp;</div>
    </td>
    <td bgcolor='#FFFFFF' height='20' >&nbsp;</td>
        <td colspan='2' bgcolor='#$color' height='20' style='color:#777777;font-size:10px;border:1px solid #eee;background-color:#$color' ><div style='background-color:#$color'>" . $list2[$x][0] . "&nbsp;</div></td>
    <td colspan='3' bgcolor='#$color' height='20' style='color:#777777;font-size:10px;border:1px solid #eee;background-color:#$color'><div style='background-color:#$color'>" . $list2[$x][1] . "&nbsp;</div></td>
    <td colspan='3' bgcolor='#$color' height='20' style='color:#777777;font-size:10px;border:1px solid #eee;'><div style='background-color:#$color'>".$href . $list2[$x][2] .$href2. "&nbsp;</div></td>
    <td colspan='2' bgcolor='#$color' height='20' style='color:#777777;font-size:10px;border:1px solid #eee;'><div style='background-color:#$color; text-align:center'>"
                        . $img2 . "&nbsp;</div></td>    
    <td bgcolor='#FFFFFF' height='20' style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    </tr>";
            }




   $valor = $valor . "
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='10' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'>Clasificacion</td>
    <td>&nbsp;</td>
    <td colspan='10' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'>Tiempo Efectivo</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";
   $clasifiCitas = $query->informacionAgendasDiaUsuario($fechaI, $lstA["id"]);
            //$query->informacionAgendasTiempoUsuarioX($fechaI, $accion);
            $tiempo = $query->informacionAgendasTiempoUsuarioX(  $fechaI, $lstA["id"]);
            $tim = "00:00:00";
            foreach ($tiempo as $time):
                $tim = $time["tiempo"];
            endforeach;
            $numero = 1;
            $color2 = "f9f9f9";
            $borde = "eee";
            foreach ($clasifiCitas as $modelTipoS):
                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;

                $valor = $valor . "<tr>
<td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'></td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='6' style='border:solid 1px #eee; font-weight:bold;  font-size:12px;' bgcolor='#$color' class='text-" . $modelTipoS['color'] . "' >" . $modelTipoS['clasi'] . "&nbsp;</td>
    <td colspan='4' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#$color' class='text-" . $modelTipoS['color'] . "' >" . $modelTipoS['suma'] . "&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
     
    <td colspan='10' align='center' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#$color2' >" . $tim . "&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' width='55'></td>
</tr>";
                $tim = "";
                $color2 = "ffffff";
                $borde = "fff";
            endforeach;

  

  
            $valor = $valor . "<tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='21' style='font-weight:bold; font-size:12px;color:#777777;' bgcolor='#FFFFFF'>INFORMACION DE AGENDAS&nbsp;Y NOTIFICACIONES</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Fecha</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' >Cliente</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Usuario</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Tipo</td>
    <td colspan='5' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Comentario</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";

            $numero = 1;
            $color2 = "f9f9f9";
            $borde = "eee";
            $comentario = $query->listadoComentarioAgendaFull($lstA["id"], $fechaI);
            foreach ($comentario as $lst):


                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;
                $valor = $valor . "<tr>
        <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' ></td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["fecha"] . "&nbsp;</td>
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color' >" . $lst["cliente"] . "&nbsp;</td>
    
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["nombre"] . "&nbsp;</td>
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["tipo"] . "&nbsp;</td>
    <td colspan='5' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["comentario"] . "&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' ></td>
        </tr>";
            endforeach;

           

            $valor = $valor . "

  
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='3' rowspan='3' align='center'> <a href='".$direccion."supervisor/resumen.html?identify=$identify&user=" . $codigo . "&fechaI=" . $fechaI . "' >
    <img src='http://200.35.189.158/redcontrol/img/mapaMail.png' width='64' height='64'></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
 
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  ";


        endforeach;
        $valor = $valor . "
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td colspan='23' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  
</table>

</div></body></html>";
        
        
        if($contador>0){
            echo "creando el archivo $nombreArchivo";
     
           
            $mPDF1 = Yii::app()->ePdf->mpdf('utf-8', 'A4-L',0,0,0,0,0);
            $mPDF1->WriteHTML($valor);
            $mPDF1->Output("/var/www/html/redcontrolfiles/".$nombreArchivo,"F" );
        } 
        
      
        
        
        return $contador;
                
        
    }
    
    function confirmacion($correo, $reporte,$fecha,$transact, $usuario) {                       
        $encrip = new Encryption();  
        $mail = new JPhpMailer;
        //$query
        $mail->IsSMTP();
        $mail->Host = "mail.intelfon.com.sv"; //"172.17.10.15";// 
        $mail->Port = 25;
        $mail->From = "redcontrol@intelfon.com.sv";
        $mail->CharSet = 'utf-8';
        $mail->SMTPDebug = 1;        
        $mail->FromName = "RED Control - Resumen de citas";
        $mail->Subject = "Resumen";
        $mail->AddAddress($correo,$correo);     
        $mail->IsHTML(true);
        $valor = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Documento sin título</title>
<style>
.text-info {
  color: #4dd4fd;
}
.text-success {
  color: #9ad268;
}
.text-warning {
  color: #ffc545;
}
.text-danger {
  color: #fe402b;
}

.label-success,
.badge-success {
  background-color: #9ad268;
  color: #fff;
}
.label-danger,
.badge-danger {
  background-color: #fe402b;
  color: #fff;
}
.label-warning,
.badge-warning {
  background-color: #ffc545;
  color: #fff;
}
.label-info,
.badge-info {
  background-color: #4dd4fd;
  color: #fff;
}
</style>
</head>

<body style='padding:20px;'>
<div style='border: solid 1px #eee; background-color: #FFFFFF; color: #333;'>
<table cellspacing='0' cellpadding='0' border='0' background='#FFFFFF' width='100%' >
  <tr>
    <td width='5%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='5%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='20%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='60%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='5%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='5%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='2'  style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e;border:1px solid #eee; font-weight:bold;background-color:#f2f2f2;text-align:center;'  bgcolor='#FFFFFF'>Notificacion de finalizacion de generacion de reporte</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td  style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #9d0e0e;border:1px solid #eee; font-weight:bold;background-color:#f6ecec;text-align:left;'  bgcolor='#f6ecec'>Nombre</td>
    <td style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #07acee;border:1px solid #eee; font-weight:bold;background-color:#e3f2f2;text-align:left;'  bgcolor='#f6ecec'>$reporte - $fecha &nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:left;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #9d0e0e;border:1px solid #eee; font-weight:bold;background-color:#f6ecec;text-align:left;'  bgcolor='#f6ecec'>Hora de Solicitud</td>
    <td style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #07acee;border:1px solid #eee; font-weight:bold;background-color:#e3f2f2;text-align:left;'  bgcolor='#f6ecec'>$transact&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #9d0e0e;border:1px solid #eee; font-weight:bold;background-color:#f6ecec;text-align:left;'  bgcolor='#f6ecec'>Usuario</td>
    <td style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #07acee;border:1px solid #eee; font-weight:bold;background-color:#e3f2f2;text-align:left;'  bgcolor='#f6ecec'>$usuario&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='2' style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #07acee;border:1px solid #eee; font-weight:bold;background-color:#e3f2f2;text-align:center;'  bgcolor='#f6ecec'>Puede descargarlo desde el Centro de Reportes Generados en la plataforma de RED Control</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='6' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    </tr>
</table>

</div></body></html>
";
        echo $valor;
        $mail->Body = $valor;
        
            if($mail->Send()){
                return "Enviado";
            }else{
                 return "No Enviado";
            }  
       
        unset($mail);
    }
    
    function dia($correo,$permiso, $usuario, $fechaI, $empresa, $codigoI) {
       
        $encrip = new Encryption();  
        $mail = new JPhpMailer;
        //$query
        $mail->IsSMTP();
        $mail->Host = "mail.intelfon.com.sv"; //"172.17.10.15";// 
        $mail->Port = 25;
        $mail->From = "redcontrol@intelfon.com.sv";
        $mail->CharSet = 'utf-8';
        $mail->SMTPDebug = 1;
        $contador=0;
        $mail->FromName = "RED Control - Resumen de citas";
        $mail->Subject = "Resumen";
        /*           
        $mail->AddAddress("aluuckard.rivz@gmail.com","aluuckard.rivz@gmail.com");    
        $mail->AddAddress("obarahona@red.com.sv","obarahona@red.com.sv");
        $mail->AddAddress("pgarcia@red.com.sv","pgarcia@red.com.sv");
        $mail->AddAddress("eortiz.sv@gmail.com","eortiz.sv@gmail.com");
         * $mail->AddAddress($correo,$correo);    
        */
     //   echo " enviando a $correo y arivas@red.com.sv";
        //$mail->AddAddress($correo,$correo);


        $mail->AddBCC("arivas@red.com.sv","Alvaro Rivas");

        //$mail->AddAddress("arivas@red.com.sv","arivas@red.com.sv");     
        $mail->IsHTML(true);
        
        $query = new Querys();

         $rstMail = $query->listadoUsuariosXMail($codigoI);

         foreach ($rstMail as $mailList):
            echo "<br> correo a enviar ".$mailList["correo"]." para el usuario ".$codigoI;
            $mail->AddAddress($mailList["correo"],$mailList["correo"]);
         endforeach;

            
       

        $url = Yii::app()->request->baseUrl;
        $mail->AddEmbeddedImage("../" . $url . "/img/cumplio-no-ok.png", 'cumplio-no-ok.png');
        $mail->AddEmbeddedImage("../" . $url . "/img/cumplio-falta.png", 'cumplio-falta.png');
        $mail->AddEmbeddedImage("../" . $url . "/img/cumplio-no.png", 'cumplio-no.png');
        $mail->AddEmbeddedImage("../" . $url . "/img/cumplio-ok.png", 'cumplio-ok.png');
        $mail->AddEmbeddedImage("../" . $url . "/img/mapaMail.png", 'mapaMail');
        $mail->AddEmbeddedImage("../" . $url . "/img/actividad.png", 'actividad');
        $mail->AddEmbeddedImage("../" . $url . "/img/cliente.png", 'cliente');

         $usuario2 = $query->informacionUsuarioID($codigoI);
             
            $nombreUsux = "";
            
            foreach ($usuario2 as $nam):
              
                $nombreUsux = $nam["nombre"];
              
            endforeach;



         echo "Buscando informacion <br>";
         
        $valor = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Documento sin título</title>
<style>
.text-info {
  color: #4dd4fd;
}
.text-success {
  color: #9ad268;
}
.text-warning {
  color: #ffc545;
}
.text-danger {
  color: #fe402b;
}

.label-success,
.badge-success {
  background-color: #9ad268;
  color: #fff;
}
.label-danger,
.badge-danger {
  background-color: #fe402b;
  color: #fff;
}
.label-warning,
.badge-warning {
  background-color: #ffc545;
  color: #fff;
}
.label-info,
.badge-info {
  background-color: #4dd4fd;
  color: #fff;
}
</style>
</head>

<body style='padding:20px;'>
<div style='border: solid 1px #eee; background-color: #FFFFFF; color: #333;'>

<table cellspacing='0' cellpadding='0' border='0' background='#FFFFFF' width='100%'>
  <tr>
    <td width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' >&nbsp;</td>
    <td  width='92%' colspan='23' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td  width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF' width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%' style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr><tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='21' style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e;border:1px solid #eee; font-weight:bold;background-color:#f2f2f2;text-align:center;'  bgcolor='#FFFFFF' >RESUMEN CONSOLIDADO COLABORADORES DE $nombreUsux</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr> <tr>
    <td  width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF' width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='4%' style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td width='4%' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";
        $listadoA = $query->listadoUsuarioCadena($usuario, $permiso, $empresa,$codigoI);
        foreach ($listadoA as $lstA):
            $contador++;
            $usuario2 = $query->informacionUsuarioID($lstA["id"]);
            $codigo = "";
            $nombreUsu = "";
            $direccion="http://200.35.189.158/redcontrol/";
            foreach ($usuario2 as $nam):
                $codigo = $nam["id"];
                $nombreUsu = $nam["nombre"];
                $direccion = $nam["direccion"];
            endforeach;

            $ident = $query->informacionMenuResumenSupervisor($lstA["id"]);
            $identify="cHq2qPgBDA7s03ceSggX5nnbzAHZn02uiojTYvMVIww";
            foreach ($ident as $ident2):
                $identify = $ident2["idmenu"];
                $identify= $encrip->encode($identify);
            endforeach;

  $valor = $valor . "<tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='21' style='font-size:14px;font-family:LucidaGrande,
    tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e;border:1px solid #eee; font-weight:bold;background-color:#f2f2f2;text-align:center;'  bgcolor='#FFFFFF' >RESUMEN DEL DIA $fechaI DE $nombreUsu</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";
  
  $valor = $valor ." <tr>	
	    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>	
	    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>	
	    <td colspan='21' bgcolor='#4c649b' height='40'  style='border-collapse:collapse;   text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;	
	 cursor:pointer'>Agenda Programada&nbsp;</td>
         <td style='border-right:solid 1px #eee;'>&nbsp;</td>	
	    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>	
	  </tr>
  <tr>
  <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='4' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Programacion</td>
    
    <td colspan='7' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Nombre</td>
    <td colspan='5' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Ejecucion</td>
    
   
    <td colspan='2' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Duracion</td>
    <td colspan='3' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Estado</td>
    
     
      
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    </tr>";

   

            //$rst3 = $query->informacionVisitasResumenUsu($lstA["id"], $fechaI);
            $rst3 = $query->informacionVisitasResumen2($lstA["id"], $fechaI, 0);

            $color = "f9f9f9";
            $numero = $numeroA = $numeroB = 0;
            $list1 = array();
            $list2 = array();
            
            foreach ($rst3 as $modelTipoS):
                $color = str_replace("/img/", "", $modelTipoS["color"]); 
                $imgACCLI = $modelTipoS['tipoCita'];
                            $valor1F="";
                                    $valor2H="";
                            $vacio =0;
                            if($modelTipoS['buscar']==1){
                                $rstInf = $query->informacionValidacionCita($modelTipoS['id']);
                                $salto="";                                 
                                if($rstInf){
                                    $vacio=1;
                                   
                                    $valor1F="";
                                    $valor2H="";

                                    foreach($rstInf as $rsti):
                                        $linea="";
                                        if($rsti["fechaI"]!=""){
                                            $linea =  " a ";
                                        }
                                        $valor1F= $valor1F.$salto.$rsti["fechaI"].$linea.$rsti["fechaF"];
                                        if($rsti["tiempo"]!="00:00:00")
                                        $valor2H=$valor2H.$salto.$rsti["tiempo"];
                                        if(trim($valor1F)!="" || trim($valor2H)!="" )
                                        $salto = "<br>&nbsp;";
                                    endforeach;
                                                               
                                }
                            }
                             
                        if ($numero % 2 == 0) {	
	                    $colorx = "ffffff";	
	                } else {	
	                    $colorx = "f9f9f9";	
	                }
	
	                $numero = $numero + 1;

                $img1 = "<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($modelTipoS["id"])."' ><img  width='16'  height='16' src='cid:" .$color . "' /></a>";
                $valor = $valor . "<tr><td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
     <td  bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx' >&nbsp; 
                        <img width='16' height='16' src='cid:".$imgACCLI."' > </td>
    <td colspan='3' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx' >&nbsp;"
                        .$modelTipoS['fechaNueva']." (".$modelTipoS["tiempoPro"]." hrs)".
                        "</td>
   
    <td colspan='7' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($modelTipoS["id"])."' >".$modelTipoS['cliente']."</a></td>
    <td colspan='5' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;".$valor1F."</td>
   
    <td colspan='2' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;".$valor2H."</td>
    <td colspan='3' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;".$img1."</td>
     
    
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    
    </tr>";
             
            endforeach;
            
            $valor = $valor ."  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr><tr>	
	    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>	
	    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>	
	    <td colspan='21' bgcolor='#4c649b' height='40'  style='border-collapse:collapse;   text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;	
	 cursor:pointer'>Agenda Re-Programada&nbsp;</td>
         <td style='border-right:solid 1px #eee;'>&nbsp;</td>	
	    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>	
	  </tr>
  <tr>
  <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='4' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Programacion</td>
    
    <td colspan='7' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Nombre</td>
    <td colspan='5' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Ejecucion</td>
    
   
    <td colspan='2' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Duracion</td>
    <td colspan='3' bgcolor='#f2f2f2' style='color:#777777;border:1px solid #eee; font-weight:bold;'  align='center' >Estado</td>
    
     
      
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    </tr>";

   

             
            $rst3 = $query->informacionVisitasResumen2($lstA["id"], $fechaI, 1);

            $color = "f9f9f9";
            $numero = $numeroA = $numeroB = 0;
            $list1 = array();
            $list2 = array();
            
            foreach ($rst3 as $modelTipoS):
                $color = str_replace("/img/", "", $modelTipoS["color"]); 
                $imgACCLI = $modelTipoS['tipoCita'];
                            $valor1F="";
                                    $valor2H="";
                            $vacio =0;
                            if($modelTipoS['buscar']==1){
                                $rstInf = $query->informacionValidacionCita($modelTipoS['id']);
                                $salto="";                                 
                                if($rstInf){
                                    $vacio=1;
                                   
                                    $valor1F="";
                                    $valor2H="";

                                    foreach($rstInf as $rsti):
                                        $linea="";
                                        if($rsti["fechaI"]!=""){
                                            $linea =  " a ";
                                        }
                                        $valor1F= $valor1F.$salto.$rsti["fechaI"].$linea.$rsti["fechaF"];
                                        if($rsti["tiempo"]!="00:00:00")
                                        $valor2H=$valor2H.$salto.$rsti["tiempo"];
                                        if(trim($valor1F)!="" || trim($valor2H)!="" )
                                        $salto = "<br>&nbsp;";
                                    endforeach;
                                                               
                                }
                            }
                             
                            if ($numero % 2 == 0) {
	
	                    $colorx = "ffffff";
	
	                } else {
	
	                    $colorx = "f9f9f9";
	
	                }
	
	                $numero = $numero + 1;

                $img1 = "<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($modelTipoS["id"])."' ><img  width='16'  height='16' src='cid:" .$color . "' /></a>";
                $valor = $valor . "<tr><td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td  bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx' >&nbsp; 
                        <img width='16' height='16' src='cid:".$imgACCLI."' > </td>
    <td colspan='3' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx' >&nbsp;"
                        .$modelTipoS['fechaNueva']." (".$modelTipoS["tiempoPro"]." hrs)".
                        "</td>
   
    <td colspan='7' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;<a href='".$direccion."supervisor/mapa2.html?idAgenda=".  base64_encode($modelTipoS["id"])."' >".$modelTipoS['cliente']."</a></td>
    <td colspan='5' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;".$valor1F."</td>
   
    <td colspan='2' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;".$valor2H."</td>
    <td colspan='3' bgcolor='#$colorx' style='color:#777777;font-size:10px;border:1px  solid #eee;background-color:#$colorx'>&nbsp;".$img1."</td>
     
    
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    
    </tr>";
            
            endforeach;

   $valor = $valor . "
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='6' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'>Clasificacion</td>
 <td colspan='2' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'><img width='16' height='16' src='cid:actividad' ></td>
 <td colspan='2' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'><img width='16' height='16' src='cid:cliente' ></td>
    <td>&nbsp;</td>
    <td colspan='6' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'>CLASIFICACION</td>
 <td colspan='4' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' height='40'>TIEMPOS</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";
            $clasifiCitas = $query->informacionAgendasDiaUsuario2($fechaI, $lstA["id"], 1);
            //$query->informacionAgendasTiempoUsuarioX($fechaI, $accion);
           
            $numero = 1;
            $color2 = "f9f9f9";
            $borde = "eee";
            $modelColor="danger";
            $modelClasi="NO REALIZADAS";
            $modelActiv="0";
             $modelClien="0";
            foreach ($clasifiCitas as $modelTipoS):
                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;
                 $tim = "";
                $color2 = "ffffff";
                $borde = "fff";
                $modelColor= $modelTipoS['color'] ;
                $modelClasi= $modelTipoS['clasi'];
                $modelActiv= $modelTipoS['actividad'];
                $modelClien= $modelTipoS['cliente'] ;
            endforeach;
             $tiempo = $query->informacionAgendasTiempoUsuarioX(  $fechaI, $lstA["id"]);
            $tim = "00:00:00";
            foreach ($tiempo as $time):
                $tim = $time["tiempo"];
            endforeach;
            if($tim ==""){
            $tim = "00:00:00";

            }
             $color = "f9f9f9";
              $borde = "eee";
               $color2 = "f9f9f9";
                $valor = $valor . "<tr>
            
<td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'></td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='6' style='border:solid 1px #eee; font-weight:bold;  font-size:12px;' bgcolor='#f9f9f9' class='text-" .$modelColor. "' >" .  $modelClasi. "&nbsp;</td>
    <td colspan='2' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#f9f9f9' class='text-" . $modelColor. "' >" . $modelActiv . "&nbsp;</td>
    <td colspan='2' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#f9f9f9' class='text-" .$modelColor. "' >" . $modelClien . "&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
     
    <td colspan='6' align='left' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#f9f9f9' >TIEMPO EFECTIVO CLIENTE&nbsp;</td>
    <td colspan='4' align='center' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#f9f9f9' >" . $tim . "&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' width='55'></td>
</tr>";
               
            $clasifiCitas = $query->informacionAgendasDiaUsuario2($fechaI, $lstA["id"], 2);
            //$query->informacionAgendasTiempoUsuarioX($fechaI, $accion);

            
            $numero = 1;
            $color2 = "f9f9f9";
            $borde = "eee";
            $modelColor="warning";
            $modelClasi="REALIZADAS";
            $modelActiv="0";
            $modelClien="0";
            foreach ($clasifiCitas as $modelTipoS):
                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;
                 $tim = "";
                $color2 = "ffffff";
                $borde = "fff";
                $modelColor= $modelTipoS['color'] ;
                $modelClasi= $modelTipoS['clasi'];
                $modelActiv= $modelTipoS['actividad'];
                $modelClien= $modelTipoS['cliente'] ;
            endforeach;
            $tiempo = $query->informacionAgendasTiempoActividadesX($fechaI, $lstA["id"]);
            $tim = "00:00:00";
            foreach ($tiempo as $time):
                $tim = $time["tiempo"];
            endforeach;
            if($tim ==""){
            $tim = "00:00:00";

            }
             $color = "f9f9f9";
              $borde = "eee";
               $color2 = "f9f9f9";
                $valor = $valor . "<tr>
<td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'></td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='6' style='border:solid 1px #eee; font-weight:bold;  font-size:12px;' bgcolor='#$color' class='text-" .$modelColor. "' >" .  $modelClasi. "&nbsp;</td>
    <td colspan='2' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#$color' class='text-" . $modelColor. "' >" . $modelActiv . "&nbsp;</td>
    <td colspan='2' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#$color' class='text-" .$modelColor. "' >" . $modelClien . "&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
     
    <td colspan='6' align='left' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#f9f9f9' >TIEMPO EFECTIVO ACTIVIDADES&nbsp;</td>
    <td colspan='4' align='center' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#f9f9f9' >" . $tim . "&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' width='55'></td>
</tr>";
               
               $clasifiCitas = $query->informacionAgendasDiaUsuario2($fechaI, $lstA["id"], 3);
            //$query->informacionAgendasTiempoUsuarioX($fechaI, $accion);
          

            
            $numero = 1;
            $color2 = "f9f9f9";
            $borde = "eee";
            $modelColor="success";
            $modelClasi="EFECTIVAS";
            $modelActiv="0";
            $modelClien="0";
            foreach ($clasifiCitas as $modelTipoS):
                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;
                 $tim = "";
                $color2 = "ffffff";
                $borde = "fff";
                $modelColor= $modelTipoS['color'] ;
                $modelClasi= $modelTipoS['clasi'];
                $modelActiv= $modelTipoS['actividad'];
                $modelClien= $modelTipoS['cliente'] ;
            endforeach;
            $tiempo = $query->informacionAgendasTiempoTotales($fechaI, $lstA["id"]);
            $tim = "00:00:00";
            foreach ($tiempo as $time):
                $tim = $time["tiempo"];
            endforeach;
            if($tim ==""){
            $tim = "00:00:00";

            }
              $color = "f9f9f9";
              $borde = "eee";
               $color2 = "f9f9f9";
                $valor = $valor . "<tr>
<td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'></td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='6' style='border:solid 1px #eee; font-weight:bold;  font-size:12px;' bgcolor='#$color' class='text-" .$modelColor. "' >" .  $modelClasi. "&nbsp;</td>
    <td colspan='2' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#$color' class='text-" . $modelColor. "' >" . $modelActiv . "&nbsp;</td>
    <td colspan='2' align='center' style='border:solid 1px #eee;font-weight:bold;   font-size:12px;' bgcolor='#$color' class='text-" .$modelColor. "' >" . $modelClien . "&nbsp;</td>
    <td bgcolor='#FFFFFF'>&nbsp;</td>
     
    <td colspan='6' align='center' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#f9f9f9' >TIEMPO EFECTIVO TOTAL&nbsp;</td>
    <td colspan='4' align='center' style='border:solid 1px #$borde; font-weight:bold; color:#777777;font-size:12px;' bgcolor='#f9f9f9' >" . $tim . "&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' width='55'></td>
</tr>";
               

  
        $modelClasi="";
        $modelActiv="0";
        $modelClien="0";
  
            $valor = $valor . "<tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='21' style='font-weight:bold; font-size:12px;color:#777777;' bgcolor='#FFFFFF'>INFORMACION DE AGENDAS&nbsp;Y NOTIFICACIONES</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Fecha</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer' >Cliente</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Usuario</td>
    <td colspan='4' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Tipo</td>
    <td colspan='5' height='40' style='border-collapse:collapse; font-weight:bold;  text-align:center;  background-color:#4c649b; font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px;   text-decoration:none;
 cursor:pointer'>Comentario</td>
    <td style='border-right:solid 1px #eee;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>";

            $numero = 1;
            $color2 = "f9f9f9";
            $borde = "eee";
            $comentario = $query->listadoComentarioAgendaFull($lstA["id"], $fechaI);
            foreach ($comentario as $lst):


                if ($numero % 2 == 0) {
                    $color = "ffffff";
                } else {
                    $color = "f9f9f9";
                }
                $numero = $numero + 1;
                $valor = $valor . "<tr>
        <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' ></td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["fecha"] . "&nbsp;</td>
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color' >" . $lst["cliente"] . "&nbsp;</td>
    
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["nombre"] . "&nbsp;</td>
    <td colspan='4' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["tipo"] . "&nbsp;</td>
    <td colspan='5' style='border:solid 1px #eee; font-weight:bold; color:#777777; font-size:10px;' bgcolor='#$color'>" . $lst["comentario"] . "&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;' ></td>
        </tr>";
            endforeach;

           

            $valor = $valor . "

  
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td colspan='3' rowspan='3' align='center'> <a href='".$direccion."supervisor/resumen.html?identify=$identify&user=" . $codigo . "&fechaI=" . $fechaI . "' >
    <img src='cid:mapaMail' width='64' height='64'></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
 
  <tr>
    <td  style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='border-left:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style='border-right:solid 1px #eee;' bgcolor='#FFFFFF'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  ";


        endforeach;
        $valor = $valor . "
  <tr>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td colspan='23' style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
    <td style='font-size:14px;font-family:LucidaGrande,tahoma,verdana,arial,sans-serif;padding:10px; color: #0bb35e; font-weight:bold;background-color:#f2f2f2;text-align:center;'>&nbsp;</td>
  </tr>
  
</table>

</div></body></html>";
        echo $valor;
        $mail->Body = $valor;
        if($contador>0){
            if($mail->Send()){
                return "Enviado";
            }else{
                 return "No Enviado";
            }  
        }
        unset($mail);
    }

}
