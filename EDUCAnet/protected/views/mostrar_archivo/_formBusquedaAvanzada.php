<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

?>








<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'busqueda-avanzada',        
	'enableClientValidation'=>false,  
        'enableAjaxValidation' => false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//FORMULARIO  BUSQUEDA AVANZADA ARCHIVO
)); ?>

	<p class="note">Campos con  <span class="required">*</span> son obligatorios.</p>

	<?php  echo $form->errorSummary($model); ?>

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
      

	<div class="row buttons">
		<?php echo CHtml::submitButton('BUSCAR',array('class'=> 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

        
</div>   



<div>
    <?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $respuesta,
    'columns' => array('archivo_nombre', 'archivo_area','archivo_fecha'),
));
    ?>
</div>
    


