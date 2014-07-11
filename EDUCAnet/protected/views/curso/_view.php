<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcurso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcurso), array('view', 'id'=>$data->idcurso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrecurso')); ?>:</b>
	<?php echo CHtml::encode($data->nombrecurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('año')); ?>:</b>
	<?php echo CHtml::encode($data->año); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cupos')); ?>:</b>
	<?php echo CHtml::encode($data->cupos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor_idprofesor')); ?>:</b>
	<?php echo CHtml::encode($data->profesor_idprofesor); ?>
	<br />

	*/ ?>

</div>