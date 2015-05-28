<?php
class CountriesController extends Controller
{
	public function actionIndex()
	{
		$model = new Countries();
		$model->name="Chile";
		$model->status=1;
		$model->save();

		$countries=Countries::model()->findAll();
		$this->render("index",array("countries"=>$countries));
	}
}