<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrecurso'); ?>
		<?php echo $form->textField($model,'nombrecurso',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nombrecurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
		<?php echo $form->error($model,'año'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupos'); ?>
		<?php echo $form->textField($model,'cupos'); ?>
		<?php echo $form->error($model,'cupos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesor_idprofesor'); ?>
		<?php echo $form->textField($model,'profesor_idprofesor',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'profesor_idprofesor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->