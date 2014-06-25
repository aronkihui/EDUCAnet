<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	$model->idprofesor=>array('view','id'=>$model->idprofesor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'View Profesor', 'url'=>array('view', 'id'=>$model->idprofesor)),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>Update Profesor <?php echo $model->idprofesor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>