<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Окошки'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Изменить окошко',
);

$this->menu=array(
	array('label'=>'Список окошек', 'url'=>array('index')),
	array('label'=>'Создать окошко', 'url'=>array('create')),
	array('label'=>'Просмотреть окошко', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Изменить окошки', 'url'=>array('admin')),
);
?>

<h1>Изменить всплывающее окошко<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>