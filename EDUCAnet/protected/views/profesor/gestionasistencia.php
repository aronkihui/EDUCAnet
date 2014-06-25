<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'About',
);

?>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <?php
            echo Yii::app()->bootstrap->registerAllCss();
            echo Yii::app()->bootstrap->registerCoreScripts();
        ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cabeza.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>  
    <section class="contexpandido">
        <div class ="navbar">
                <div class="navbar-inner">
                    <div class="center"> 
                        <?php $this->widget('zii.widgets.CMenu',array(                                        
                            'items'=>array(
                                    array('label'=>'Notas', 'url'=>array('/profesor/gestionacademica')),
                                    array('label'=>'Asistencia', 'url'=>array('/profesor/gestionasistencia')),
                                    array('label'=>'Anotaciones', 'url'=>array('/profesor/gestionanotaciones')),
                                    array('label'=>'Calendario', 'url'=>array('/profesor/gestioncalendario')),
                            ),
                            'htmlOptions' => array('class'=> 'nav')
                        )); ?>
                    </div>
                </div>
            </div>
        <h1>Gestion Asistencia</h1>
    </section>
</body>
</html>
