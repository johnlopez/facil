<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>View Usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>

<div class="row-fluid">
	<div class="span6">
		<?php $form=$this->beginWidget("CActiveForm");?>

		<?php echo $form->labelEx($role,"name");?>
		<?php echo $form->textField($role,"name");?>
		<?php echo $form->error($role,"name");?><br>

		<?php echo $form->labelEx($role,"description");?>
		<?php echo $form->textArea($role,"description");?><br>
		<?php echo $form->error($role,"description");?>

		<?php echo CHtml::submitButton("Create",array("class"=>"btn btn-primary")); ?>
		<?php $this->endWidget(); ?>
	</div>
<div class="span6">
	<ul class="nav nav-tabs nav-stacked">
	<?php foreach(Yii::app()->authManager->getAuthItems() as $data):?>
	<?php $enabled=Yii::app()->authManager->checkAccess($data->name,$model->id) ?>
		<li>
			<h4><?php echo $data->name?>
				<small>
					<?php if($data->type==0) echo"Role";?>
					<?php if($data->type==1) echo"Tarea";?>
					<?php if($data->type==2) echo"Operacion";?>
				</small>
				<?php echo CHtml::link($enabled?"Off":"On",array("usuario/assign","id"=>$model->id,"item"=>$data->name),
									array("class"=>$enabled?"btn btn-primary":"btn"));?>
			</h4>
			<p><?php echo $data->description?></p>
		</li>  
	<?php endforeach;?>	
	</ul>
</div>
</div>
