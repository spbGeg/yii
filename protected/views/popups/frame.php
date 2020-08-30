



<?php if( $model->status == 1){


	?>



<div id="myModal" class="modal modal__<?php echo $model->id; ?>" style="display:none;">


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
    setTimeout(() => modal.style.display = "none", 12000); // hide modal window





</script>

	 <?php

    $model->count_show++;
    $model->save();


	} else {
	echo "<p>Окно <b>неактивно</b>!</p>";

	 }?>


<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',		'name'=> array(			'label'=> 'Имя окна',			'type' => 'raw',			'value' => $model->name,			),
		'description',
		'count_show',
		'status',
	),
)); */ ?>
