<h1> Countries </h1>
<?php echo CHtml::link("Crear",array("create")) ;?>
<?php foreach ($countries as $data):?>
	<h3>
		<?php echo $data->name?>
		<small>	
			<?php echo $data->status==1?"Enabled":"Disabled";?>
		</small>
	</h3>
<?php endforeach;?>