<?php
/* @var $this BloquesAsignaturaCursoController */
/* @var $model BloquesAsignaturaCurso */

$this->breadcrumbs=array(
	'Bloques Asignatura Cursos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BloquesAsignaturaCurso', 'url'=>array('index')),
	array('label'=>'Create BloquesAsignaturaCurso', 'url'=>array('create')),
	array('label'=>'Update BloquesAsignaturaCurso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BloquesAsignaturaCurso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BloquesAsignaturaCurso', 'url'=>array('admin')),
);
?>

<h1>View BloquesAsignaturaCurso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'curso_idcurso',
		'asignatura_idasignatura',
		'bloques_id_inicio',
		'bloques_id_fin',
		'dia',
	),
)); ?>
