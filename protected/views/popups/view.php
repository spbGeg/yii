<?php
/* @var $this PopupsController */
/* @var $model Popups */

$this->breadcrumbs = array(
    'Окошки' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'Список окошек', 'url' => array('index')),
    array('label' => 'Создать окно', 'url' => array('create')),
    array('label' => 'Обновить окно', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Удалить', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Вы действительно хотите удалить окно?')),
    array('label' => 'Изменить окошки', 'url' => array('admin')),
);
?>

<h1>Имя окна: <?php echo $model->name; ?></h1>

<?php if( $model->status == 1){?>

<p>Через 10 сек. появится окно, подождите пожалуйста.</p>


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

    setTimeout(() => modal.style.display = "block", 10000); // show modal window
    setTimeout(() => modal.style.display = "none", 14000); // hide modal window


</script>

	 <?php } else {
	echo "<p>Данное окно <b>неактивно</b>!</p>";

	 }?>



