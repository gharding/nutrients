<?php /* @var $this Controller */ 
	date_default_timezone_set('UTC'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!-- <?php // Yii::app()->clientScript->registerCoreScript('jquery'); ?> -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Bootstrap Framework -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	</div><!-- mainmenu -->
	<!-- Menu -->
		<nav class="navbar navbar-default" role="navigation">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#"><?php echo Yii::app()->name; ?></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <!-- <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Link</a></li>
			        <li><a href="#">Link</a></li>
			        
			      </ul> -->
			      <ul class="nav navbar-nav navbar-right">
			      	<li><?php echo CHtml::link('Home', array('site/index')); ?></li>
			        <li><?php echo CHtml::link('About', array('site/about')); ?></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">All Products</a></li>
			            <li class="divider"></li>
			            <li><a href="#">GrOw Range</a></li>
			            <li><a href="#">Pro Range</a></li>
			            <!-- <li><a href="#">Separated link</a></li> -->
			            <!-- <li class="divider"></li> -->
			            <!-- <li><a href="#">One more separated link</a></li> -->
			          </ul>
			        </li>
			        <!-- <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul>
			        </li> -->
			        <form class="navbar-form navbar-right" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
			      	</form>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		</nav>
		<!-- /Menu -->
		<div class="container">
	<!-- Content -->
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>
		</div>
		<!-- /Content -->
	<div class="clear"></div>
	<hr />
	<div class="container">
		<div id="footer" style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?> by Nu-trition.<br/>
			All Rights Reserved.<br/>
		</div><!-- footer -->
	</div>
<!-- page -->

</body>
</html>
