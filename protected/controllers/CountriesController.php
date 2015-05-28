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

		/* Mensaje de sesion para ocupar en el sistema¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡
		Yii::app()->user->setFlash("success","Este es un mensaje de completado");
		Yii::app()->user->setFlash("warning","Este es un mensaje de Alerta");		
		Yii::app()->user->setFlash("info","Este es un mensaje de Informacion");
		Yii::app()->user->setFlash("error","Este es un mensaje de Error");
		*/


		/*Implementacion de PATH ALIAS*/
		//Con directorio Yii::import("application.directorio.Test1");
		//Mas de un Archivo Yii::import("application.directorio.*");
		Yii::import("application.Test1"); 
		Yii::import("webroot.Test2");
		Yii::import("ext.Test3");
		//Yii::import("zii.Test4");
		//Yii::import("me.Test5");//Yii::import("me.*");
		
		#Equivalente con Include del import de Yii framework
		#include(Yii::etPathOfAlias("application")."/Test.php");

		//Mostrando los PATH ALIAS disponibles por defecto
		echo Yii::getPathOfAlias("application")."<br>";//protected
		echo Yii::getPathOfAlias("webroot")."<br>";//root o carpeta raiz
		echo Yii::getPathOfAlias("ext")."<br>";//protected/extencions
		echo Yii::getPathOfAlias("zii")."<br>";//framework/zii
		
		$me1=new Test1;
		echo $me1->hi();
		echo "<br>";

		$me2=new Test2;
		echo $me2->hi();
		echo "<br>";

		$me3=new Test3;
		echo $me3->hi();
		echo "<br>";

		/*
		$me4=new Test4;
		echo $me4->hi();
		echo "<br>";

		$me5=new Test5;
		echo $me5->hi();
		echo "<br>";
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
				Yii::app()->user->setFlash("success","Pais creado correctamente");
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
				Yii::app()->user->setFlash("success","Pais actualizado correctamente");
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

	public function actionEnable($id)
	{
		$model=Countries::model()->findByPk($id);
		if($model->status==1)
			$model->status=0;
		else
			$model->status=1;
		$model->save();
		$this->redirect(array("index"));

	}
}