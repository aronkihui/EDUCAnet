<div class="container-fluid border well ">

    <a class=" btn-large  btn-inverse btn " href="<?php echo $this->createUrl('matriculador/matriculador');?>">volver</a>
<!-- nuevo ingreso de bloque-->
<div class="container-fluid centered ">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloques-crear_bloque1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

    <h3 class="title centered ">Crear nuevo bloque</h3>
	<p class="note">Campos con <span class="required">*</span> son requeridos</p>


 
	<div class="row span3">
		<?php echo $form->labelEx($model,'hora_inicio'); ?>
		<?php echo $form->textField($model,'hora_inicio'); ?>
		<?php echo $form->error($model,'hora_inicio'); ?>
	</div>

	<div class="row span3">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	


	<div class="row buttons">
		<?php echo CHtml::submitButton('agregar nuevo bloque'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


</div>







<div class="container-fluid ">

    <h3 class="title text-info centered"> Bloques creados </h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Numero bloque</th><th>hora  inicio</th><th>hora fin</th><th>fecha creacion</th></tr>
<?php foreach($items as $i=>$item): ?>
<tr>
    
    
    <td><?php echo CHtml::activeTextField($item,"[$i]idbloques",array('disabled'=>'disabled')); ?></td>
    <td ><?php echo CHtml::activeTextField($item,"[$i]hora_inicio"); ?></td>
    <td><?php echo CHtml::activeTextField($item,"[$i]hora_fin"); ?></td>
     <td><?php echo CHtml::activeTextField($item,"[$i]fecha_creacion",array('disabled'=>'disabled')); ?></td>

</tr>
<?php endforeach; ?>

</table>
 
<?php echo CHtml::submitButton('Actualizar'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>
</div>