<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalumno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idalumno), array('view', 'id'=>$data->idalumno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idusuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cursocomun_idcurso')); ?>:</b>
	<?php echo CHtml::encode($data->cursocomun_idcurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cursoelectivo_idcursoelectivo')); ?>:</b>
	<?php echo CHtml::encode($data->cursoelectivo_idcursoelectivo); ?>
	<br />

	*/ ?>

</div>