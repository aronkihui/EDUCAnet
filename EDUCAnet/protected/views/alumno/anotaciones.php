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
        <section class="contenedorexp">
                    <h4> Registro de anotaciones </h4>                    
                    <?php foreach ($anotaciones as $data): ?>
                            <table border="0" bordercolor="gray">
                                    <tr>
                                            <td class="celda">
                                                    <?php if($data->tipo==='0'):?>
                                                    <h5><section class='positiva'>Positiva</section></h5>
                                                    <?php else:?>
                                                            <h5><section class='negativa'>Negativa</section></h5>
                                                    <?php endif;?>                                                                
                                            </td>                                            
                                            <td class="celda">
                                                    <h5>
                                                            <?php
                                                                    $profesor =  Profesor::model()->find(array(
                                                                            'condition'=>'idprofesor = :profesorID',
                                                                            'params'=>array(':profesorID'=>$data->profesor_idprofesor),
                                                                    ));                                                                             
                                                            ?>
                                                            Profesor <?php echo $profesor->nombre; ?> <?php echo $profesor->apellido; ?>
                                                    </h5>
                                            </td>
                                            <td class="celda"> <h5>Registrada en <?php echo $data->fecha; ?></h5></td>
                                    </tr>
                            </table>                                                
                            <section class='anotacion'>
                                    <?php echo $data->contenido; ?>
                            </section>                                                                          
                    <?php endforeach;?>                            
            </section>
    </section>
</body>
</html>
