<?php 
class HolaController extends CController
{
    public function actionIndex()
    {
        //Manera Clasica de llamar a un modelo
        //$model = CActiveRecord::model("Users")->findAll();
        
        //Manera Abreviada para llamar a un modelo
        $model = Users::model()->findAll();
        $twitter = "@jlopez";
        $this ->render("index",array("model"=> $model,"twitter"=> $twitter));
    }
}