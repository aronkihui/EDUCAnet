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
        <div class="page-header">
            <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
            <?php endif?>
            <div class ="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                        <div class="contenedor">
                                <section class="nombreusuario">
                                        <h4>
                                                <?php
                                                        $nombreUsuario=Yii::app()->user->getState("nombreUsuario");                                                    
                                                        echo $nombreUsuario;                                                    
                                                ?>
                                                <?php
                                                        $apellidoUsuario=Yii::app()->user->getState("apellidoUsuario");
                                                        echo $apellidoUsuario;
                                                ?>
                                        </h4>
                                </section>
                                <section class="salir">
                                        <?php
                                                $this->widget('zii.widgets.CMenu',array('items'=>array(array('label'=>'Cerrar Sesión', 'url'=>array('/profesor/salir')),),'htmlOptions' => array('class'=> 'nav navbar-nav'),));

                                        ?>
                                </section>
                                <section class="educanet"><img src="<?php echo Yii:: app() ->baseUrl.'/images/Logo.png' ?>"></section>
                        </div>
                </div>
            </div>
        </div>
        </div>
        <section class="cuerpo">
                <section class="menulateral">
                        <label class="sitio">Portal</label>
                        <label class="nombreportal">Docente</label>
                        <h5>
                                <class class="navbar">
                                        <?php
                                            $this->widget('zii.widgets.CMenu',array('items'=>array(array('label'=>'Gestión Académica', 'url'=>array('profesor/gestionacademica')),),'htmlOptions' => array('class'=> 'nav navbar-nav'),));
                                        ?>
                                        <br></br>
                                        <?php 
                                            $this->widget('zii.widgets.CMenu',array('items'=>array(array('label'=>'Mis Alumnos', 'url'=>array('profesor/misalumnos')),),'htmlOptions' => array('class'=> 'nav navbar-nav'),));
                                        ?>
                                        <br></br>
                                        <?php 
                                            $this->widget('zii.widgets.CMenu',array('items'=>array(array('label'=>'Mis Colegas', 'url'=>array('profesor/miscolegas')),),'htmlOptions' => array('class'=> 'nav navbar-nav'),));
                                        ?>
                                        <br></br>
                                        <?php 
                                            $this->widget('zii.widgets.CMenu',array('items'=>array(array('label'=>'Biblioteca Virtual', 'url'=>array('index')),),'htmlOptions' => array('class'=> 'nav navbar-nav'),));
                                        ?>
                                </class>
                        </h5>
                </section>
                <section class="contexensible">
                        <?php echo $content; ?>
                </section>
        </section>
</body>
</html>
