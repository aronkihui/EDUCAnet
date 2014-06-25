<?php
/* @var $this CursocomunController */
/* @var $model Cursocomun */

$this->breadcrumbs=array(
	'Cursocomuns'=>array('index'),
	$model->idcurso=>array('view','id'=>$model->idcurso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cursocomun', 'url'=>array('index')),
	array('label'=>'Create Cursocomun', 'url'=>array('create')),
	array('label'=>'View Cursocomun', 'url'=>array('view', 'id'=>$model->idcurso)),
	array('label'=>'Manage Cursocomun', 'url'=>array('admin')),
);
?>

<h1>Update Cursocomun <?php echo $model->idcurso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>