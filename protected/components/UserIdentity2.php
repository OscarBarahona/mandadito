<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
        private $_id;
	public function authenticate(){
            $usuario=strtolower($this->username);
            $user=Usuario::model()->find('LOWER(correoUsuario)=?',array($usuario));
           /* echo '<pre>';
            	print_r ($this->password);
            echo '</pre>';
            Yii::app()->end();
            * 
            */
            if($user===null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password) ){
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
               
                }
            else{
                $this->_id=$user->correoUsuario;
                $this->username=$user->nombre.' '.$user->apellido;
                $this->errorCode=self::ERROR_NONE;

                /*Consultamos los datos del usuario por el username ($user->username) */
                $info_usuario = Usuario::model()->find('LOWER(correoUsuario)=?', array($user->correoUsuario));
                
                /*En las vistas tendremos disponibles last_login y perfil pueden setear las que requieran */
                //$this->setState('FechaUltIngreso',$info_usuario->FechaUltIngreso);
                $this->setState('permiso',$info_usuario->permiso);

                $nombreUsuario = $info_usuario->nombre.' '.$info_usuario->apellido;
                $this->setState('nombreUsuario',$nombreUsuario);
                $this->setState('numAvatar',$info_usuario->avatar);
                $this->setState('pais',$info_usuario->pais);
                $this->setState('ip',CHttpRequest::getUserHostAddress());
                $key = md5($nombreUsuario.CHttpRequest::getUserHostAddress().date("Y-m-d H:i:s")); 
                $this->setState('key',$key);
                $sql = "INSERT INTO terminal (`ipTerminal`, `llave`, `nombre`, `estado`, `tipo`) VALUES ('".CHttpRequest::getUserHostAddress()."', '$key', 'pc$this->username', 'A', 'O')";
                $connection = Yii::app() -> db;
                $command = $connection -> createCommand($sql);
                $command -> execute();

                $idUsu = Yii::app()->user->id;

                $sql = "INSERT INTO eventos (`nombre`, `descripcion`, `icono`) VALUES ('Usuario', '$nombreUsuario ha iniciado sesión ', 'email-unread.png')";
                $command = $connection -> createCommand($sql);
                $command -> execute();
            }
            return $this->errorCode==self::ERROR_NONE;
        }
    
    public function getId(){
        return $this->_id;
    }
	    
}