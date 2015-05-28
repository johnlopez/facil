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

	public function actionUpdate($id)
	{
		$model=Countries::model()->findByPk($id);
		if(isset($_POST["Countries"]))
		{
			$model->attributes=$_POST["Countries"];
			if ($model->save()) 
			{
				$this->redirect(array("index"));
			}
		}
		$this->render("update",array("model"=>$model));
	}

	public function actionDelete($id)
	{
		$model=Countries::model()->deleteByPk($id);
		$this->redirect(array("index"));
	}

	public function actionView($id)
	{
		$model=Countries::model()->findByPk($id);
		$this->render("view",array("model"=>$model));
	}
}