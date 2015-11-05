<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php get_header(); ?>

<?php

	// Load Post Meta options into a variable
	$general_options = get_option( 'general_options' );

	if( !isset( $general_options[ 'display_post_meta' ] ) ) {
		$general_options[ 'display_post_meta' ] = false;
	}

?>

<div class="container">
	<section class="row">
		<div class="col-md-8">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<article <?php post_class( 'post-summary' ); ?>>

					<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>

					<?php if( $general_options[ 'display_post_meta' ] == true ) { ?>

						<ul class="post-meta">
							<li class='author'>
								<span class="sar-avatar small">
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
								</span>
								by <?php the_author_posts_link(); ?>
							</li>
							<li class="category">in <?php the_category( ', ' ); ?></li>
							<li class="date">on <?php the_time( 'F j, Y' ); ?></li>
						</ul>

					<?php } ?>

					<?php if( get_the_post_thumbnail() ) : ?>
						<div class="img-container">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>

					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<?php comments_template(); ?>

				</article>
				

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no results found.', 'sar' ); ?></p>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</section>
</div>


<?php get_footer(); ?>