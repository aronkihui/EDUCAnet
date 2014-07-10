<div class="container-fluid well-small well">
    <h2 class="title centered"><?php echo'Formulario Creacion Curso'?></h2>
    
    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
    
    <h4 class="note centered ">Campos con <span class="required">*</span> son requeridos</h4>
</div>

<div class="tabbable table-bordered well">




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-crear_profesor-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
)); ?>

	<p class="note">Campos con  <span class="required">*</span> son requeridos</p>

	

        
        
        <div class=" left span3 tabbable table-bordered">
	<div class="row">
		<?php echo $form->labelEx($model,'idprofesor'); ?>
		<?php echo $form->textField($model,'idprofesor'); ?>
		<?php echo $form->error($model,'idprofesor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido'); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_idusuario'); ?>
		<?php echo $form->textField($model,'usuario_idusuario'); ?>
		<?php echo $form->error($model,'usuario_idusuario'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
            
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->


</div>