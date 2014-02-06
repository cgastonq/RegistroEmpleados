<?php
#http://localhost/yii/RegistroEmpleados/hola/index
class HolaController extends Controller
{
	public function actionIndex()
	{
		$model=Users::model()->findAll();
		$twitter="@Kaffuss";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
}