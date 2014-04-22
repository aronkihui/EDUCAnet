    

<table border="1">
   <?php foreach($model as $registro):?>
   <tr>
        <td><?php echo $registro->idarchivo;?></td>
      <td><?php echo $registro->archivo_nombre;?></td>
      <td><?php echo $registro->archivo_path;?></td>
      <td><?php echo $registro->archivo_fecha;?></td>
     
   </tr>
   
   
    
   <?php endforeach;?>
</table>


                             


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'store-form',
'enableAjaxValidation'=>false,
    
));

//$dataProvider = new CActiveDataProvider('Archivo'); // that's the table
//$dataProvider=$models;//pasado como argumento en el controlador
$dataProvider=$models;

$this->widget('bootstrap.widgets.TbThumbnails', array(
'dataProvider'=>$dataProvider,//viene desde el controlador
'template'=>"{items}\n{pager}",
'itemView'=>'_formTemplate',
   
));

?>

<?php $this->endWidget(); ?>

    
    

