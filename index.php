<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php get_header(); ?>


<div class="container">
	<section class="row">
		<div class="col-md-12">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<div class="post-summary">

					<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
					<p class="lead"><?php the_content(); ?></p>

				</div>
				<hr>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no results found.', 'sar' ); ?></p>

			<?php endif; ?>

		</div>
	</section>
</div>


<?php get_footer(); ?>