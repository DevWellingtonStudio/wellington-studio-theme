<?php

/**
 * This file adds the Front Page Template to Wellington Studio Theme
 */


add_filter( 'body_class', 'io_front_page_body_class' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function io_front_page_body_class( $classes ) {
  $classes[] = 'front-page';
  return $classes;
}

// Front Page Hero Section
add_action( 'genesis_before_content_sidebar_wrap', 'add_slider_front_page', 10 );
function add_slider_front_page() {
  $default 			= '';
  $videoUrl			= get_theme_mod('hero_video_url', $default );
  $hero_h1 			= get_theme_mod('hero_h1', $default );
  $hero_desc		= get_theme_mod('hero_desc', $default );
  $wst_slider1		= get_theme_mod('wst_slider1', $default );
  $slider1title		= get_theme_mod('slider1title', $default );
  $sldr1text		= get_theme_mod('sldr1text', $default );
  $wst_slider2		= get_theme_mod('wst_slider2', $default );
  $slider2title		= get_theme_mod('slider2title', $default );
  $sldr2text		= get_theme_mod('sldr2text', $default );
  $wst_slider3		= get_theme_mod('wst_slider3', $default );
  $slider3title		= get_theme_mod('slider3title', $default );
  $sldr3text		= get_theme_mod('sldr3text', $default );
  ?>

	<?php if($videoUrl !== $default ) : ?>
	<div id="hero-section">
	  <div id="header-video" >
		<div class="overlay"></div>
		<video class="embed-responsive" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">';
		  <source src="<?php echo $videoUrl; ?>" type="video/mp4">
		</video>
		<div class="container h-100">
		  <div class="d-flex h-100 text-center align-items-center">
			<div class="w-100 text-white">
			  <h1 class="display-3"><?php if($hero_h1 !== $default){echo $hero_h1;} ?></h1>
			  <p class="lead mb-0"><?php if($hero_desc !== $default){echo $hero_desc;} ?></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<?php elseif($wst_slider1 !== $default) : ?>
	<div id="hero-section">
	  <div id="wstTopSlider" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#wstTopSlider" data-slide-to="0" class="active"></li>
		  <li data-target="#wstTopSlider" data-slide-to="1"></li>
		  <li data-target="#wstTopSlider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="<?php if($wst_slider1 !== $default){echo $wst_slider1;} ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5><?php if($slider1title !== $default){echo $slider1title;} ?></h5>
			  <p><?php if($sldr1text !== $default){echo $sldr1text;} ?></p>
			</div>
		  </div>
		  <?php if($wst_slider2 !== $default) : ?>
			<div class="carousel-item">
			  <img src="<?php if($wst_slider2 !== $default){echo $wst_slider2;} ?>" class="d-block w-100" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5><?php if($slider2title !== $default){echo $slider2title;} ?></h5>
				<p><?php if($sldr2text !== $default){echo $sldr2text;} ?></p>
			  </div>
			</div>
		  <?php endif;
		  if($wst_slider3 !== $default) : ?>
			<div class="carousel-item">
			  <img src="<?php if($wst_slider3 !== $default){echo $wst_slider3;} ?>" class="d-block w-100" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				<h5><?php if($slider3title !== $default){echo $slider2title;} ?></h5>
				<p><?php if($sldr3text !== $default){echo $sldr3text;} ?></p>
			  </div>
			</div>
		  <?php endif; ?>
		</div>
		<a class="carousel-control-prev" href="#wstTopSlider" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#wstTopSlider" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	<?php elseif($videoUrl == $default && $wst_slider1 == $default ) :
		include (get_stylesheet_directory() . '/inc/portrait-slider.php');
   	endif;
 }

add_action( 'genesis_before_content', 'mid_page_slider', 15 );
function mid_page_slider() {
  echo '
	<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="/wp-content/uploads/2020/08/slider-1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>First slide label</h5>
	        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="/wp-content/uploads/2020/08/slider-2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Second slide label</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="/wp-content/uploads/2020/08/slider-3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h5>Third slide label</h5>
	        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
';
}

// Adds Sub Naviagtion Menu Function => /lib/nav.php
add_action('genesis_before_content_sidebar_wrap', 'sub_nav_menu', 15 );


add_action( 'genesis_before_loop', 'io_front_page_latest_posts' );
function io_front_page_latest_posts() {

  // The Query
  $the_query = new WP_Query( array(
	  'order'          => 'DESC',
	  'orderby'       => 'date',
	  'no_found_rows'  => true,
	  'posts_per_page' => 4
  ) );

  // The Loop
  if ( $the_query->have_posts() ) {
	echo '<div class="mt_med text-center"><h2>News</h2></div>';
	echo '<div class="mt row">';

	while ( $the_query->have_posts() ) {
	  $the_query->the_post();

	  echo '<div class="col-md-4">';

	  if ( $image = genesis_get_image( 'format=url&size=featured-image' ) ) {
		printf( '<div class="featured-image"><a href="%s" rel="bookmark"><img src="%s" alt="%s" /></a></div>', get_permalink(), $image, the_title_attribute( 'echo=0' ) );
	  }

	  echo '<h3><a href="';
	  echo esc_url( the_permalink() );
	  echo '">';
	  echo get_the_title();
	  echo '</a></h3>';

	  echo '</div>';
	}

	echo '</div>';

	/* Restore original Post Data */
	wp_reset_postdata();
  } else {
	// no posts found
  }
}

remove_action( 'genesis_loop', 'genesis_do_loop' );
//add_action( 'genesis_loop', 'child_grid_loop_helper' );
/** Add support for Genesis Grid Loop **/
function child_grid_loop_helper() {

  if ( function_exists( 'genesis_grid_loop' ) ) {
	remove_action( 'genesis_before_post_content', 'generate_post_image', 5 );
	genesis_grid_loop( array(
		'features'              => 2,
		'feature_image_size'    => 'large',
		'feature_image_class'   => 'aligncenter post-image',
		'feature_content_limit' => 0,
		'grid_image_size'       => 'grid',
		'grid_image_class'      => 'alignleft post-image',
		'grid_content_limit'    => 0,
		'more'                  => __( 'Continue reading...', 'genesis' ),
		'posts_per_page'        => 3,
	) );
  } else {
	genesis_standard_loop();
  }

}

genesis();
