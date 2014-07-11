<?php
/* @var $this ApoderadoController */
/* @var $model Apoderado */

$this->breadcrumbs=array(
	'Apoderados'=>array('index'),
	$model->idapoderado,
);

$this->menu=array(
	array('label'=>'List Apoderado', 'url'=>array('index')),
	array('label'=>'Create Apoderado', 'url'=>array('create')),
	array('label'=>'Update Apoderado', 'url'=>array('update', 'id'=>$model->idapoderado)),
	array('label'=>'Delete Apoderado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idapoderado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apoderado', 'url'=>array('admin')),
);
?>

<h1>View Apoderado #<?php echo $model->idapoderado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idapoderado',
		'nombre',
		'apellido',
		'telefono',
		'direccion',
		'email',
		'fecha_creacion',
		'usuario_idusuario',
	),
)); ?>
