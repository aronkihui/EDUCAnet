
<h3 class="title">Comentarios  Realizados</h3>

 <div class="container-fluid well  panel panel-primary" >

    
    
    <ul class="media-list">
      
         
      
        <?php  foreach ($datos->data AS $datos)
        {?>
       
        <div class="well well-sm span8"> 
      <li class="media">
        <a class="pull-left" href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
        </a>
        <div class="media-body">
          <h5 class="media-heading">Nombre archivo:

               <?php echo CHtml::link($datos['archivo_nombre'],array('mostrar_archivo/allcomentarios',
                                         'id'=>$datos['archivo_idarchivo'],
                                         'archivo'=>$datos['archivo_path'],
                                         'nombre'=>$datos['archivo_nombre'],
                                         )); ?>
               </h5>

 
           
          <p> Contenido del comentario:  <?php echo($datos['comentario_contenido'])?></p>
          
        </div>
          
          <div class="media-body">
    <h10 class="media-heading">comentado el: <?php echo($datos['comentario_fecha'])?></h10>
</div>
          
      </li>
      
      
      </div>
      <?php }?>
        
     
    </ul>
    </div>