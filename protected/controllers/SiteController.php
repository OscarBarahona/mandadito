<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actionBuscarSesion(){
		echo Yii::app()->user->userCode;
	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function init() {
	   // Yii::app()->clientScript->registerCoreScript('jquery');
	}

        public function actionBuscarAlerta(){
            $retorno=0;
            if(!Yii::app()->user->isGuest){
                $query = new Querys();
                $listado = $query->nuevosEventos();
                foreach($listado as $lst):
                    $query->guardarNuevoEvento($lst["id"], $lst["tipollegada"]);
                    $retorno="1";
                endforeach;    
                $listado2 = $query->nuevosEventos2();
                foreach($listado2 as $lst2):
                    $query->guardarNuevoEvento2($lst2["id"]);
                    $retorno="1";
                endforeach;    
             }else{
                 $retorno =  "-1";                 
             }
             echo $retorno;
        }
        public function actionAlertas(){
            $this->renderPartial("alerta");
            
        }
        
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		 
		 if(!Yii::app()->user->isGuest){
				$query = new Querys();
				$em = new Empresa();
				$empresaori=Yii::app()->user->empresa;		 		
			$this->render('index');
         }else {
		 	$model=new LoginForm;
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				if($model->validate() && $model->login())
					$this->redirect(Yii::app()->user->returnUrl);
			}
			$this->render('login',array('model'=>$model));
		 }
	}
        
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
        
        
	/**
	 * Displays the login page
	 */
	public function actionLogin()	{
		$model=new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data4 
               echo Yii::app()->user->returnUrl;
		if(isset($_POST['LoginForm'])){
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
                            $this->redirect(Yii::app()->user->returnUrl);                        
                        }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionPuntos(){
		$query = new Querys();
		 $empresa = Yii::app()->user->empresa; 
		$rst = $query->todosPuntos();                   
		$listadoPuntos = array();
		foreach ($rst as $puntos):                
			array_push($listadoPuntos, ['lat'=> $puntos["lat"] , 'lng' =>  $puntos["lng"],
				'idPunto' =>  $puntos['correlativo'] , 'datos' =>  $puntos["direccion"], 'icono'=> '/img/' . $puntos["icono"], 'nombre' =>  $puntos["nombre"]  ]);                 
		endforeach;
		echo json_encode($listadoPuntos);  
	}

	public function actionEstaciones(){
		$query = new Querys();
		$id=$_REQUEST["empresa"];
		$rst = $query->listEstaciones($id);
		$select="<option value='-1'>Seleccione uno</option>";
		foreach ($rst as $res):
		$select=$select."<option value='".$res['idestacion']."'>".$res['estacion']."</option>";
		endforeach;		
		echo $select;
	}


}
