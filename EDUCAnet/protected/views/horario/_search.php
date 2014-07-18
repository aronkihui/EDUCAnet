<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curso_idcurso'); ?>
		<?php echo $form->textField($model,'curso_idcurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asignatura_idasignatura'); ?>
		<?php echo $form->textField($model,'asignatura_idasignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bloques_id_inicio'); ?>
		<?php echo $form->textField($model,'bloques_id_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bloques_id_fin'); ?>
		<?php echo $form->textField($model,'bloques_id_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia_iddia'); ?>
		<?php echo $form->textField($model,'dia_iddia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->