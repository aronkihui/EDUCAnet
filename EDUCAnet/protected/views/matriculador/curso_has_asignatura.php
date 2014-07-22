<?php
/* @var $this CursoHasAsignaturaController */
/* @var $model CursoHasAsignatura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-has-asignatura-curso_has_asignatura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Curso'); ?>
		<?php echo $form->dropDownList($model,'curso_idcurso',$model->getCurso()); ?>
		<?php echo $form->error($model,'curso_idcurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Asignatura'); ?>
		<?php echo $form->dropDownList($model,'asignatura_idasignatura',$model->getAsignatura()); ?>
		<?php echo $form->error($model,'asignatura_idasignatura'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Asignar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->



<div class="container-fluid ">

    <h3 class="title text-info centered"> Cursos</h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Curso</th><th>Asignatura</th> </tr>
       
<?php foreach($items as $i=>$item): ?>

<tr>
    <td><?php echo CHtml::activeDropDownList($item,"[$i]curso_idcurso",$model->getCurso(),array('disabled'=>'disabled')); ?></td>
    <td ><?php echo CHtml::activeDropDownList($item,"[$i]asignatura_idasignatura",$model->getAsignatura()); ?></td>
    

</tr>

<?php endforeach; ?>

</table>
 
<?php echo CHtml::submitButton('Actualizar'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>