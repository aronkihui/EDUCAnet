<html>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Biblioteca Virtual',
    'brandUrl'=>Yii::app()->baseUrl.'/portalbiblioteca/portalbiblioteca',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Archivos', 'url'=> '' ),
                array('label'=>'Buscar por Categoria', 'url'=>'#', 
                        
                                    'items'=>array( 
                                      array('label'=>'Mecanica','url'=>'#', 'items'=>array( 
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'mecanica primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'mecanica segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'mecanica tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'mecanica cuarto'))
                                                                                     )),
                                                                                    '---',  
                                      array('label'=>'Electricidad', 'url'=>'#', 'items'=>array( 
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'electricidad primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'electricidad segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'electricidad tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'electricidad cuarto'))
                                                                                     )),
                                      '---',  
                                      array('label'=>'Estructuras Metalicas', 'url'=>'#', 'items'=>array( 
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'estructuras metalicas primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'estructuras metalicas segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'estructuras metalicas tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'estructuras metalicas cuarto'))
                                                                                     )),
                                      '---',  
                                      array('label'=>'Instalaciones Sanitarias', 'url'=>'#', 'items'=>array( 
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'instalaciones_sanitarias primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'instalaciones_sanitarias segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'instalaciones_sanitarias tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'instalaciones_sanitarias cuarto'))
                                                                                     )),
                                    '---',
                                      array('label'=>'Bibliografia General', 'url'=>array('mostrar_archivo/view_general','view'=>'biblioGeneral'))
                                                                                                                                                        
                                      )
                    ),
                array('label'=>'Busqueda Avanzada', 'url'=>array('mostrar_archivo/view_avanzada'))
                
                     ),
        ),
        '<form class="navbar-search pull-right" action="">  <input type="text" class="search-query span2" placeholder="Buscar"></form>',
        
    ),
)); ?>                        

  <head>  

    <h2 class='title well centered '>Archivos recientes  </h2>

</head>

<body>
    
    <div class="container-fluid well  panel panel-primary">




        <div class=" container-fluid well  panel panel-primary">



            <div class="container-fluid centered">
                
                
                <?php 
//llamo a formulario de busqueda avanzada
if(isset($respuesta))
{    
   $this->renderPartial('_formBusquedaAvanzada',array('respuesta'=>$respuesta,'model'=>$model));
}?>
                <?php

if(isset($models))
{
 $form=$this->beginWidget('CActiveForm', array(
'id'=>'store-form',
'enableAjaxValidation'=>false,
    
));
?>

                
                
<?php
 
$dataProvider=$models;

$this->widget('bootstrap.widgets.TbThumbnails', array(
'dataProvider'=>$dataProvider,//viene desde el controlador
'template'=>"{items}\n{pager}",
'itemView'=>'_formTemplate',
   
));


$this->endWidget(); 
}
?>


                </div>
    
</div>
</div>
</body>




<?php	
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
	    'name'=>'buscar',
	    'value'=>'',
            
	    'source'=>$this->createUrl('miperfil/autobusqueda'),
	    // additional javascript options for the autocomplete plugin
	    'options'=>array(
	            'showAnim'=>'fold',
	    ),
	));	

?>








</html>