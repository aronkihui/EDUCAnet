
<div>
<div class="form ">

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
      

	<div class="row buttons">
		<?php echo CHtml::submitButton('BUSCAR',array('class'=> 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

        
</div>   




    
    <div class=" row-fluid ">
         <p>tabla con resultados</p>
         <table class="table table-condensed ">
             <thead >
             <th class="alert alert-info">NOMBRE ARCHIVO</th>
             <th class="alert alert-info">AREA ARCHIVO</th>
             <th class="alert alert-info"> FECHA CREACION</th>
             <th class="alert alert-info">DESCRIPCION</th>
             <th class="alert alert-info">DESCARGAR</th>
             
         </thead>
        <?php foreach($respuesta->data as $dat)
      
        {//principio del for?>
             <tr>
             <td><?php echo $dat['archivo_nombre'];?></td> 
         <td><?php echo $dat['archivo_area'];?></td> 
         <td><?php echo $dat['archivo_fecha'];?></td> 
         <td><?php echo $dat['archivo_descripcion'];?></td> 
         <td><a class="btn-success badge" href="<?php echo $this->createUrl('mostrar_archivo/descargar',array('file'=>$dat['archivo_path'])) ;?>">Descargar</a></td>
         
            </tr>
        <?php } //fin del foreach ?>
         </table>
        
    </div>
    
    
    
</div>
    


