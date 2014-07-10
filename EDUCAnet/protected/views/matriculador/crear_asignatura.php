
<div class="container-fluid well-small well">
    <h2 class="title centered"><?php echo'Formulario Creacion Asigntura'?></h2>
    
    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
    
    <h4 class="note centered ">Campos con <span class="required">*</span> son requeridos</h4>
</div>

<div class="tabbable table-bordered well">


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignatura-crear_asignatura-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
)); ?>

	<p class="note">Campos con  <span class="required">*</span> son requeridos</p>

	

          <div class=" left span3 tabbable table-bordered">
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horas'); ?>
		<?php echo $form->textField($model,'horas'); ?>
		<?php echo $form->error($model,'horas'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

          </div>
<?php $this->endWidget(); ?>
              
              

</div><!-- form -->