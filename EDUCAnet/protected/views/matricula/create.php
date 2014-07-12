<?php
/* @var $this MatriculaController */
/* @var $model Matricula */


$this->menu=array(
	array('label'=>'List Matricula', 'url'=>array('index')),
	array('label'=>'Manage Matricula', 'url'=>array('admin')),
);
?>

<h1>Asignar Matricula alumno apoderado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>