

<div>
<li class="span3">
    <a href="<?php echo Yii::app()->getBaseUrl() .'/'.$data['archivo_path']?>" class="thumbnail"
       rel="tooltip"
       data-title="<?php echo $data['archivo_nombre']?>">
        <img src='<?php echo Yii::app()->getBaseUrl() .'/'.$data['archivo_path']   ?>'></img>
        <p><?php echo $data['archivo_descripcion']?></p> 
        <a class="btn-inverse" href="<?php echo $this->createUrl('mostrar_archivo/descargar',array('file'=>$data['archivo_path'])) ;?>">Descargar</a>
       
        <a class="btn-inverse" href="<?php echo $this->createUrl('mostrar_archivo/allcomentarios',array('id'=>$data['idarchivo']));?>">Ver Mas</a>
        
   
       
    </a>
</li>
</div>




<!-- esto es un modal de prueba
 <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">comentar</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <p>hola este es un modal </p>
    </div>
  </div>
</div>
-->

