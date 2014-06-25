<?php
/* @var $this CursocomunController */
/* @var $model Cursocomun */

$this->breadcrumbs=array(
	'Cursocomuns'=>array('index'),
	$model->idcurso,
);

$this->menu=array(
	array('label'=>'List Cursocomun', 'url'=>array('index')),
	array('label'=>'Create Cursocomun', 'url'=>array('create')),
	array('label'=>'Update Cursocomun', 'url'=>array('update', 'id'=>$model->idcurso)),
	array('label'=>'Delete Cursocomun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcurso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cursocomun', 'url'=>array('admin')),
);
?>

<h1>View Cursocomun #<?php echo $model->idcurso; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcurso',
		'etiqueta',
		'nombrecurso',
		'profesor_idprofesor',
	),
)); ?>
