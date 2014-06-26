

<html>

    <head>
    <h1 class="title well centered ">Subida de archivos </h1>

</head>
<body >

<div class="container-fluid well  panel panel-primary ">
    <div class="centered row-fluid">
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

<div class="form container-fluid box">

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
		<?php echo $form->dropDownList($model,'archivo_area',array('electricidad'=>'Electricidad',
                                                                           'estructuras metalicas'=>'Estructuras metalicas',
                                                                           'edificacion'=>'Edificacion',
                                                                           'instalaciones sanitarias'=>'Instalaciones sanitarias',
                                                                          'mecanica'=> 'Mecanica Automotriz',
                                                                           'matematicas'=>'Matematicas',
                                                                           'lenguaje'=>'Lenguaje',
                                                                           'historia'=>'Historia',
                                                                           'ingles'=>'Ingles',
                                                                           'biologia'=>'Biologia',
                                                                           'fisica'=>'Fisica',
                                                                           'quimica'=>'Quimica' ));?>
                <?php echo $form->error($model,'archivo_area'); ?>
        </div>
        
        
         <div class="row-fluid">
             
               
		<?php echo $form->labelEx($model,'archivo_cursonivel'); ?>
		 <?php echo $form->dropDownList($model,'archivo_cursonivel',array('primero'=>'Primero',
                                                                                  'segundo'=>'Segundo',
                                                                                  'tercero'=>'Tercero',
                                                                                  'cuarto'=>'Cuarto'));?>		
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
		<div class="hint">Por favor introduce las letras tal como 
                    <br/>se muestran en la imagen de arriba.
		<br/>Las letras no distinguen entre mayusculas o minusculas.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Subir archivo',array('class'=> 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

        
</div>   
 
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $mensaje) {
        echo '<div class="flash-' . $key . '">' . $mensaje . "</div>\n";
    }
    
  ?>   


<?php endif; ?>
</div>

</div>
    </body>
    </html>