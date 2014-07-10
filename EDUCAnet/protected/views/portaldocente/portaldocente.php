

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'portaldocente',
);

?><?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <?php
            echo Yii::app()->bootstrap->registerAllCss();
            echo Yii::app()->bootstrap->registerCoreScripts();
            /*Aquí están los CSS antiguos	
                    <!-- blueprint CSS framework -->
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
                    <!--[if lt IE 8]>
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
                    <![endif]-->
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
            */
        ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cabeza.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
       
        
</head>

<body>
    
    <div class="title "> <h2 class="centered">Portal Docente</h2></div>
    <div class="container-fluid">
   
        <div class="container-fluid well span2 ">
      
        
        
     <!—Sidebar content—>
      <ul class="nav nav-pills nav-stacked">
    
     
       <li class="active"><a href="<?php echo $this->createUrl('miperfil/registroSesion');?>"><span class="badge pull-right"></span> Biblioteca</a> </li>
      <li class=""><a href="<?php echo $this->createUrl('miperfil/registroSesion');?>"><span class="badge pull-right"></span> Mi Perfil Biblioteca</a> </li>

      <li class=""> 
<?php echo CHtml::ajaxLink(
    'Gestionar Anotaciones',          // the link body (it will NOT be HTML-encoded.)
    array('portaldocente/gestionar_anotaciones'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
      
     <li class=""> 
<?php echo CHtml::ajaxLink(
    'Mis asignaturas',          // the link body (it will NOT be HTML-encoded.)
    array('portaldocente/mis_asignaturas'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li> 
      
      
      
       <li class=""> 
<?php echo CHtml::ajaxLink(
    'Gestion asistencia alumno',          // the link body (it will NOT be HTML-encoded.)
    array('portaldocente/gestion_asistencia_alumno'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
      
            
       <li class=""> 
<?php echo CHtml::ajaxLink(
    'Mis Alumnos',          // the link body (it will NOT be HTML-encoded.)
    array('portaldocente/mis_alumnos'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
      
            
       <li class=""> 
<?php echo CHtml::ajaxLink(
    'Mis Colegas',          // the link body (it will NOT be HTML-encoded.)
    array('portaldocente/mis_colegas'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
      
            
       <li class=""> 
<?php echo CHtml::ajaxLink(
    'Gestion de Evaluaciones',          // the link body (it will NOT be HTML-encoded.)
    array('portaldocente/gestion_evaluaciones'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
    array(
        'update'=>'#res'
    )
        );?></li>
      
      
    </ul>
        
        
        
        
  
        </div>
        
        <div id="res"class="container-fluid well span22 ">
            
            
           
            
        </div>
    
    </div>
</body>
</html>
