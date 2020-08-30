<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список Окошек', 'url'=>array('index')),
	array('label'=>'Изменить Окошки', 'url'=>array('admin')),
);
?>

<h1>Создать всплывающее окошко</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>