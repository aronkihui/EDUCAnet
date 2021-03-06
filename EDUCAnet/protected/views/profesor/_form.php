<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut Profesor'); ?>
		<?php echo $form->textField($model,'idprofesor',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'idprofesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		 <?php

$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'model' => $model,
     'language' => 'es',
    
    'attribute'=>'fecha_nacimiento',
    'options'=>array(
        'dateFormat'=>'yy/mm/dd',
        'showAnim'=>'slideDown',
        'changeYear' => true,           // can change year
        'changeMonth' => true,  
        'yearRange' => '1909:2099',  
    ),  
    
));

?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Profesor' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->