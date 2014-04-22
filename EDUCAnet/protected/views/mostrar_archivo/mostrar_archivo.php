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
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'Electricidad primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'Electricidad segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'Electricidad tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'Electricidad cuarto'))
                                                                                     )),
                                      '---',  
                                      array('label'=>'Estructuras Metalicas', 'url'=>'#', 'items'=>array( 
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'Estructuras Metalicas primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'Estructuras Metalicas segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'Estructuras Metalicas tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'Estructuras Metalicas cuarto'))
                                                                                     )),
                                      '---',  
                                      array('label'=>'Instalaciones Sanitarias', 'url'=>'#', 'items'=>array( 
                                                                                     array('label'=>'Primero','url'=>array('mostrar_archivo/view','view'=>'Instalaciones Sanitarias primero')),
                                                                                     array('label'=>'Segundo','url'=>array('mostrar_archivo/view','view'=>'Instalaciones Sanitarias segundo')),
                                                                                     array('label'=>'Tercero','url'=>array('mostrar_archivo/view','view'=>'Instalaciones Sanitarias tercero')),
                                                                                     array('label'=>'Cuarto','url'=>array('mostrar_archivo/view','view'=>'Instalaciones Sanitarias cuarto'))
                                                                                     )),
                                    '---',
                                      array('label'=>'Bibliografia General', 'url'=>'#')
                                                                                                                                                        
                                      )
                    ),
                array('label'=>'Busqueda Avanzada', 'url'=> '')
                     ),
        ),
        '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Buscar"></form>',
        
    ),
)); ?>                        


<div>
    <h2>Archivos recientes  </h2>
</div>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'store-form',
'enableAjaxValidation'=>false,
    
));

//$dataProvider = new CActiveDataProvider('Archivo'); // that's the table
//$dataProvider=$models;//pasado como argumento en el controlador
$dataProvider=$models;

$this->widget('bootstrap.widgets.TbThumbnails', array(
'dataProvider'=>$dataProvider,//viene desde el controlador
'template'=>"{items}\n{pager}",
'itemView'=>'_formTemplate',
   
));

?>

<?php $this->endWidget(); ?>
