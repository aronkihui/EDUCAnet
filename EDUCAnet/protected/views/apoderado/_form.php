
   
    
    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
    
    <h4 class="note centered ">Campos con <span class="required">*</span> son requeridos</h4>
</div>

<div class="tabbable table-bordered well">


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apoderado-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
)); ?>
 

	<?php echo $form->errorSummary($model); ?>
     
         
        <div class="container-fluid  centered well">
       
             
        
	<div class="row" >
		<?php echo $form->labelEx($model,'rut apoderado'); ?>
		<?php echo $form->textField($model,'idapoderado',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'idapoderado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	
                   
                   
                   
                   
                   

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Apoderado' : 'Save'); ?>
	</div>
                   
           
        </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

</div>