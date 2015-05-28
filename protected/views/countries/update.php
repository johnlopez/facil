<h1>Update Countries: #<?php echo $model->id?></h1>
<?php echo CHtml::link("Index",array("index")) ;?>
<?php $form=$this->beginWidget("CActiveForm");?>

<p>Nombre</p>
<?php echo $form->textField($model,"name"); ?>
<?php echo $form->error($model,"name");?>
<br>
<p>Status</p>
<?php echo $form->textField($model,"status"); ?>
<?php echo $form->error($model,"status");?>
<br>
<?php echo CHtml::submitButton("Actualizar",array("class"=>"btn btn-primary btn-large")); ?>
<?php $this->endWidget(); ?>
