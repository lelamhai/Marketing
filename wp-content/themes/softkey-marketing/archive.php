<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Softkey_Marketing
 */

get_header();

$active_sidebar = is_active_sidebar('sidebar-1');
?>

<main id="primary" class="site-main <?= ($active_sidebar) ? 'hasSecondaryContent' : '' ?>">
	<div class="primaryAndSecondaryContainer">
		<div class="bannerThumbnail">
			<div class="overlay">
				<header class="page-header">
					<?php
						the_archive_title('<h1 class="page-title contentTitle">', '</h1>');
						the_archive_description('<div class="archive-description">', '</div>');
					?>
				</header><!-- .page-header -->
				<div class="back-to-home">
					<a href="<?= home_url(); ?>">Back to home</a>
				</div>
			</div>
			<?php softkey_marketing_post_thumbnail(true); ?>
		</div>
		<div class="primaryAndSecondaryContent">
			<div class="primaryContentContainer">
				<section class="primaryContent" role="main">
					<div class="anim fadeup js-anim is-animated">
						<?php if (have_posts()) : ?>
							<div class="blockContent h-blockContent">
								<div class="wrap-column">
									<?php
									/* Start the Loop */
									while (have_posts()) :
										the_post();

										/*
											* Include the Post-Type-specific template for the content.
											* If you want to override this in a child theme, then include a file
											* called content-___.php (where ___ is the Post Type name) and that will be used instead.
											*/
										get_template_part('template-parts/content', get_post_type());

									endwhile;

									the_posts_navigation();
									?>
								</div>
							</div>
						<?php
						else :

							get_template_part('template-parts/content', 'none');

						endif;
						?>
					</div>
				</section><!-- /primaryContent -->
			</div><!-- /primaryContentContainer -->
			<div class="secondaryContentContainer">
				<?php if ($active_sidebar) : ?>
					<section class="secondaryContent" role="sidebar">
						<?php get_sidebar(); ?>
					</section>
				<?php endif; ?>
				<!-- /secondaryContent -->
			</div><!-- /secondaryContentContainer -->
		</div><!-- /primaryAndSecondaryContent -->
	</div><!-- /primaryAndSecondaryContainer -->
</main><!-- #main -->

<?php
get_footer();
