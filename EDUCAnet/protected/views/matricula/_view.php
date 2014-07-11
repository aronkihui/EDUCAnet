<?php
/* @var $this MatriculaController */
/* @var $data Matricula */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmatricula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmatricula), array('view', 'id'=>$data->idmatricula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apoderado_idapoderado')); ?>:</b>
	<?php echo CHtml::encode($data->apoderado_idapoderado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumno_idalumno')); ?>:</b>
	<?php echo CHtml::encode($data->alumno_idalumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoMatricula')); ?>:</b>
	<?php echo CHtml::encode($data->estadoMatricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matriculador_idmatriculador')); ?>:</b>
	<?php echo CHtml::encode($data->matriculador_idmatriculador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso_idcurso')); ?>:</b>
	<?php echo CHtml::encode($data->curso_idcurso); ?>
	<br />


</div>