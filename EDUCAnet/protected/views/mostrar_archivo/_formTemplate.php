

<div>
<li class="span3">
    <a href="<?php echo Yii::app()->getBaseUrl() .'/'.$data['archivo_path']?>" class="thumbnail"
       rel="tooltip"
       data-title="<?php echo $data['archivo_nombre']?>">
        <img src='<?php echo Yii::app()->getBaseUrl() .'/'.$data['archivo_path']   ?>'>
        <p><?php echo $data['archivo_descripcion']?></p> 
        <a class="btn-inverse" href="<?php echo $this->createUrl('mostrar_archivo/descargar',array('file'=>$data['archivo_path'])) ;?>">Descargar</a>
        
    </a>
</li>
</div>

