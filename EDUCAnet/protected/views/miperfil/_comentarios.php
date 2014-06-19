<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<script>
function comentariosRealizados() {
    

      document.getElementById('contenedor1').hidden = false;          
   document.getElementById("contenedor").innerHTML="comentarios realizados";
}

function comentariosRecibidos()
{
    document.getElementById('contenedor2').hidden = false;          
   
    document.getElementById("contenedor").innerHTML="comentarios recibidos";
}
</script>


<h3 class="centered">Todos mis Comentarios</h3>

<div class="container-fluid">  
<div class="row-fluid"> 
   
    
    <ul class="thumbnails">
    <li class="span6">
    <div class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
    <h5 class="centered">Comentarios realizados</h5>
    
    <div class="centered" > <button  class="btn-large"  onclick="comentariosRealizados()">Comentarios realizados</button> </div>
    
    </div>
    </li>
    
    <li class="span6">
    <div class="thumbnail">
    <img src="http://placehold.it/260x180" alt="">
    <h5 class="centered">Comentarios recibidos</h5>
    
    <div  class="centered"> <button class="btn-large" onclick="comentariosRecibidos()">Comentarios recibidos</button></div>
    
    </div>
    </li>
    
    </ul>
   
   
    
</div> 
    
    


<div class="row-fluid">
  


    <div  id="contenedor1" hidden>
        
        <p>kledrlkjwelkr</p>
    </div>
    
    <div  id="contenedor2" hidden>
        
        <p>kledrlkjwelkr</p>
    </div>
</div>

    
</div> 

