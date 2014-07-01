<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
// $this->breadcrumbs=array(
// 	'About',
// );
?>
<script type="text/javascript">
	$(function(){
		$("#primary-button").click(function(event){
			event.preventDefault();
			//var element = $("#primary-button").attr("href");
			//alert(element);
			// alert("WE HERE!");
			$("#about-beliefs").scrollTo({
				duration: 2000,
				durationMode: 'all'
			});
		});
	});
	
</script>
<div id="about-start" class="about-div" style="text-align: center; vertical-align: center; height: 700px; margin: 0 auto; padding-top: 150px;">
	<div class="container">
		<h1>NU-trition</h1>

<!-- <?php //echo $content; ?> -->

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<a id="primary-button" href="#about-beliefs" class="btn btn-primary">Click me</a>
	</div>
</div>

<div id="about-beliefs" name="about-beliefs" class="about-div">
	<div class="container">
		<h2>Our Beliefs</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
<h2>Our Mission</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2>The Team</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>