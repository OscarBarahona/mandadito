<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author arivas
 */
class Menu {
    //put your code here
    
    function menuPrincipal($padre){
        $acme = new ACME();   
        $permiso = Yii::app()->user->permiso;           
        $consulta="SELECT idmenu, nombre, controlador, accion, estado, padre, icono,
coalesce((select sum(1) from delivery.menu m1 where m1.padre=me.idmenu and m1.estado=2  )
,0) submenunum, alias
 FROM delivery.menu me WHERE padre=$padre and permisos<=$permiso and me.estado=2 order by idmenu";
         return $acme->seleccion($consulta);        
    }
}
