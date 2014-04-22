

<div>
<li class="span3">
    <a href="<?php echo Yii::app()->getBaseUrl() .'/'.$data['archivo_path']?>" class="thumbnail"
       rel="tooltip"
       data-title="<?php echo $data['archivo_nombre']?>">
        <img src='<?php echo Yii::app()->getBaseUrl() .'/'.$data['archivo_path']   ?>'>
        <p><?php echo $data['archivo_descripcion']?></p> 
    </a>
</li>
</div>

