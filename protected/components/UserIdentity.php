<?php /** * UserIdentity represents the data needed to identity a user. * It contains the authentication method that checks if the provided * data can identity the user. */
    class UserIdentity extends CUserIdentity {
            private $_id;

            public function authenticate(){
                $username=strtoupper ($this->username);
                $pass=$this->password;
                $querys =  new Querys();
                $rst = $querys->loginUsuario($username, $pass);
                $contador = 0;    
                foreach($rst as $info):
                    $this->_id=$username;
                    $this->username=$username;
                    $contador=1; 

                   // codigo, nombre,permisos                   
                    $this->setState('nameUser',$info["nombre"]);     
                    $this->setState('permiso',$info["idpermisos"]);                    
                    $this->setState('userCode',$username);
                    $this->setState('empresa',$info["idempresa"]);
                    $this->setState('email',$info["correo"]);
                    $this->errorCode=self::ERROR_NONE;                     
                    $this->setState("estadoLogueo", "1"); 
                  //  echo "Mi valor es ".$info["pais"];
                endforeach;                                                    
                     
                if($contador==0){
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }

                return $this->errorCode==self::ERROR_NONE;
            }

            public function getId(){
                    return $this->_id;
            }

    } 
