<h1> Countries </h1>
<?php foreach ($countries as $data):?>
	<h3>
		<?php echo $data->name?>
		<small>	
			<?php echo $data->status==1?"Enabled":"Disabled";?>
		</small>
	</h3>
<?php endforeach;?>