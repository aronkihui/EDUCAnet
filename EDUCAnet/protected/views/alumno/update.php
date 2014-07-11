<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->idalumno=>array('view','id'=>$model->idalumno),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'View Alumno', 'url'=>array('view', 'id'=>$model->idalumno)),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>Update Alumno <?php echo $model->idalumno; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>