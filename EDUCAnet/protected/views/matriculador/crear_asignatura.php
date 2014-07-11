<div class="container-fluid border well ">

    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
<!-- nuevo ingreso de bloque-->
<div class="container-fluid centered ">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'crear-asignaturas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

    <h3 class="title centered ">Crear nueva Asignatura </h3>
	<p class="note">Campos con <span class="required">*</span> son requeridos</p>


 
	<div class="row span3">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row span3">
		<?php echo $form->labelEx($model,'horas'); ?>
		<?php echo $form->textField($model,'horas'); ?>
		<?php echo $form->error($model,'horas'); ?>
	</div>

	


	<div class="row buttons">
		<?php echo CHtml::submitButton('agregar nuevo asignatura'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


</div>






<div class="container-fluid ">

    <h3 class="title text-info centered"> Asignaturas Creadas </h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>id asignatura</th><th>nombre</th><th>horas totales</th><th>fecha creacion</th></tr>
<?php foreach($items as $i=>$item): ?>
<tr>
    
    
    <td><?php echo CHtml::activeTextField($item,"[$i]idasignatura",array('disabled'=>'disabled')); ?></td>
    <td ><?php echo CHtml::activeTextField($item,"[$i]nombre"); ?></td>
    <td><?php echo CHtml::activeTextField($item,"[$i]horas"); ?></td>
     <td><?php echo CHtml::activeTextField($item,"[$i]fecha_creacion",array('disabled'=>'disabled')); ?></td>

</tr>
<?php endforeach; ?>

</table>
 
<?php echo CHtml::submitButton('Actualizar'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->






</div>
</div>

