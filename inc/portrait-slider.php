<?php
// Adds the portrait slider
?>

<div id="portrait-section">
 <div id="wstPortraitSlider" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
	 <li data-target="#wstPortraitSlider" data-slide-to="0" class="active"></li>
	 <li data-target="#wstPortraitSlider" data-slide-to="1"></li>
	 <li data-target="#wstPortraitSlider" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	 <div class="carousel-item active">
		<div id="portrait-hero" class="card">
		 <div class="row no-gutters">
			<div class="col-md-6 card-body-wrapper">
			 <div class="card-body">
				<?php $p_slider_title1 = get_theme_mod('p-slider-title1'); ?>
				<h1 class="card-title"><?php if($p_slider_title1 !== ''){echo $p_slider_title1;} ?></h1>
				<?php $p_slider_text1 = get_theme_mod('p-slider-text1'); ?>
				<p class="card-text"><?php if($p_slider_text1 !== ''){echo $p_slider_text1;} ?></p>
				<?php $port1_btn_url = get_theme_mod('port1_btn_url'); ?>
				<?php if($port1_btn_url !== ''){echo '<a href="' . $port1_btn_url . '" title="Read More"><button type="button" class="btn btn-dark"><h5>Find Out More...</h5></button></a>';} ?>
			 </div>
			</div>
			<div class="col-md-6 portrait-image">
			 <?php $port_slider1 = get_theme_mod('port_slider1'); ?>
			 <img src="<?php if($port_slider1 !== ''){echo $port_slider1;} ?>" class="card-img" alt="...">
			</div>
		 </div>
		</div>
	 </div>
	 <div class="carousel-item">
		<div id="portrait-hero" class="card">
		 <div class="row no-gutters">
			<div class="col-md-6 portrait-image">
			 <img src="/wp-content/uploads/2020/08/pexels-thirdman-5060987-scaled.jpg" class="card-img" alt="...">
			</div>
			<div class="col-md-6 card-body-wrapper">
			 <div class="card-body">
				<h1 class="card-title">Section Title</h1>
				<p class="card-text">This area will have more style added. Font size will be updated, options to change background color. The image to the right should always be an image that can be rendered in portrait orientation for best results. Consider when viewing this section on a mobile device, the text "could" render over the image. Contast can be optimized via a filter on the image when viewed on devices smaller than a tablet.</p>
				<button type="button" class="btn btn-dark"><h5>This Button Links To Content</h5></button>
			 </div>
			</div>
		 </div>
		</div>
	 </div>
	 <div class="carousel-item">
		<div id="portrait-hero" class="card">
		 <div class="row no-gutters">
			<div class="col-md-6 card-body-wrapper">
			 <div class="card-body">
				<h1 class="card-title">Section Title</h1>
				<p class="card-text">This area will have more style added. Font size will be updated, options to change background color. The image to the right should always be an image that can be rendered in portrait orientation for best results. Consider when viewing this section on a mobile device, the text "could" render over the image. Contast can be optimized via a filter on the image when viewed on devices smaller than a tablet.</p>
				<button type="button" class="btn btn-dark"><h5>This Button Links To Content</h5></button>
			 </div>
			</div>
			<div class="col-md-6 portrait-image">
			 <img src="/wp-content/uploads/2020/08/pexels-luis-quintero-1408196-scaled.jpg" class="card-img" alt="...">
			</div>
		 </div>
		</div>
	 </div>
	</div>
 </div>
 <a class="carousel-control-prev" href="#wstPortraitSlider" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#wstPortraitSlider" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
 </a>
</div>
