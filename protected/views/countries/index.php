<h1> Countries </h1>
<?php echo CHtml::link("Crear",array("create")) ;?>
<?php foreach ($countries as $data):?>
	<h3>
		<?php echo $data->name?>
		<small>	
			<?php echo $data->status==1?"Enabled":"Disabled";?>
		</small>
	</h3>
<label class="badge badge-info"><?php echo $data->id;?></label>
<?php echo CHtml::link("Actualizar",array("update","id"=>$data->id,"name"=>$data->name))?>
<?php echo CHtml::link("Borrar",array("delete","id"=>$data->id),array("confirm"=>"¿Esta seguro que desea borrar?"))?>
<?php endforeach;?>