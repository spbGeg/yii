<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Popups', 'url'=>array('index')),
	array('label'=>'Create Popups', 'url'=>array('create')),
	array('label'=>'View Popups', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Popups', 'url'=>array('admin')),
);
?>

<h1>Изменить всплывающее окошко<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>