<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php get_header(); ?>


<div class="container">
	<section class="row">
		<div class="col-md-12">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<div class="post-content">

					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>

				</div>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, page not found.', 'sar' ); ?></p>

			<?php endif; ?>

		</div>
	</section>
</div>


<?php get_footer(); ?>