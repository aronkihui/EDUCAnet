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
    <h2>Portal Biblioteca</h2>
    
</br>

<?php
$this->widget('bootstrap.widgets.TbCarousel', array(
'slide'=>true,
'displayPrevAndNext'=>true,
'items'=>array(
                array('image'=>Yii::app()->baseUrl . '/../images/biblio_1.jpg', 'label'=>'First Thumbnail label', 'caption'=>'ouchh'),
                array('image'=>Yii::app()->baseUrl .'/../images/biblio_2.jpg' , 'label'=>'Second Thumbnail label', 'caption'=>'ouch'),
                array('image'=>Yii::app()->baseUrl . '/../images/biblio_3.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'ouch'),

                ),
                )); 
?>
    









</body>
</html>
