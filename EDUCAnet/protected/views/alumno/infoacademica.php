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
                                                array('label'=>'Notas y Asistencia', 'url'=>array('/alumno/infoacademica')),
                                                array('label'=>'Anotaciones', 'url'=>array('/alumno/anotaciones')),
                                                array('label'=>'Calendario', 'url'=>array('/alumno/calendario')),
                                        ),
                                        'htmlOptions' => array('class'=> 'nav')
                                    )); ?>
                            </div>
                    </div>
            </div>
            <?php $idalumno = Yii::app()->user->getState('idalumno'); ?>
            <section class="contenedorexp">
                    <h3>Mis Notas</h3>
                    <table border="1" bordercolor="gray">
                            <tr>
                                    <td class="celdat">Asignatura</td>
                            </tr>
                            <?php foreach ($asignaturas as $data): ?>
                                <tr>
                                    <td class="celda"><?php echo $data->etiqueta?></td>                        
                                <?php
                                        $notas = Notas::model()->findAll(array(
                                                'condition'=>'asignaturacomun_idasignaturacomun= :asignaturacomunID',
                                                'params'=>array(':asignaturacomunID'=>$data->idasignaturacomun),
                                        ));
                                ?>
                                <?php foreach ($notas as $data1): ?>
                                        <?php
                                                if($data1->alumno_idalumno === $idalumno):?>
                                                        <?php
                                                            if($data1->contenido >= 4):?>
                                                                    <td class="celdatnota"><?php echo $data1->contenido; ?></td>
                                                            <?php endif;
                                                            if($data1->contenido < 4):?>
                                                                    <td class="celdatnotaroja"><?php echo $data1->contenido; ?></td>
                                                            <?php endif;?>        
                                                <?php endif;?>                           
                                <?php endforeach; ?>
                                </tr>    
                            <?php endforeach; ?>
                    </table>
                    <br></br>
                    <?php if($electivos!==NULL):?>                        
                        <table border="1" bordercolor="gray">
                            <tr><td class='celdat'>Asignaturas Electivo</td></tr>
                                <?php foreach ($electivos as $data): ?>
                                        <tr>
                                        <td class="celda"><?php echo $data->etiqueta?></td>                        
                                        <?php
                                                $notas = Notas::model()->findAll(array(
                                                        'condition'=>'asignaturaelectivo_idasignaturaelectivo = :asignaturaID',
                                                        'params'=>array(':asignaturaID'=>$data->idasignaturaelectivo),
                                                ));
                                        ?>
                                        <?php foreach ($notas as $data1): ?>
                                                <?php
                                                        if($data1->alumno_idalumno === $idalumno):?>
                                                                <?php
                                                                    if($data1->contenido >= 4):?>
                                                                            <td class="celdatnota"><?php echo $data1->contenido; ?></td>
                                                                    <?php endif;
                                                                    if($data1->contenido < 4):?>
                                                                            <td class="celdatnotaroja"><?php echo $data1->contenido; ?></td>
                                                                    <?php endif;?>        
                                                        <?php endif;?>                           
                                        <?php endforeach; ?>
                                        </tr>    
                                <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
            </section>
    </section>
</body>
</html>