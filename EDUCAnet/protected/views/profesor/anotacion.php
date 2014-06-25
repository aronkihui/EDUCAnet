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
                    <h3>
                        <?php                            
                                $tipoalumno;
                                $idprofesor = Yii::app()->user->getState('idprofesor');
                                if($tipoalumno === 'normal')
                                {    
                                        echo CHtml::button('Volver',array('class'=>'btn btn-primary', 'submit' => array('/profesor/mostraralumnosa', 'seleccion'=>$seleccion, 'idcurso'=>$idcurso)));
                                }
                                else
                                {
                                        echo CHtml::button('Volver',array('class'=>'btn btn-primary', 'submit' => array('/profesor/mostraralumnoselectivoa', 'seleccion'=>$seleccion, 'idcurso'=>$idcurso)));
                                }
                        ?> 
                        <?php echo $nombre; ?> <?php echo $apellido; ?>
                    </h3>
                    <?php echo CHtml::beginForm(); ?>
                            <table border="0">
                                    <tr>                                     
                                            <td>
                                                    <table border="0">
                                                            <tr>
                                                                <td><?php echo CHtml::activeradioButton($anotaciones,'tipo', array('value'=>'1')) . ' Positiva'; ?></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><?php echo CHtml::activeradioButton($anotaciones,'tipo', array('value'=>'2')) . ' Negativa'; ?></td>
                                                            </tr>
                                                            <tr><td></td></tr>
                                                            <tr><td></td></tr>
                                                            <tr><td></td></tr>
                                                            <tr><td></td></tr>
                                                            <tr><td></td></tr>
                                                            <tr><td></td></tr>
                                                    </table>                                                                                                                                                                                                               
                                            </td>
                                    <tr>        
                                            <td><?php echo CHtml::activeTextArea($anotaciones, 'contenido', array('autocomplete'=>"off", 'class'=>'ariatexto')); ?></td>
                                    </td>                                                    
                                            <?php $anotaciones->alumno_idalumno = $idalumno; ?>
                                            <?php $anotaciones->profesor_idprofesor = $idprofesor; ?>                                    
                                    </tr>
                                    <tr>                                          
                                            <td align="right"><?php echo CHtml::submitButton('Ingresar', array('class'=>'btn btn-primary', 'submit' => array('/profesor/anotacion', 'idalumno'=>$idalumno, 'idprofesor'=>$idprofesor, 'tipoalumno'=>$tipoalumno, 'seleccion'=>$seleccion, 'idcurso'=>$idcurso, 'nombre'=>$nombre, 'apellido'=>$apellido))); ?></td>
                                    </tr>                                
                            </table>
                    <?php echo CHtml::endForm(); ?>
            </section>
    </section>
</body>
</html>
