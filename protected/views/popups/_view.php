<?php
/* @var $this PopupsController */
/* @var $data Popups */
?>

<div class="view <? if ($data->status == 0) echo "no-active"?>" >


	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
	<br/>

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_show')); ?>:</b>
    <?php if($data->count_show != NULL )echo CHtml::encode($data->count_show);
            else echo 0;?>
	<br/>
	<span style="color: #000;"><b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php if ($data->status != 0) echo "Активно";
    else echo "Неативно";
    ?>
	</span><br/>
	<p><?php ?></p>

	<p>Протестировать окно <a href='<?php echo CHtml::normalizeUrl(array('view', 'id' => $data->id)); ?>'>
			<button class="btn btn-primary">Тестировать</button>
		</a>
	</p>
	<div>
		<p><b>Код вставки:</b></p>
		<div class="code-insert">
			<pre class="hljs" style="display: block; overflow-x: auto; background: rgb(235, 248, 255) none repeat scroll 0% 0%; color: rgb(81, 109, 123); padding: 0.5em;">&lt;div <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(107, 107, 184);">class</span></span>=<span class="hljs-string" style="color: rgb(86, 140, 59);">'embed-responsive embed-responsive-16by9'</span> style=<span class="hljs-string" style="color: rgb(86, 140, 59);">'position: absolute'</span>&gt;<span class="xml"><span class="hljs-tag" style="color: rgb(210, 45, 114);">&lt;<span class="hljs-name" style="color: rgb(210, 45, 114);">iframe</span> <span class="hljs-attr">src</span>=<span class="hljs-string" style="color: rgb(86, 140, 59);">'<?php echo Yii::app()->getBaseUrl(true) ?>/index.php/popups/frame/?id=<?php echo CHtml::encode($data->id); ?>'</span>&gt;</span><span class="hljs-tag" style="color: rgb(210, 45, 114);">&lt;/<span class="hljs-name" style="color: rgb(210, 45, 114);">iframe</span>&gt;</span></span><span class="xml"><span class="hljs-tag" style="color: rgb(210, 45, 114);">&lt;/<span class="hljs-name" style="color: rgb(210, 45, 114);">div</span>&gt;</span></span></pre>

		</div>


	</div>


</div>