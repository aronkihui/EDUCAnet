
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