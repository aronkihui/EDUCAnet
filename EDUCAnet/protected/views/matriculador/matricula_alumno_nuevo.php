
<div class="container-fluid well-small well">
    <h2 class="title centered"><?php echo'Formulario  matricula alumno nuevo'?></h2>
    
    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
    
    <h4 class="note centered ">Campos con <span class="required">*</span> son requeridos</h4>
</div>

<div class="tabbable table-bordered well">


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Matricula_alumno_nuevo-form',
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,)
	
)); ?>

	

	
        <div class=" left span3 tabbable table-bordered">
        
	<div class="row">
		<?php echo $form->labelEx($model,'nombreApoderado'); ?>
		<?php echo $form->textField($model,'nombreApoderado'); ?>
		<?php echo $form->error($model,'nombreApoderado'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'apellidoApoderado'); ?>
		<?php echo $form->textField($model,'apellidoApoderado'); ?>
		<?php echo $form->error($model,'apellidoApoderado'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'telefonoApoderado'); ?>
		<?php echo $form->textField($model,'telefonoApoderado'); ?>
		<?php echo $form->error($model,'telefonoApoderado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccionApoderado'); ?>
		<?php echo $form->textField($model,'direccionApoderado'); ?>
		<?php echo $form->error($model,'direccionApoderado'); ?>
	</div>
                        
        <div class="row">
		<?php echo $form->labelEx($model,'rutApoderado'); ?>
		<?php echo $form->textField($model,'rutApoderado'); ?>
		<?php echo $form->error($model,'rutApoderado'); ?>
	</div>
               
        <div class="row">
		<?php echo $form->labelEx($model,'fecha_creacionApoderado'); ?>
		<?php echo $form->textField($model,'fecha_creacionApoderado'); ?>
		<?php echo $form->error($model,'fecha_creacionApoderado'); ?>
	</div>

	
</div>
        
        
        
        
       <!-- parte formulario para alumno--> 
       
       <div class=" right span3  offset1 tabbable table-bordered" >
        
	<div class="row">
		<?php echo $form->labelEx($model,'nombreAlumno'); ?>
		<?php echo $form->textField($model,'nombreAlumno'); ?>
		<?php echo $form->error($model,'nombreAlumno'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'apellidoAlumno'); ?>
		<?php echo $form->textField($model,'apellidoAlumno'); ?>
		<?php echo $form->error($model,'apellidoAlumno'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'direccionAlumno'); ?>
		<?php echo $form->textField($model,'direccionAlumno'); ?>
		<?php echo $form->error($model,'direccionAlumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoAlumno'); ?>
		<?php echo $form->textField($model,'telefonoAlumno'); ?>
		<?php echo $form->error($model,'telefonoAlumno'); ?>
	</div>
                        
        <div class="row">
		<?php echo $form->labelEx($model,'emailAlumno'); ?>
		<?php echo $form->textField($model,'emailAlumno'); ?>
		<?php echo $form->error($model,'emailAlumno'); ?>
	</div>
               
        <div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimientoAlumno'); ?>
		<?php echo $form->textField($model,'fecha_nacimientoAlumno'); ?>
		<?php echo $form->error($model,'fecha_nacimientoAlumno'); ?>
	</div>

           <div class="row">
		<?php echo $form->labelEx($model,'rutAlumno'); ?>
		<?php echo $form->textField($model,'rutAlumno'); ?>
		<?php echo $form->error($model,'rutAlumno'); ?>
	</div>
           
           <div class="row">
		<?php echo $form->labelEx($model,'fecha_creacionAlumno'); ?>
		<?php echo $form->textField($model,'fecha_creacionAlumno'); ?>
		<?php echo $form->error($model,'fecha_creacionAlumno'); ?>
	</div>
	
</div>
       
       
       
       
          <!-- parte formulario matricula--> 
    
       
       <div class=" right span3  offset1 tabbable table-bordered" >
        
	<div class="row">
		<?php echo $form->labelEx($model,'apoderado_idapoderado'); ?>
		<?php echo $form->textField($model,'apoderado_idapoderado'); ?>
		<?php echo $form->error($model,'apoderado_idapoderado'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'alumno_idalumno'); ?>
		<?php echo $form->textField($model,'alumno_idalumno'); ?>
		<?php echo $form->error($model,'alumno_idalumno'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoMatricula'); ?>
		<?php echo $form->textField($model,'estadoMatricula'); ?>
		<?php echo $form->error($model,'estadoMatricula'); ?>
	</div>
                        
        <div class="row">
		<?php echo $form->labelEx($model,'matriculador_idmatriculador'); ?>
		<?php echo $form->textField($model,'matriculador_idmatriculador'); ?>
		<?php echo $form->error($model,'matriculador_idmatriculador'); ?>
	</div>
               
      
       

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


</div>