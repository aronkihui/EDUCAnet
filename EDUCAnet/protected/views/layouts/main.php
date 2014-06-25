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
        <div class="container">
            <div class="page-header">
                <?php if(isset($this->breadcrumbs)):?>
                        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links'=>$this->breadcrumbs,
                        )); ?><!-- breadcrumbs -->
                <?php endif?>
                <div class ="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <section class="educanet"><img src="<?php echo Yii:: app() ->baseUrl.'/images/Logo.png' ?>"></section>
                    </div>
                </div>
            </div><!-- mainmenu -->
            </div>
            <?php echo $content; ?>
        </div>
</body>
</html>
