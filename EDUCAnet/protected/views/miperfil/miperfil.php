        <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Hola, usuario x!',
)); ?>
       
    <p>Aqui podras ver todos tus datos como usuario del sistema, incluyendo tus descargas,<br>
        tus archivos subidos, entre otros.
   </p>
   
 
<?php $this->endWidget(); ?>
    
</head>


<body>
    
   <div class="container-fluid">
  <div class="row-fluid">
    <div class="span2 ">
      <!—Sidebar content—>
      <ul class="nav nav-pills nav-stacked">
          
          <li class="active"><a href="<?php echo $this->createUrl('miperfil/misDatosPersonales');?>"><span class="badge pull-right">42</span> Mis datos  </a> </li>
      <li class=""><a href="<?php echo $this->createUrl('miperfil/misDescargas');?>"><span class="badge pull-right"></span> Mis Descargas </a> </li>
      <li class=""><a href="<?php echo $this->createUrl('miperfil/misSubidas');?>"><span class="badge pull-right"></span> Mis archivos </a> </li>
      <li class=""><a href="<?php echo $this->createUrl('miperfil/registroSesion');?>"><span class="badge pull-right"></span> Mis sesiones </a> </li>
      <li class=''><a href="<?php echo $this->createUrl('miperfil/comentarios');?>"><span class='badge pull-right'></span> Comentarios</a></li>
    
    </ul>
  
    </div>
    <div class="span10">
     
 
        <div class="container-fluid well  panel panel-primary" >
            
            <p>    
                
               
    <?php    
          
    switch (isset($respuesta))
    {
    case $respuesta=='misdatos':
    {
        $this->renderPartial('_misdatos');
            break;
    }
    case $respuesta=='missubidas':
    {
        
        $this->renderPartial('_missubidas',array('datos'=>$datos));
    break;
    }
    case $respuesta=='misdescargas':
    {
        $this->renderPartial('_misdescargas',array('datos'=>$datos));
        break;
    }
    
    case $respuesta=='registrosesion':
    {
        $this->renderPartial('_registrosesion',array('datos'=>$datos));
            break;
    }
    case $respuesta=='comentarios':
        $this->renderPartial('_comentarios');
    
    }


?>
           
            </p>
    </div>
  </div>
</div>
   </div>
</body>








  
    