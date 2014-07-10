


<html>
</head>

<h3 class="title container-fluid  well well-large"> Portal Administracion matriculas, usuario , profesores, horarios, asignaturas y cursos</h3>
</head>
<body>
    
    <div class="container-fluid well">
        
        
        <div class="menulateral span2 well">
            
            <ul class="nav nav-pills nav-stacked">
      
     <li class="active"> 
<?php echo CHtml::ajaxLink(
    'Matricula alumno nuevo',          // the link body (it will NOT be HTML-encoded.)
    array('matriculador/mostrar_alumnos_nuevos'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
      
     <li class="active"> 
<?php echo CHtml::ajaxLink(
    'Matricula alumno antiguo',          // the link body (it will NOT be HTML-encoded.)
    array('matriculador/mostrar_alumnos_antiguos'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li> 
      
      
      
       <li class="active"> 
<?php echo CHtml::ajaxLink(
    'Administracion cursos',          // the link body (it will NOT be HTML-encoded.)
    array('matriculador/admin_cursos'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
       
       <li class="active">
      
      <?php echo CHtml::ajaxLink(
    'Administracion Asignaturas',          // the link body (it will NOT be HTML-encoded.)
    array('matriculador/admin_asignaturas'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
 
        <li class="active">
      
      <?php echo CHtml::ajaxLink(
    'Administracion Profesores',          // the link body (it will NOT be HTML-encoded.)
    array('matriculador/admin_profesores'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
 
      
      
    </ul>
  
   
    </div>

            
            
          <!-- cargo todo el contenido dentro -->  
     <div class="span20">
      <div id="res" class="container-fluid well  panel panel-primary" >
            
           
         </div>
     </div>
        
    </div>
    
   
    
    
</body>
    
    
</html>

