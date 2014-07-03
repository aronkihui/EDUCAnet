<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idusuario), array('view', 'id'=>$data->idusuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreusuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombreusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipousuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipousuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />


</div>