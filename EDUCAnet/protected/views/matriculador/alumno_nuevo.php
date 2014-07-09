
<div class="container-fluid">
<h2><?php echo'ingreso nueva matricula '?></h2>
</div>

<div class="container-fluid">


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apoderado-apoderado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreApoderado'); ?>
		<?php echo $form->textField($model,'nombreApoderado'); ?>
		<?php echo $form->error($model,'nombreusuarioApoderado'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'passwordApoderado'); ?>
		<?php echo $form->textField($model,'passwordApoderado'); ?>
		<?php echo $form->error($model,'passwordApoderado'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'nombreusuarioAlumno'); ?>
		<?php echo $form->textField($model,'nombreusuarioAlumno'); ?>
		<?php echo $form->error($model,'nombreusuarioAlumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwordAlumno'); ?>
		<?php echo $form->textField($model,'passwordAlumno'); ?>
		<?php echo $form->error($model,'passwordAlumno'); ?>
	</div>

	


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


</div>