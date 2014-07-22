<?php
/* @var $this ProfesorHasAsignaturaController */
/* @var $model ProfesorHasAsignatura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-has-asignatura-profesor_tiene_asignatura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Asignatura'); ?>
		<?php echo $form->dropDownList($model,'asignatura_idasignatura',$model->getAsignatura()); ?>
		<?php echo $form->error($model,'asignatura_idasignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Profesor'); ?>
		<?php echo $form->dropDownList($model,'profesor_idprofesor',$model->getProfesor()); ?>
		<?php echo $form->error($model,'profesor_idprofesor'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->







<div class="container-fluid ">

    <h3 class="title text-info centered"> Administracion asignaturas profesor</h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Profesor</th><th>Asignatura</th><th>año</th></tr>
<?php foreach($items as $i=>$item): ?>
<tr>
    
    <td><?php echo CHtml::activeDropDownList($item,"[$i]profesor_idprofesor",$model->getProfesor(),array('disabled'=>'disabled')); ?></td>
    <td><?php echo CHtml::activeDropDownList($item,"[$i]asignatura_idasignatura",$model->getAsignatura()); ?></td>
   <td><?php echo CHtml::activeTextField($item,"[$i]año",array('disabled'=>'disabled')); ?></td>
    
</tr>
<?php endforeach; ?>

</table>
 
<?php echo CHtml::submitButton('Actualizar'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>
</div>