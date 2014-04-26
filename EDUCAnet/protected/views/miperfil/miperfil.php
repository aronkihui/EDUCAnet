


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Hola, usuario x!',
)); ?>
 
    <p>Aqui podras ver todos tus datos como usuario del sistema, incluyendo tus descargas,<br>
        tus archivos subidos, entre otros.
   </p>
   
 
<?php $this->endWidget(); ?>
    
    


<li  class="span3">
    
    <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Cambiar password</h4>
</div>
 
<div class="modal-body">
    <p>aqui va lo que se cambiara </p>
</div>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Guardar Cambios',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Cancelar',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click ',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>
    
</li>

<li class="span3">
    
   <p> lkj,nlsijdhfñoiashdfijhweriohuwerufbweruiohfior
        kdhjfoweijrofweijofwiejroijwefoijwoeijwioejowei
        woejoweijroiwjeriojweorijwioerjowiejrowijerjilj</p>   
   <p> lkj,nlsijdhfñoiashdfijhweriohuwerufbweruiohfior
        kdhjfoweijrofweijofwiejroijwefoijwoeijwioejowei
        woejoweijroiwjeriojweorijwioerjowiejrowijerjilj
   
   </p>   
</li>