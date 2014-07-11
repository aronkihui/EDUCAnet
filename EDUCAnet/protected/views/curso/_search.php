<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcurso'); ?>
		<?php echo $form->textField($model,'idcurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrecurso'); ?>
		<?php echo $form->textField($model,'nombrecurso',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cupos'); ?>
		<?php echo $form->textField($model,'cupos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesor_idprofesor'); ?>
		<?php echo $form->textField($model,'profesor_idprofesor',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->