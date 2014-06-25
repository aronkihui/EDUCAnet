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
    <section class="contexpandido">            
            <section class="contenedorexp">
                    <h3>Mis Asignaturas</h3>
                    <?php
                            $array_origen = array();
                            $array_destino = array();
                    ?>
                    <?php foreach ($asignaturas as $data): ?>                    
                            <?php echo CHtml::button($data->nomasigcomun ,array('class'=>'btn btn-primary', 'submit' => array('/profesor/notas', 'idcurso'=>$data->cursocomun_idcurso, 'idasignatura'=>$data->idasignaturacomun,'seleccion'=>$data->nomasigcomun))); ?>   
                            <br></br>
                    <?php endforeach; ?>
                    <?php $idelectivos = Yii::app()->user->getState('idelectivos'); 
                    if($idelectivos !== NULL):?>
                            <h3>Electivos</h3>
                            <?php foreach ($electivos as $data): ?> 
                                    <?php echo CHtml::button($data->nomasigelec, array('class'=>'btn btn-primary','submit' => array('/profesor/notaselectivo', 'idcursoelectivo'=>$data->cursoelectivo_idcursoelectivo, 'idasignaturaelectivo'=>$data->idasignaturaelectivo,'seleccion'=>$data->nomasigelec))); ?>
                                    <br></br>
                            <?php endforeach; ?>
                    <?php endif;?> 
            </section>
    </section>
</body>
</html>
