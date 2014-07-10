<!-- nuevo ingreso de bloque-->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloques-crear_bloque1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_inicio'); ?>
		<?php echo $form->textField($model,'hora_inicio'); ?>
		<?php echo $form->error($model,'hora_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->










<div class="container-fluid table tabbable table-bordered">

<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Numero bloque</th><th>hora  inicio</th><th>hora fin</th><th>fecha creacion</th></tr>
<?php foreach($items as $i=>$item): ?>
<tr>
    
    <td><?php echo CHtml::activeTextField($item,"[$i]idbloques"); ?></td>
    <td ><?php echo CHtml::activeTextField($item,"[$i]hora_inicio"); ?></td>
    <td><?php echo CHtml::activeTextField($item,"[$i]hora_fin"); ?></td>
     <td><?php echo CHtml::activeTextField($item,"[$i]fecha_creacion"); ?></td>

</tr>
<?php endforeach; ?>

</table>
 
<?php echo CHtml::submitButton('Save'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>