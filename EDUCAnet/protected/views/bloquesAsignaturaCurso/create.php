<?php
/* @var $this BloquesAsignaturaCursoController */
/* @var $model BloquesAsignaturaCurso */

$this->breadcrumbs=array(
	'Bloques Asignatura Cursos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BloquesAsignaturaCurso', 'url'=>array('index')),
	array('label'=>'Manage BloquesAsignaturaCurso', 'url'=>array('admin')),
);
?>

<h1>Create BloquesAsignaturaCurso</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'bloquesXcursos'=> $bloquesXcursos)); ?>