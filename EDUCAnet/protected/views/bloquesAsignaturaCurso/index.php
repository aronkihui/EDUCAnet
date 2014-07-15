<?php
/* @var $this BloquesAsignaturaCursoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bloques Asignatura Cursos',
);

$this->menu=array(
	array('label'=>'Create BloquesAsignaturaCurso', 'url'=>array('create')),
	array('label'=>'Manage BloquesAsignaturaCurso', 'url'=>array('admin')),
);
?>

<h1>Bloques Asignatura Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
