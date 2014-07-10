


<div class="container-fluid well-small well">
    <h2 class="title centered"><?php echo'Formulario Creacion Curso'?></h2>
    
    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
    
    <h4 class="note centered ">Campos con <span class="required">*</span> son requeridos</h4>
</div>

<div class="tabbable table-bordered well">



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-crear_curso-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
	
)); ?>

    
    
	<p class="note">Campos con  <span class="required">*</span> son requeridos</p>

	

          <div class=" left span3 tabbable table-bordered">
	<div class="row">
		<?php echo $form->labelEx($model,'nombrecurso'); ?>
		<?php echo $form->textField($model,'nombrecurso'); ?>
		<?php echo $form->error($model,'nombrecurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
		<?php echo $form->error($model,'año'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel'); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad'); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matricula_idmatricula'); ?>
		<?php echo $form->textField($model,'matricula_idmatricula'); ?>
		<?php echo $form->error($model,'matricula_idmatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesor_idprofesor'); ?>
		<?php echo $form->textField($model,'profesor_idprofesor'); ?>
		<?php echo $form->error($model,'profesor_idprofesor'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

          </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

</div>