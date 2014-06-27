
<html>
    <head>
        

        
    </head>
    
    <body>
    
        
    
 <div class="container-fluid span11 centered   well  panel panel-primary">

        
    
     
      <!--panel para los comentarios-->

  
      <div class="container-fluid">
<!--<div class="panel panel-info">...</div>-->

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Comentarios recibidos del archivo </h3>
  </div>
  <div class="panel-body">
      <h3>Llamado : <?php echo $nombreArchivo?></h3>
  </div>
</div>
      </div>
 </div>
      
      
        <div class="container-fluid span11 centered row  well  panel panel-success ">
      <ul class="media-list">
      
          <?php foreach($datos->data as $datos){?>
        <div class="well well-sm span8"> 
      <li class="media">
        <a class="pull-left" href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
        </a>
        <div class="media-body">
          <h4 class="media-heading">usuario <?php echo $datos['nombreusuario']?> </h4>
           
          <p> contenido del comentario: 
              <?php echo $datos['comentario_contenido']?>
        </p>
          
        </div>
          
          <div class="media-body">
            <h10 class="media-heading">comentado el: <?php echo $datos['comentario_fecha']?> </h10>
        </div>
          
      </li>
       </div>
          
          <?php }?>
     
        
     
    </ul>

           
</div>


       
  
</body>
</html>
