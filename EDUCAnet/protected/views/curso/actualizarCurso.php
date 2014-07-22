
<div class="container-fluid ">

    <h3 class="title text-info centered"> Asignacion de profesores a curso</h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Curso</th><th>Año</th><th>Nivel</th><th>Especialidad</th><th>Fecha Creacion</th><th>Cupos</th><th>Profesor</th> </tr>
<?php foreach($items as $i=>$item): ?>
<tr>
    
    
    <td><?php echo CHtml::activeTextField($item,"[$i]nombrecurso",array('disabled'=>'disabled')); ?></td>
     <td><?php echo CHtml::activeTextField($item,"[$i]año",array('disabled'=>'disabled')); ?></td>
      <td><?php echo CHtml::activeTextField($item,"[$i]nivel",array('disabled'=>'disabled')); ?></td>
       <td><?php echo CHtml::activeTextField($item,"[$i]especialidad",array('disabled'=>'disabled')); ?></td>
        <td><?php echo CHtml::activeTextField($item,"[$i]fecha_creacion",array('disabled'=>'disabled')); ?></td>
         <td><?php echo CHtml::activeTextField($item,"[$i]cupos",array('disabled'=>'disabled')); ?></td>
          <td ><?php echo CHtml::activeDropDownList($item,"[$i]profesor_idprofesor",$model->getProfesor(), array('empty' => 'Seleccione profesor')); ?></td>
    
</tr>
<?php endforeach; ?>

</table>
 
<?php echo CHtml::submitButton('Actualizar'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>