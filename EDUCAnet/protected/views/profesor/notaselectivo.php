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
            <section class="contenedorexp">
                    <h3><?php echo CHtml::button('Volver',array('class'=>'btn btn-primary', 'submit' => array('/profesor/gestionacademica', )));?> <?php echo $seleccion ?></h3>
                    <?php
                            $idasignaturaelectivo;
                            $idcursoelectivo = Yii::app()->user->getState('idcursoelectivo');
                            $asignaturaelectivo = Asignaturaelectivo::model()->find(array(
                                                        'condition'=>'idasignaturaelectivo = :asignaturaID',
                                                        'params'=>array(':asignaturaID'=>$idasignaturaelectivo),
                                                )); 
                    ?>
                            <?php foreach ($alumnos as $data): ?>
                                    <table border="0" bordercolor="gray">
                                            <tr><td class="celdanombre"><?php echo $data->nombre; ?> <?php echo $data->apellido; ?></td></tr>
                                    </table>        
                                                    <?php
                                                            $notasi = Notas::model()->findAll(array(
                                                                    'condition'=>'asignaturaelectivo_idasignaturaelectivo= :asignaturaID',
                                                                    'params'=>array(':asignaturaID'=>$idasignaturaelectivo),
                                                            ));
                                                    ?>
                                                    <table border="1" bordercolor="gray">                                                        
                                                        <tr>
                                                            <?php foreach ($notasi as $data1): ?>
                                                                    <?php
                                                                    if($data1->alumno_idalumno === $data->idalumno):?>
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
                                                    </table> 
                                            <td class='celdat'> 
                                                    <?php echo CHtml::beginForm(); ?>
                                                                    <?php echo CHtml::activeTextField($notas, 'contenido', array('autocomplete'=>"off",'class'=>'formnotas', 'value'=>'')); ?>                                                                                                                                                         
                                                                    <?php $notas->asignaturaelectivo_idasignaturaelectivo = $asignaturaelectivo->idasignaturaelectivo; ?>
                                                                    <?php $notas->alumno_idalumno = $data->idalumno; ?>                                                                                                                                             
                                                                    <?php echo CHtml::submitButton('Ingresar', array('class'=>'btn btn-primary', 'submit' => array('/profesor/notaselectivo', 'idcursoelectivo'=>$data->cursoelectivo_idcursoelectivo, 'idasignaturaelectivo'=>$asignaturaelectivo->idasignaturaelectivo,'seleccion'=>$asignaturaelectivo->nomasigelec, 'idalumno'=>$data->idalumno))); ?>
                                                    <?php echo CHtml::endForm(); ?>  
                                            </td>
                                    </tr>                                 
                            <?php endforeach;?> 
            </section>
    </section>
</body>
</html>
