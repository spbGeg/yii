<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
	      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frame.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<!--JS-->
	<!--Font-->
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm logo">
	<img  src="/images/windows.png" alt="Приложение Окошки">
	<h5 class="my-0 mr-md-auto font-weight-normal"><?php echo CHtml::encode(Yii::app()->name); ?></h5>
	<nav  id="mainmenu" class="my-2 my-md-0 mr-md-3">
		  <?php $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'Главная', 'url' => array('/site/index')),
                array('label' => 'Окошки', 'url' => array('/popups/index')),
                array('label' => 'Авторизация', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Выйти из авторизации (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        )); ?>


	</nav>

</div>


<div class="container" id="page">
	<div class="main-page row">


        <?php if (isset($this->breadcrumbs)): ?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif ?>

        <?php echo $content; ?>

		<div class="clear"></div>


	</div>

	<footer class="pt-4 my-md-5 pt-md-5 border-top">
		<div class="row">
			<div class="col-6 copyright align-middle">

				Copyright &copy; <?php echo date('Y'); ?> Romanov Vadim<br/>

                <?php echo Yii::powered(); ?>


			</div>

			<div class="col-6 github">

				<a href="https://github.com/spbGeg/yii.git">
					Github<img src="/images/github.png" alt="Github">
				</a>


			</div>


		</div>
	</footer>
</div>


<!-- page -->


</body>
</html>
