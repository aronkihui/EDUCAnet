


<div class="container-fluid ">

    <h3 class="title text-info centered"> Mis colegas </h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Nombre Profesor</th><th>Telefono</th><th>Email</th></tr>
<?php foreach($items as $i=>$item): ?>
<tr>
    <td><?php echo CHtml::activeTextField($item,"[$i]nombre",array('disabled'=>'disabled')); echo CHtml::activeTextField($item,"[$i]apellido",array('disabled'=>'disabled'));?></td>
    <td><?php echo CHtml::activeTextField($item,"[$i]telefono",array('disabled'=>'disabled')); ?></td>
     <td><?php echo CHtml::activeTextField($item,"[$i]email",array('disabled'=>'disabled')); ?></td>

</tr>
<?php endforeach; ?>

</table>
 

<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>