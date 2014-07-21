
<div class="container-fluid well-small well">
    <h2 class="title centered"><?php echo'Formulario  matricula alumno antiguo'?></h2>
    
    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
    
    <h4 class="note centered ">Campos con <span class="required">*</span> son requeridos</h4>
</div>

<div class="tabbable table-bordered well">


<div class="form">

<?php
/* @var $this MatriculaController */
/* @var $model Matricula */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matricula-antiguo-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Apoderado'); ?>
		<?php echo $form->dropDownList($model,'apoderado_idapoderado',$model->getApoderado()); ?>
		<?php echo $form->error($model,'apoderado_idapoderado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Alumno'); ?>
		<?php echo $form->dropDownList($model,'alumno_idalumno',$model->getAlumno()); ?>
		<?php echo $form->error($model,'alumno_idalumno'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'estadoMatricula'); ?>
		   <?php echo $form->dropDownList($model,'estadoMatricula', array('condicional'=>'condicional','aceptado'=>'aceptado','repitente'=>'repitente')); ?>
		<?php echo $form->error($model,'estadoMatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curso_idcurso'); ?>
                <?php echo $form->dropDownList($model,'curso_idcurso',$model->getCurso()); ?>
		<?php echo $form->error($model,'curso_idcurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut matriculador'); ?>
		
		<?php echo $form->error($model,'matriculadores_idmatriculador'); ?>
            
            <?php echo $form->dropDownList($model,'matriculadores_idmatriculador',$model->getIdMatriculador()); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Matricula' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div><!-- form -->


</div>