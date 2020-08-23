<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs = array(
    'Popups' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Popups', 'url' => array('index')),
    array('label' => 'Create Popups', 'url' => array('create')),
    array('label' => 'Update Popups', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Popups', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы действительно хотите удалить окно?')),
    array('label' => 'Manage Popups', 'url' => array('admin')),
);
?>

<h1>Имя окна: <?php echo $model->name; ?></h1>

<?php if( $model->status == 1){ ?>

<p>Для того чтобы снова увидеть модальное окно перезагрузите страницу</p>

<div id="myModal" class="modal" style="display:none;">


	<div class="modal-content">
		<div class="modal-header">

			<h2><?php echo $model->name; ?></h2>
		</div>
		<div class="modal-body">
			<p> <?php echo $model->description;?></p>

		</div>

	</div>

</div>

<script>

	//take modal window
    var modal = document.getElementById('myModal');

    setTimeout(() => modal.style.display = "block", 1000); // show modal window
    setTimeout(() => modal.style.display = "none", 4000); // hide modal window


</script>

	 <?php } else {
	echo "<p>Данное окно <b>неактивно</b>!</p>";

	 }?>


<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'count_show',
		'status',
	),
)); */ ?>
