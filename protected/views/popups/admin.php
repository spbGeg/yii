<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs=array(
	'Окошки'=>array('index'),
	'Изменить окошки',
);

$this->menu=array(
	array('label'=>'Список окошек', 'url'=>array('index')),
	array('label'=>'Создать окошко', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#popups-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Редактировать окошки</h1>

<p>
Вы можете использовать операторы (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) для быстрого поиска.
</p>

<?php echo CHtml::link('Дополнительные параметры поиска','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'popups-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'count_show',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
