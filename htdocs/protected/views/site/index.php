<?php
/* @var $this SiteController */
?>
<!-- Intro Content -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<!-- <div class="container"> -->
		<div class="item active">
		<!-- Content -->
			<img src="<?php echo Yii::app()->baseUrl; ?>/images/olives.jpg" alt="" />
		<div class="carousel-caption">
			<h1>SLIDE UNO</h1>
		</div>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->baseUrl; ?>/images/real_plate.jpg" alt="" />
			<div class="carousel-caption">
				<!-- ... -->
			</div>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->baseUrl; ?>/images/healthy.jpg" alt="" />
			<div class="carousel-caption">
				<!-- ... -->
			</div>
		</div>
		<!-- </div> -->
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	</div>
<!-- /Intro Content -->
<?php
$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
