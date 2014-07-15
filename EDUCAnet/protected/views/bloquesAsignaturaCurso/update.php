<?php
/* @var $this BloquesAsignaturaCursoController */
/* @var $model BloquesAsignaturaCurso */

$this->breadcrumbs=array(
	'Bloques Asignatura Cursos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BloquesAsignaturaCurso', 'url'=>array('index')),
	array('label'=>'Create BloquesAsignaturaCurso', 'url'=>array('create')),
	array('label'=>'View BloquesAsignaturaCurso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BloquesAsignaturaCurso', 'url'=>array('admin')),
);
?>

<h1>Update BloquesAsignaturaCurso <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>