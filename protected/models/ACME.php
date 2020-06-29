<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ACME
 *
 * @author Alvaro Ernesto Rivas
 */
class ACME {    
    function guardar($consulta){   
        $connection = Yii::app() -> db;     
        $command = $connection -> createCommand($consulta);   
        $command -> execute();
        return  $resp ="1";               
    }
    function guardarIdent($consulta){        
        $resp ="0";
        if(Yii::app() -> db -> createCommand($consulta)->execute()){
            $resp = Yii::app()->db->getLastInsertId();
        }      
        return $resp;               
    }    
    function seleccion($consulta){
       return Yii::app()->db->createCommand($consulta)->queryAll();              
    }
    

    
}
