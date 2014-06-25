<?php
/* @var $this CursocomunController */
/* @var $model Cursocomun */
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
		<?php echo $form->label($model,'etiqueta'); ?>
		<?php echo $form->textField($model,'etiqueta',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrecurso'); ?>
		<?php echo $form->textField($model,'nombrecurso',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesor_idprofesor'); ?>
		<?php echo $form->textField($model,'profesor_idprofesor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->