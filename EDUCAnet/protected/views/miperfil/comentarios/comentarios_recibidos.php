
<h3 class="title">Comentarios Recibidos  </h3>



    
     
     
     

 <?php  foreach ($datos->data AS $datos)
        {?>

   <ul class="media-list">
      
        
      
       
       
        <div class="well well-sm span8"> 
            
      <li class="media">
        <a class="pull-left" href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
        </a>
        <div class="media-body">
          <h4 class="media-heading"> </h4>
          
          
     
          <p>nombre del archivo :
              <?php echo CHtml::link($datos['archivo_nombre'],array('miperfil/comentarios_totales',
                                         'id'=>$datos['idarchivo'],
                                         'nombre'=>$datos['archivo_nombre']
                                         )); ?>
              
              <br/>
              
              <br/>
              <p> Fecha archivo :<?php echo $datos['archivo_fecha'];?></p>
              
              <br/>
              <p>Descripcion del archivo: <?php echo $datos['archivo_descripcion'];?></p>
              <br/>
              <p>Area del archivo: <?php echo $datos['archivo_area'];?></p>
              <br/>
              <p> Nivel del curso del archivo: <?php echo $datos['archivo_cursonivel'];?></p>
              <br/>
      
 
 <div >
     <table class='table-bordered '>
     <tr id='<?php echo $datos['idarchivo']?>'>   
     
     
       </tr>  
     </table>
      
      
 
 </div>
            
          </p>
        
  </div>
          
          <div class="media-body">
   
              
              
            </div>
          
      </li>
      
     
      </div>
 
     
    </ul>
        
 <?php }?>
        
