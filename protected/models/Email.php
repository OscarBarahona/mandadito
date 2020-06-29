<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Yii::import('application.extensions.phpmailer.JPhpMailer');
/**
 * Description of Email
 *
 * @author arivas
 */
class Email {
    //put your code here
    
    function inicializar($enviadopor, $asunto, $correo ){
        
        $mail = new JPhpMailer;
        //$query
        $mail->IsSMTP();
        $mail->Host = "172.17.10.15";// "mail.intelfon.com.sv";
        $mail->Port = 25;
        $mail->From = "noreply@intelfon.com.sv";
        $mail->CharSet = 'utf-8';
        $mail->SMTPDebug = 1;
        
        $mail->FromName = $enviadopor;
        $mail->Subject = $asunto;
        $mail->AddAddress($correo,$correo); 
       // $mail->AddAddress("ebarahona@red.com.sv","ebarahona@red.com.sv"); 
        $mail->IsHTML(true);
        
        return $mail;
    }
    function agregarCorreo($mail, $email){
        return $mail->AddAddress($email,$email);   
    }
    
    function enviar($mail){
         if($mail->Send()){
            return  "<strong>Enviado</strong>, Favor revise su correo electronico";
        }else{
             return "No Enviado";
        }  
    }
}
