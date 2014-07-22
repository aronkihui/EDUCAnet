
<div class="container-fluid ">

    <h3 class="title text-info centered"> Mis asignaturas </h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th><th>Nivel</th> </tr>
       
<?php foreach($items as $i=>$item): ?>
<tr>
    <td> <?php echo $item['profesor_idprofesor'];?></td>
    <td><?php echo $item['asignatura_idasignatura']?></td>
    <td> <?php echo $item['año']?></td>
   
    
</tr>
<?php endforeach; ?>

</table>
 

<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>