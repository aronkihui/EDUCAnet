<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>




<h3 class="centered">Todos mis Comentarios</h3>

<div class="container-fluid">  
<div class="row-fluid"> 
   
    
    <ul class="thumbnails">
    <li class="span6">
    <div class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
    <h5 class="centered">Comentarios realizados</h5>
    
    <div class="centered" > <button type="button" value=" 2" onclick="javascript:contenido('1')" >Comentarios realizados</button> </div>
    
    </div>
    </li>
    
    <li class="span6">
    <div class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
    <h5 class="centered">Comentarios recibidos</h5>
    
    <div  class="centered"> <button type="button" value="1" onclick="javascript:contenido('2')" >Comentarios recibidos</button></div>
    
    </div>
    </li>
    
    </ul>
   
   
    
</div> 
    


   





<script type="text/javascript" language="javascript">
function contenido(id){
    if(id=="1"){
    $("#"+2).css({"display": "none"});
    $("#"+1).css({"display": "block"});
    }
    else
    {
        $("#"+1).css({"display": "none"});
    $("#"+2).css({"display": "block"});
    }

}
</script>

    
<div class="row-fluid">
  


    <div  id="contenedor" >
        
        <p>klwjer</p>
        <!--contendor para mostrar los los comentarios-->
        <div id="1" style="display:none"><?php $this->renderPartial('comentarios/comentarios_realizados',array('datos'=>$datos));?></div>
        <div id="2" style="display:none"><?php $this->renderPartial('comentarios/comentarios_recibidos',array('datos'=>$dato2)); ?></div>      
       
    </div>
    
    
</div>

    
</div> 

