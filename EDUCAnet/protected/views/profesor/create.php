<?php

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>Crear Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>