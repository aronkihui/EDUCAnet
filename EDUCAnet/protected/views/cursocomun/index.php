<?php
/* @var $this CursocomunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cursocomuns',
);

$this->menu=array(
	array('label'=>'Create Cursocomun', 'url'=>array('create')),
	array('label'=>'Manage Cursocomun', 'url'=>array('admin')),
);
?>

<h1>Cursocomuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
