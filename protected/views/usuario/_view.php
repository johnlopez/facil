<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>


<ul class="media-list">
  <li class="media">
    <a class="pull-left" href="#">
      <img class="media-object" data-src="holder.js/64x64">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			<br /></h4>
<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
			<?php echo CHtml::encode($data->username); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
			<?php echo CHtml::encode($data->password); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
			<?php echo CHtml::encode($data->email); ?>
			<br />
 
      <!-- Nested media object -->
      <div class="media">
        	

			

     </div>
    </div>
  </li>
</ul>