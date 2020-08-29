<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Добро пожаловать в  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>В данном приложении вы можете подключить всплывающее окошко на ваш сайт</p>

<p>Выбирете интересующее вас окошко  <a href="<?php echo CHtml::normalizeUrl(array('popups/index')); ?>">
		<button class="btn btn-success button">Перейти</button>
	</a></p>




