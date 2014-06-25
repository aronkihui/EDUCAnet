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
                                            <?php $seleccion=yii::app()->user->getState('seleccion');?>
                                            <?php $idcurso=yii::app()->user->getState('idcurso');?>                                        
                                            <?php $this->widget('zii.widgets.CMenu',array(                                        
                                                    'items'=>array(
                                                            array('label'=>'Notas', 'url'=> array('/profesor/gestionacademica')),
                                                            array('label'=>'Asistencia', 'url'=>array('/profesor/gestionasistencia')),
                                                            array('label'=>'Anotaciones', 'url'=>array('/profesor/gestionanotaciones')),
                                                            array('label'=>'Calendario', 'url'=>array('/profesor/gestioncalendario')),
                                                    ),
                                                    'htmlOptions' => array('class'=> 'nav')
                                            )); ?>
                                    </div>
                        </div>
                </div>
                <section class="contenedorexp">
                        <h3>Mis Cursos</h3>
                        <?php
                                $array_origen = array();
                                $array_destino = array();
                        ?>
                        <?php foreach ($asignaturas as $data): ?>
                                <?php
                                        $array_origen = Cursocomun::model()->findAll(array(
                                                           'condition'=>'idcurso = :cursoID',
                                                            'params'=>array(':cursoID'=>$data->cursocomun_idcurso),
                                                    ));
                                        foreach ($array_origen as $data):  
                                        if (!in_array($data, $array_destino))
                                        { 
                                                $array_destino[]=$data; 
                                        }
                                        endforeach;
                                ?>
                        <?php endforeach; ?>
                        <?php foreach ($array_origen as $data): ?> 
                                <?php
                                        if (!in_array($data, $array_destino))
                                        { 
                                                $array_destino[]=$data; 
                                        }
                                ?>
                        <?php endforeach; ?>
                        <?php foreach ($array_destino as $data): ?> 
                                <?php echo CHtml::button($data->nombrecurso ,array('class'=>'btn btn-primary', 'submit' => array('/profesor/mostraralumnosa', 'idcurso'=>$data->idcurso, 'seleccion'=>$data->nombrecurso))); ?>   
                                <br></br>
                        <?php endforeach; ?>
                        <?php $idelectivos = Yii::app()->user->getState('idelectivos'); 
                        if($idelectivos !== NULL):?>
                                <h3>Electivos</h3>
                            <?php
                                    $array_origen = array();
                                    $array_destino = array();
                            ?>
                            <?php foreach ($electivos as $data): ?>
                                    <?php
                                            $array_origen = Cursoelectivo::model()->findAll(array(
                                                               'condition'=>'idcursoelectivo = :cursoID',
                                                                'params'=>array(':cursoID'=>$data->cursoelectivo_idcursoelectivo),
                                                        ));
                                            foreach ($array_origen as $data):  
                                            if (!in_array($data, $array_destino))
                                            { 
                                                    $array_destino[]=$data; 
                                            }
                                            endforeach;
                                    ?>
                            <?php endforeach; ?>
                            <?php foreach ($array_origen as $data): ?> 
                                    <?php
                                            if (!in_array($data, $array_destino))
                                            { 
                                                    $array_destino[]=$data; 
                                            }
                                    ?>
                            <?php endforeach; ?>
                            <?php foreach ($array_destino as $data): ?> 
                                    <?php echo CHtml::button($data->nombrecurso ,array('class'=>'btn btn-primary', 'submit' => array('/profesor/mostraralumnoselectivoa', 'idcurso'=>$data->idcursoelectivo, 'seleccion'=>$data->nombrecurso))); ?>   
                                <br></br>
                            <?php endforeach; ?>
                            <?php foreach ($electivos as $data): ?> 
                                    <?php // echo CHtml::button($data->nomasigelec, array('class'=>'btn btn-primary','submit' => array('/profesor/mostraralumnoselectivo', 'idcurso'=>$data->cursoelectivo_idcursoelectivo, 'seleccion'=>$data->nomasigelec))); ?>
                                    <br></br>
                            <?php endforeach; ?>
                        <?php endif;?>
                </section>
        </section>
</body>
</html>
