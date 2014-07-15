<?php
/* @var $this BloquesAsignaturaCursoController */
/* @var $model BloquesAsignaturaCurso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloques-asignatura-curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'curso_idcurso'); ?>
		<?php echo $form->textField($model,'curso_idcurso'); ?>
		<?php echo $form->error($model,'curso_idcurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asignatura_idasignatura'); ?>
		<?php echo $form->textField($model,'asignatura_idasignatura'); ?>
		<?php echo $form->error($model,'asignatura_idasignatura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bloques_id_inicio'); ?>
		<?php echo $form->textField($model,'bloques_id_inicio'); ?>
		<?php echo $form->error($model,'bloques_id_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bloques_id_fin'); ?>
		<?php echo $form->textField($model,'bloques_id_fin'); ?>
		<?php echo $form->error($model,'bloques_id_fin'); ?>
           
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

        
        
       
<?php $this->endWidget(); ?>

</div><!-- form -->






<div class="container-fluid ">

    <h3 class="title text-info centered"> horario por curso </h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <thead>
            <tr>
                <th>Curso    <?php echo $form->dropDownList($model,'bloques_id_fin',$model->getCurso()); ?></tr></th>
            <tr>
        <th>BLOQUES</th>  <th>LUNES</th><th>MARTES</th><th>MIERCOLES</th><th>JUEVES</th><th>VIERNES</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($bloquesXcursos as $i=>$item): ?>
            
                <?php //echo CHtml::activeTextField($item,"[$i]dia"); ?>
        
        <div id="lunes" class="container-fluid">
                    <?php if($item['dia']==1) 
                    {
                        echo'<tr>lunes </tr>';?>
                 <tr> <?php echo 'curso '; echo $item['curso_idcurso'];?></tr>
            <tr> <?php echo'bloque inicio '; echo $item['bloques_id_inicio'];?></tr>
            <tr>  <?php echo'bloque_fin '; echo $item['bloques_id_fin']?></tr>
             <tr>  <?php echo 'id asignatura '; echo $item['asignatura_idasignatura']?></tr>
                    <?php   }?>    
                  
        </div>
          <div id="martes" class="container-fluid">
            <?php if($item['dia']==2)echo 'martes'; ?>
        </div>
          <div id="miercoles" class="container-fluid">
             <?php if($item['dia']==3) {
                        echo'<tr>miercoles </tr>';?>
                 <tr> <?php echo 'curso '; echo $item['curso_idcurso'];?></tr>
            <tr> <?php echo'bloque inicio '; echo $item['bloques_id_inicio'];?></tr>
            <tr>  <?php echo'bloque_fin '; echo $item['bloques_id_fin']?></tr>
             <tr>  <?php echo 'id asignatura '; echo $item['asignatura_idasignatura']?></tr>
                    <?php     }?>
        </div>
          <div id="jueves" class="container-fluid">
             <?php if($item['dia']==4) echo'jueves';?>
        </div>
          <div id="viernes" class="container-fluid">
             <?php if($item['dia']==5)  echo'viernes';?>
        </div>

<?php endforeach; ?>


        
        </tbody>
</table>
 
<?php echo CHtml::submitButton('Actualizar'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>
</div>