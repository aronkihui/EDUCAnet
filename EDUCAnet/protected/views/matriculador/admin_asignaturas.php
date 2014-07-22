<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>



<div class="container-fluid well">
<p>administracion de cursos</p>

<a class="btn  alert-info" href="<?php echo $this->createUrl('matriculador/crear_asignatura');?>">crear asignatura</a>

<a class="btn  alert-info" href="<?php echo $this->createUrl('matriculador/crear_bloque');?>">crear bloque</a>

<a class="btn  alert-info" href="<?php echo $this->createUrl('matriculador/profesor_tiene_asignatura');?>">administrar asignaturas profesor</a>


<div class="container-fluid">
    
    <p>aqui mostrara todo las asignaturas existententes y los profesores y cursos que la toman</p>
    
    </div>



<!-- model -->

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>
 
<div class="modal-body">
   
   
    
</div>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>




</div

