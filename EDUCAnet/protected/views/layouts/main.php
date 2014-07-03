<?php /* @var $this Controller */ ?>
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
        
         <?php 
            Yii::app()->clientScript->registerCoreScript('jquery'); 
            ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cabeza.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    
    
        <div class="container">
            <div class="page-header">
               
                <div class ="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container">
                            <div class="span8 offset3">
                                
                                <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                                              
                                </button>

                                <a class="brand" href="<?php echo CHtml::encode(Yii::app()->homeurl);?>">
                                    <?php echo Yii::app()->name; ?></a>   

                                <div class="nav-collapse collapse"> 
                                    <?php $this->widget('zii.widgets.CMenu',array(                                        
                                        'items'=>array(
                                                array('label'=>'Portal Alumno', 'url'=>array('/portalalumno/portalalumno')),
                                                array('label'=>'Portal Docente', 'url'=>array('/portaldocente/portaldocente')),
                                                array('label'=>'Biblioteca Virtual', 'url'=>array('/portalbiblioteca/portalbiblioteca')),
                                                /*array('label'=>'Home', 'url'=>array('/site/index')),
                                                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                                array('label'=>'Contact', 'url'=>array('/site/contact')),
                                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)*/
                                        ),
                                        'htmlOptions' => array('class'=> 'nav navbar-nav'),
                                    )); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- mainmenu -->
            </div>
            <?php echo $content; ?>
            
            
           
               
                    <div class="span12">
                        </br></br></br>
                         <?php if(isset($this->breadcrumbs)):?>
                        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links'=>$this->breadcrumbs,
                        )); ?><!-- breadcrumbs -->
                <?php endif?>
                    </div>
               
            
            
          

            <div class="clear"></div>

            <div class="footer text-center">
                    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.<br/>
                    <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div>
</body>
</html>
