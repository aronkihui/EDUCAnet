<?php
/* @var $this BloquesAsignaturaCursoController */
/* @var $data BloquesAsignaturaCurso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso_idcurso')); ?>:</b>
	<?php echo CHtml::encode($data->curso_idcurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asignatura_idasignatura')); ?>:</b>
	<?php echo CHtml::encode($data->asignatura_idasignatura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bloques_id_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->bloques_id_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bloques_id_fin')); ?>:</b>
	<?php echo CHtml::encode($data->bloques_id_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />


</div>