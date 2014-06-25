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
                <h3>Mis Profesores Plan Común</h3>
                                    <?php $array_origen = array();?>
                                    <?php $array_destino = array();?>
                                    <?php foreach ($listaasignaturas as $data): ?>
                                            <?php
                                                    $idprofesor=$data->profesor_idprofesor;
                                                    $array_origen = Profesor::model()->findAll(array(
                                                            'condition'=>'idprofesor = :profesorID',
                                                            'params'=>array(':profesorID'=>$idprofesor),
                                                    ));
                                                    foreach ($array_origen as $data):  
                                                    if (!in_array($data, $array_destino))
                                                    { 
                                                            $array_destino[]=$data; 
                                                    }
                                                    endforeach;
                                            ?>                                                                                                                                        
                                    <?php endforeach;?>
                                    <table border="1" bordercolor="gray">
                                    <tr>
                                            <td class="celdat"> Nombre </td>
                                            <td class="celdat"> E-Mail </td>
                                            <td class="celdat"> Dirección </td>
                                            <td class="celdat"> Teléfono </td>
                                    </tr>
                                    <?php foreach($array_destino as $data):?>
                                        <tr>
                                            <td class="celda"> <?php echo $data->nombre; ?>  <?php echo $data->apellido; ?> </td>
                                            <td class="celda"> <?php echo $data->email; ?> </td>
                                            <td class="celda"> <?php echo $data->direccion; ?> </td>
                                            <td class="celda"> <?php echo $data->telefono; ?> </td>
                                        </tr>    
                                    <?php endforeach;?>
                                    </table>
                <?php $idelectivo = Yii::app()->user->getState('idelectivo');
                if($idelectivo !== NULL):?>
                        <?php $array_origen = array();?>
                        <?php $array_destino = array();?>
                        <h3>
                                <?php 
                                        $nomelectivo = Yii::app()->user->getState('nomelectivo');
                                        echo $nomelectivo;
                                ?>
                        </h3>
                            <?php foreach ($electivos as $data): ?>
                            <?php
                                    $idprofesor=$data->profesor_idprofesor;
                                    $array_origen = Profesor::model()->findAll(array(
                                            'condition'=>'idprofesor = :profesorID',
                                            'params'=>array(':profesorID'=>$idprofesor),
                                    ));
                                    foreach ($array_origen as $data):  
                                    if (!in_array($data, $array_destino))
                                    { 
                                            $array_destino[]=$data; 
                                    }
                                    endforeach;
                            ?>
                            <?php endforeach;?> 
                            <table border="1" bordercolor="gray">
                            <tr>
                                    <td class="celdat"> Nombre </td>
                                    <td class="celdat"> E-Mail </td>
                                    <td class="celdat"> Dirección </td>
                                    <td class="celdat"> Teléfono </td>
                            </tr>
                            <?php foreach($array_destino as $data):?>
                                <tr>
                                    <td class="celda"> <?php echo $data->nombre; ?>  <?php echo $data->apellido; ?> </td>
                                    <td class="celda"> <?php echo $data->email; ?> </td>
                                    <td class="celda"> <?php echo $data->direccion; ?> </td>
                                    <td class="celda"> <?php echo $data->telefono; ?> </td>
                                </tr>    
                            <?php endforeach;?>
                            </table>
                <?php endif;?>
        </section>
    </section>
</body>
</html>
