<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<p>comentarios recibidos xD</p>



    
     
     
     

 <?php  foreach ($datos->data AS $datos)
        {?>

   <ul class="media-list">
      
        
      
       
       
        <div class="well well-sm span8"> 
            
      <li class="media">
        <a class="pull-left" href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
        </a>
        <div class="media-body">
          <h4 class="media-heading">usuario1 </h4>
          <p>
              <a  id="<?php echo $datos['idarchivo']?>" data-toggle="modal" data-target="#myModal" onclick='enviar(id)' > <?php echo $datos['archivo_nombre'];?></a>
              
              <br/>
              
              <br/>
              <?php echo $datos['archivo_fecha'];?>
              <br/>
              <?php echo $datos['archivo_path'];?>
              <br/>
              <?php echo $datos['archivo_descripcion'];?>
              <br/>
              <?php echo $datos['archivo_area'];?>
              <br/>
              <?php echo $datos['archivo_cursonivel'];?>
              <br/>
              <?php echo $datos['idarchivo'];?>
              
              
             
               <script>
                   
                   
    function nuevoAjax(){
    var xmlhttp=false;
    try {
    xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
    try {
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    } catch (E) {
    xmlhttp = false;
    }
    }

    if (!xmlhttp && typeof XMLHttpRequest!=='undefined') {
    xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
    } 
                   
                  function enviar(id)
                  {
                      ruta= '<?php echo Yii::app()->baseUrl.'/miperfil/comentarios_recibidos'?>';
                        id1='id='+id;
                       
                     url=ruta+"?"+id1;
                     
                      alert(url);
                      ajax=nuevoAjax();
                    ajax.open ("GET",url,true);
                    ajax.onreadystatechange=function() {
                    if (ajax.readyState === 4) {
                    contenedor.innerHTML = ajax.responseText;
                    }
                    }
                    ajax.send(null);
                        } 
                    
                  
               
            }
                
</script>
            
              

              
              
              
          </p>
          
          
                    
         
        </div>
          
          <div class="media-body">
   
              
              
</div>
          
      </li>
      
     
      </div>
     
       
       



     
    </ul>
        
 <?php }?>
        


          

          
  
    
    <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal'));     ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Comentarios recibidos del archivo </h4>
</div>
 
<div class="modal-body">
   
    
    <!-- aqui va los comentarios traidos por consultar el id del archivo-->
 <?php echo $this->actionRespuestaComentarios()  ?>
  
              
             
             
</div>
 
<div class="modal-footer">
     
    <p>footer para botones</p>
    
</div>
      <?php $this->endWidget(); ?>
   

        
          
          
          
        

 



     
     
  
    
    
  