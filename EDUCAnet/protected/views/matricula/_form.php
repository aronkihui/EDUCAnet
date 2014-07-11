<?php
/* @var $this MatriculaController */
/* @var $model Matricula */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matricula-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Apoderado'); ?>
		
            <?php echo $form->dropDownList($model,'apoderado_idapoderado', $model->getApoderado()); ?>

		<?php echo $form->error($model,'apoderado_idapoderado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Alumno'); ?>		
             <?php echo $form->dropDownList($model,'alumno_idalumno', $model->getAlumno()); ?>
		<?php echo $form->error($model,'alumno_idalumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoMatricula'); ?>
                <?php echo $form->dropDownList($model,'estadoMatricula', array('condicional'=>'condicional','aceptado'=>'aceptado','repitente'=>'repitente')); ?>
		<?php echo $form->error($model,'estadoMatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matriculador_idmatriculador tomado por user identity'); ?>
		<?php echo $form->textField($model,'matriculador_idmatriculador',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'matriculador_idmatriculador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curso'); ?>
		<?php echo $form->dropDownList($model,'curso_idcurso',$model->getCurso()); ?>
		<?php echo $form->error($model,'curso_idcurso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->