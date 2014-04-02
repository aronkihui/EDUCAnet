 <?php

/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . 'Subir archivos a la biblioteca';
$this->breadcrumbs=array(
	'Subir archivos ',
);
?>

<h1>Subida de archivos </h1>

<?php if(Yii::app()->user->hasFlash('subir_archivo')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('subir_archivo'); ?>
</div>

<?php else: ?>

<p>
Aqui podra subir su archivo a compartir 
teniendo en cuenta que tiene que llenar completamente 
ell formulario de registro del archivo .
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subir-archivo',        
	'enableClientValidation'=>false,  
        'enableAjaxValidation' => false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//FORMULARIO ARCHIVO
)); ?>

	<p class="note">Campos con  <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'archivo_nombre'); ?>
		<?php echo $form->textField($model,'archivo_nombre'); ?>
		<?php echo $form->error($model,'archivo_nombre'); ?>
	</div>
	
        
        <div class="row-fluid">
		<?php echo $form->labelEx($model,'archivo_area'); ?>
		<?php echo $form->textField($model,'archivo_area'); ?>
		<?php echo $form->error($model,'archivo_area'); ?>
        </div>
        
        
         <div class="row-fluid">
		<?php echo $form->labelEx($model,'archivo_cursonivel'); ?>
		<?php echo $form->textField($model,'archivo_cursonivel'); ?>
		<?php echo $form->error($model,'archivo_cursonivel'); ?>
         </div>
       

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'archivo_descripcion'); ?>
		<?php echo $form->textArea($model,'archivo_descripcion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'archivo_descripcion'); ?>
	</div>
        
        
        
        <div>
                <?php echo $form->labelEx($model,'archivo'); ?>
               <?php echo $form->fileField($model,'archivo'); ?>
                <?php echo $form->error($model,'archivo'); ?>
        </div>

        
     
        
        <div>
            <?php
	//date_default_timezone_set('UTC');       
        echo date("d-m-Y H:i:s");
        ?>
            
        </div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Por favor introduce las letras tal como se muestran en la imagen de arriba.
		<br/>Las letras no distinguen entre mayusculas o minusculas.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Subir archivo',array('class'=> 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

        
</div>   
        
      

<?php endif; ?>