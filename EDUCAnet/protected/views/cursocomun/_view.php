<?php
/* @var $this CursocomunController */
/* @var $data Cursocomun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcurso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcurso), array('view', 'id'=>$data->idcurso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etiqueta')); ?>:</b>
	<?php echo CHtml::encode($data->etiqueta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrecurso')); ?>:</b>
	<?php echo CHtml::encode($data->nombrecurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor_idprofesor')); ?>:</b>
	<?php echo CHtml::encode($data->profesor_idprofesor); ?>
	<br />


</div>