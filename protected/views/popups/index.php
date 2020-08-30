<?php
/* @var $this PopupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Окошки',
);

$this->menu=array(
	array('label'=>'Создать Окошко', 'url'=>array('create')),
	array('label'=>'Изменить Окошки', 'url'=>array('admin')),
);
?>

<h1>Список всплывающих окошек</h1>




<?php




$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'viewData'    => array(
			'code'  =>  $code
	),
)); ?>
