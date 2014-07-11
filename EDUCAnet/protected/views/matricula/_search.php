<?php
/* @var $this MatriculaController */
/* @var $model Matricula */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idmatricula'); ?>
		<?php echo $form->textField($model,'idmatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apoderado_idapoderado'); ?>
		<?php echo $form->textField($model,'apoderado_idapoderado',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumno_idalumno'); ?>
		<?php echo $form->textField($model,'alumno_idalumno',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoMatricula'); ?>
		<?php echo $form->textField($model,'estadoMatricula',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curso_idcurso'); ?>
		<?php echo $form->textField($model,'curso_idcurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matriculadores_idmatriculador'); ?>
		<?php echo $form->textField($model,'matriculadores_idmatriculador',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->