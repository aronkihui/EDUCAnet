<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	 'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre curso'); ?>
		<?php echo $form->dropDownList($model,'nombrecurso', 
            range('a', 'z')); ?>
		<?php echo $form->error($model,'nombrecurso'); ?>
	</div>

	<div class="row">
          
		<?php echo $form->labelEx($model,'año'); ?>
              <?php  
              $años=array();
              for($i=1980;$i<2100;$i++)
            {
            $años[$i]=$i;              
            }  
        
            echo $form->dropDownList($model,'año',$años);
           
            ?>
		
		<?php echo $form->error($model,'año'); ?>
	</div>

	<div class="row">
            
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->dropDownList($model,'nivel', array('primero'=>'primero','segundo'=>'segundo','tercero'=>'tercero','cuarto'=>'cuarto')); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		 <?php echo $form->dropDownList($model,'especialidad', array('tecnico'=>'tecnico','humanista'=>'humanista')); ?>
		
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'cupos'); ?>
		<?php echo $form->textField($model,'cupos'); ?>
		<?php echo $form->error($model,'cupos'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear nuevo curso ' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->