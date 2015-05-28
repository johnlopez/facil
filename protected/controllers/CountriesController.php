<?php
class CountriesController extends Controller
{
	public function actionIndex()
	{
		/*
		$model = new Countries();
		$model->name="Uruguay";
		$model->status=1;
		$model->save();
		*/

		$countries=Countries::model()->findAll();
		$this->render("index",array("countries"=>$countries));
	}

	public function actionCreate()
	{
		/* Mostrar los valores que vienen de la vista
		var_dump($_POST);
		Yii::app()->end();
		*/

		$model=new Countries();
		if (isset($_POST["Countries"])) 
		{
			/*Manera abreviada de validar atributos*/
			$model->attributes=$_POST["Countries"];

			/*Manera larga de validar atributos
			$model->name=$_POST["Countries"]["name"];
			$model->status=$_POST["Countries"]["status"];
			*/

			if ($model->save()) 
			{
				$this->redirect(array("index"));
			}
		}


		$this->render("create",array("model"=>$model));
	}
}