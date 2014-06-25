<?php
/* @var $this CursocomunController */
/* @var $model Cursocomun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cursocomun-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'etiqueta'); ?>
		<?php echo $form->textField($model,'etiqueta',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'etiqueta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrecurso'); ?>
		<?php echo $form->textField($model,'nombrecurso',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nombrecurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesor_idprofesor'); ?>
		<?php echo $form->textField($model,'profesor_idprofesor'); ?>
		<?php echo $form->error($model,'profesor_idprofesor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->