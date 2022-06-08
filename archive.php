<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package krategus
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<?php
				single_term_title( '<h1 class="entry-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>

				<div class="post-thumbnail">
					</div>
			</header><!-- .page-header -->


			<div class="archive-content">
				<div class="container">
					<div class="archive-grid">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							?>
							<div class="post-cell">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php
								the_post_thumbnail('thumbnail');
							?>
							</a>
							<?php
								the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
								?><time><?php echo get_the_date(); ?></time><?php
								the_excerpt();
							?>
							</div>
							<?php
						endwhile;



					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>
		</div><!-- .entry-content -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
