

<div class="container-fluid ">

    <h3 class="title text-info centered"> Mis alumno </h3>
<div class="form">
<?php echo CHtml::beginForm(); ?>
    <table class="table tabbable table-bordered">
        <tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th><th>Nivel</th> </tr>
       
<?php foreach($items as $i=>$item): ?>
<tr>
    <td> <?php echo $item['nombre']; echo $item['apellido']?></td>
    <td><?php echo $item['apellido']?></td>
    <td> <?php echo $item['telefono']?></td>
    <td> <?php echo $item['email']?></td>   
     <td> <?php echo $item['nivel']; echo $item['nombrecurso']?></td>
    
</tr>
<?php endforeach; ?>

</table>
 

<?php echo CHtml::endForm(); ?>
</div><!-- form -->


</div>