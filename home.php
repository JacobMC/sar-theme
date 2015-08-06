<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php get_header(); ?>


<div class="container">
	<section class="row">
		<div class="col-md-8">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<article <?php post_class( 'post-summary' ); ?>>

					<?php if( get_the_post_thumbnail() ) :?>

						<div class="row">

							<div class="col-md-7">

								<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>

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

						
								<p class="lead"><?php echo strip_tags( get_the_excerpt() ); ?></p>
							
							</div>
							<div class="col-md-5">
								
								<div class="img-container">
									<?php the_post_thumbnail('medium'); ?>
								</div>

							</div>

						</div>

					<?php else : ?>

						<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>

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

						<p class="lead"><?php echo strip_tags( get_the_excerpt() ); ?></p>

					<?php endif; ?>

				</article>
				<hr>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no results found.', 'sar' ); ?></p>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</section>
</div>


<?php get_footer(); ?>