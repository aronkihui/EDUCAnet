<?php
/* @var $this ApoderadoController */
/* @var $model Apoderado */

$this->breadcrumbs=array(
	'Apoderados'=>array('index'),
	$model->idapoderado=>array('view','id'=>$model->idapoderado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apoderado', 'url'=>array('index')),
	array('label'=>'Create Apoderado', 'url'=>array('create')),
	array('label'=>'View Apoderado', 'url'=>array('view', 'id'=>$model->idapoderado)),
	array('label'=>'Manage Apoderado', 'url'=>array('admin')),
);
?>

<h1>Update Apoderado <?php echo $model->idapoderado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>