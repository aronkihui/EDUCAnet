
<div class="container-fluid">
<h1>Ingreso</h1>

<p>Por favor ingrese sus datos para ingresar al sistema</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos</p>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreusuario'); ?>
		<?php echo $form->textField($model,'nombreusuario'); ?>
		<?php echo $form->error($model,'nombreusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>
        
        <div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('iniciar sesion ',array("class"=> "btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>