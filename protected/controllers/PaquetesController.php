<?php

class PaquetesController extends Controller
{
	
	
	public function actionIngreso()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		 
		 if(!Yii::app()->user->isGuest){
		 		echo "LLegue";
			// $this->render('index', array('rstempresas' =>  $rstempresas, 'rstEstaciones' =>  $rstEstaciones));
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
        
        
	

}
