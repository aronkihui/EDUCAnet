

<head>
<h3 class="title centered wide well">Perfil de archivos</h3>
</head>

<body>

<div class=" container-fluid">
    
        
<div class="container-fluid well  panel panel-primary" >
    
    <!--contenedor para imagen y modal-->
<div class="container-fluid ">
    <h2 class="centered">Nombre del archivo <?php echo ($nombre)?></h2>
<!--cargar imagen del archivo en miniatura-->
<div class="span4  centered">
     <a href="<?php echo Yii:: app() ->baseUrl.'/miperfil/miperfil';?>" class="thumbnail" rel="#"  data-title="Tooltip">
        <img src="<?php echo (Yii::app()->baseUrl); echo'/';echo ($archivo)?>" alt="">
       
    </a>





<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Comentar</h4>
</div>
 
<div class="modal-body">
   
    <p>Escribe tu comentario aqui</p>
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario',        
	'enableClientValidation'=>false,  
        'enableAjaxValidation' => false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//FORMULARIO  BUSQUEDA AVANZADA ARCHIVO
)); ?>
    
    <?php  echo $form->errorSummary($model); ?>
                <?php echo $form->labelEx($model,'comentario_contenido'); ?>
    
		<?php echo $form->textArea($model,'comentario_contenido'); ?>
		<?php echo $form->error($model,'comentario_contenido'); ?> 
    
</div>
 
<div class="modal-footer">
     <?php echo CHtml::submitButton('Publicar',array('class'=> 'btn btn-primary')); ?>
    <?php $this->endWidget(); ?>
    
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Cancelar',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    
    
</div>
 
<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Comentar',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>
</div>
    
 </div>   
    
</div>
    
   <!-- este contenedor div es para mostrar los comentarios--> 
    <div class="container-fluid well  panel panel-primary" >

    
    
    <ul class="media-list">
      
        
        <?php 
        
        foreach ($datos->data AS $datos)
        {
        
        ?>
        
       
        <div class="well well-sm span8"> 
      <li class="media">
        <a class="pull-left" href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
        </a>
        <div class="media-body">
          <h4 class="media-heading">usuario: <?php echo($datos['nombreusuario'])?> </h4>
          <p><?php echo($datos['comentario_contenido'])?></p>
         
        </div>
          
          <div class="media-body">
    <h10 class="media-heading">comentado el <?php echo ($datos['comentario_fecha'])?></h10>
</div>
      </li>
      </div>
        <?php }?>
        
     
    </ul>
    </div>
</body> 