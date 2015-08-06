<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php get_header(); ?>

<?php
	// Load Slide Options into a variable
	$slide_one_options = get_option( 'carousel_one_options' );
	$slide_two_options = get_option( 'carousel_two_options' );
	$slide_three_options = get_option( 'carousel_three_options' );

	// Load Tile Options into a variable
	$tile_one_options = get_option( 'tile_one_options' );
	$tile_two_options = get_option( 'tile_two_options' );
	$tile_three_options = get_option( 'tile_three_options' );

	// Load Featurette Options into a variable
	$featurette_one_options = get_option( 'featurette_one_options' );
	$featurette_two_options = get_option( 'featurette_two_options' );
	$featurette_three_options = get_option( 'featurette_three_options' );

	
	if( !isset( $featurette_one_options[ 'featurette_visibility' ] ) ) {
		$featurette_one_options[ 'featurette_visibility' ] = false;
	}
	if( !isset( $featurette_two_options[ 'featurette_visibility' ] ) ) {
		$featurette_two_options[ 'featurette_visibility' ] = false;
	}
	if( !isset( $featurette_three_options[ 'featurette_visibility' ] ) ) {
		$featurette_three_options[ 'featurette_visibility' ] = false;
	}

?>

<!-- Carousel
=============================================== -->
<div class="container">
	<div id="carousel-home" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-home" data-slide-to="1"></li>
			<li data-target="#carousel-home" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for Slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?php echo $slide_one_options[ 'slide_image' ]; ?>" alt="image">
				<div class="carousel-caption">
					<h1><?php echo sanitize_text_field( $slide_one_options[ 'slide_header' ] ); ?></h1>
					<p class="lead"><?php echo sanitize_text_field( $slide_one_options[ 'slide_description' ] ); ?>
					 	<br />
        			 	<a href="<?php echo sanitize_text_field( $slide_one_options[ 'slide_link' ] ); ?>"><?php echo sanitize_text_field( $slide_one_options[ 'slide_linktext' ] ); ?></a>
      				</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo $slide_two_options[ 'slide_image' ]; ?>" alt="image">
				<div class="carousel-caption">
					<h1><?php echo sanitize_text_field( $slide_two_options[ 'slide_header' ] ); ?></h1>
					<p class="lead"><?php echo sanitize_text_field( $slide_two_options[ 'slide_description' ] ); ?>
       					<br />
        				<a href="<?php echo sanitize_text_field( $slide_two_options[ 'slide_link' ] ); ?>"><?php echo sanitize_text_field( $slide_two_options[ 'slide_linktext' ] ); ?></a>
      				</p>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo $slide_three_options[ 'slide_image' ]; ?>" alt="image">
				<div class="carousel-caption">
					<h1><?php echo sanitize_text_field( $slide_three_options[ 'slide_header' ] ); ?></h1>
					<p class="lead"><?php echo sanitize_text_field( $slide_three_options[ 'slide_description' ] ); ?>
        				<br />
        				<a href="<?php echo sanitize_text_field( $slide_three_options[ 'slide_link' ] ); ?>"><?php echo sanitize_text_field( $slide_three_options[ 'slide_linktext' ] ); ?></a>
      				</p>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- /#carousel-home -->
</div> <!-- /.container for carousel -->


<!-- Section Tiles
=============================================== -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?php echo $tile_one_options[ 'tile_image' ]; ?>" alt="thumbnail">
				<div class="caption">
					<h3><?php echo sanitize_text_field( $tile_one_options[ 'tile_header' ] ); ?></h3>
					<p><?php echo sanitize_text_field( $tile_one_options[ 'tile_description' ] ); ?></p>
					<p><a class="btn btn-primary" href="<?php sanitize_text_field( $tile_one_options[ 'tile_link' ] ); ?>" role="button"><?php echo sanitize_text_field( $tile_one_options[ 'tile_linktext' ] ); ?></a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?php echo $tile_two_options[ 'tile_image' ]; ?>" alt="thumbnail">
				<div class="caption">
					<h3><?php echo sanitize_text_field( $tile_two_options[ 'tile_header' ] ); ?></h3>
					<p><?php echo sanitize_text_field( $tile_two_options[ 'tile_description' ] ); ?></p>
					<p><a class="btn btn-primary" href="<?php echo sanitize_text_field( $tile_two_options[ 'tile_link' ] ); ?>" role="button"><?php echo sanitize_text_field( $tile_two_options[ 'tile_linktext' ] ); ?></a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?php echo $tile_three_options[ 'tile_image' ]; ?>" alt="thumbnail">
				<div class="caption">
					<h3><?php echo sanitize_text_field( $tile_three_options[ 'tile_header' ] ); ?></h3>
					<p><?php echo sanitize_text_field( $tile_three_options[ 'tile_description' ] ); ?></p>
					<p><a class="btn btn-primary" href="<?php echo sanitize_text_field( $tile_three_options[ 'tile_link' ] ); ?>" role="button"><?php echo sanitize_text_field( $tile_three_options[ 'tile_linktext' ] ); ?></a></p>
				</div>
			</div>
		</div>
	</div> <!-- /.row -->
</div> <!-- /.container for section tiles -->

<!-- Featurettes
================================================================= -->
<div class="container">

	<?php if( $featurette_one_options[ 'featurette_visibility' ] ) { ?>
		<hr class="featurette-divider">
		<div class="featurette">
			<div class="featurette-image-padding">
				<img class="featurette-image pull-right" src="<?php echo $featurette_one_options[ 'featurette_image' ]; ?>">
			</div>
			<h2 class="featurette-heading"><?php echo sanitize_text_field( $featurette_one_options[ 'featurette_header' ] ); ?> <span class="muted"><?php echo sanitize_text_field( $featurette_one_options[ 'featurette_subheader' ] ); ?></span></h2>
			<p class="lead"><?php echo sanitize_text_field( $featurette_one_options[ 'featurette_description' ] ); ?></p>
			<p><a class="btn btn-primary btn-large" href="<?php echo sanitize_text_field( $featurette_one_options[ 'featurette_link' ] ); ?>" role="button"><?php echo sanitize_text_field( $featurette_one_options[ 'featurette_linktext' ] ); ?></a></p>
		</div>
	<?php } // end if ?>


	<?php if( $featurette_two_options[ 'featurette_visibility' ] ) { ?>
		<hr class="featurette-divider">
		<div class="featurette">
			<div class="featurette-image-padding">
				<img class="featurette-image pull-left" src="<?php echo $featurette_two_options[ 'featurette_image' ]; ?>">
			</div>
			<h2 class="featurette-heading"><?php echo sanitize_text_field( $featurette_two_options[ 'featurette_header' ] ); ?> <span class="muted"><?php echo sanitize_text_field( $featurette_two_options[ 'featurette_subheader' ] ); ?></span></h2>
			<p class="lead"><?php echo sanitize_text_field( $featurette_two_options[ 'featurette_description' ] ); ?></p>
			<p><a class="btn btn-primary btn-large" href="<?php echo sanitize_text_field( $featurette_two_options[ 'featurette_link' ] ); ?>" role="button"><?php echo sanitize_text_field( $featurette_two_options[ 'featurette_linktext' ] ); ?></a></p>
		</div>
	<?php } // end if ?>

	<?php if( $featurette_three_options[ 'featurette_visibility' ] ) { ?>
		<hr class="featurette-divider">
		<div class="featurette">
			<div class="featurette-image-padding">
				<img class="featurette-image pull-right" src="<?php echo $featurette_three_options[ 'featurette_image' ]; ?>">
			</div>
			<h2 class="featurette-heading"><?php echo sanitize_text_field( $featurette_three_options[ 'featurette_header' ] ); ?> <span class="muted"><?php echo sanitize_text_field( $featurette_three_options[ 'featurette_subheader' ] ); ?></span></h2>
			<p class="lead"><?php echo sanitize_text_field( $featurette_three_options[ 'featurette_description' ] ); ?></p>
			<p><a class="btn btn-primary btn-large" href="<?php echo sanitize_text_field( $featurette_three_options[ 'featurette_link' ] ); ?>" role="button"><?php echo sanitize_text_field( $featurette_three_options[ 'featurette_linktext' ] ); ?></a></p>
		</div>
	<?php } // end if ?>

</div> <!-- /.container for featurettes -->


<?php get_footer(); ?>