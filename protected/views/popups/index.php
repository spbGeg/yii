<?php
/* @var $this PopupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Окошки',
);

$this->menu=array(
	array('label'=>'Create Popups', 'url'=>array('create')),
	array('label'=>'Manage Popups', 'url'=>array('admin')),
);
?>

<h1>Список всплывающих окошек</h1>




<?php

//print_r($dataProvider->Popup);


$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
