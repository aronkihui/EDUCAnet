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
                    <h3><?php echo CHtml::button('Volver',array('class'=>'btn btn-primary', 'submit' => array('/profesor/misalumnos', ))); ?> <?php echo $seleccion ?></h3>
                    <table border="1" bordercolor="gray">
                            <tr>
                                <td class="celdat"> Nombre </td>
                                <td class="celdat"> E-Mail </td>
                                <td class="celdat"> Dirección </td>
                                <td class="celdat"> Teléfono </td>
                            </tr>
                            <?php foreach ($alumnos as $data): ?>
                                    <tr>
                                            <td class="celda"> <?php echo $data->nombre; ?>  <?php echo $data->apellido; ?> </td>
                                            <td class="celda"> <?php echo $data->email; ?> </td>
                                            <td class="celda"> <?php echo $data->direccion; ?> </td>
                                            <td class="celda"> <?php echo $data->telefono; ?> </td>
                                    </tr>
                            <?php endforeach;?> 
                    </table>
            </section>
    </section>
</body>
</html>
