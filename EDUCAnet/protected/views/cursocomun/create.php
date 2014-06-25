<?php
/* @var $this CursocomunController */
/* @var $model Cursocomun */

$this->breadcrumbs=array(
	'Cursocomuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cursocomun', 'url'=>array('index')),
	array('label'=>'Manage Cursocomun', 'url'=>array('admin')),
);
?>

<h1>Create Cursocomun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>