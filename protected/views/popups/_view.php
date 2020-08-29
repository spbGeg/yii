<?php
/* @var $this PopupsController */
/* @var $data Popups */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_show')); ?>:</b>
	<?php echo CHtml::encode($data->count_show); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php if( $data->status != 0) echo "Активно";
		  else echo "Неативно";
	?>
	<br />
	<p><?php  ?></p>

	<p>Протестировать окно <a href='<?php echo CHtml::normalizeUrl(array('view', 'id' =>$data->id)); ?>'>
			<button class="btn btn-primary">Тестировать</button>
		</a></p>


</div>