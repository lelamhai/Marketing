<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				<div class="information-box">
					<header class="page-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .page-header -->
					<div class="meta-tags">
						<?php
							softkey_marketing_posted_on();
							softkey_marketing_posted_by();
						?>
						<div class="cat-tag">
							<?php softkey_marketing_entry_footer(); ?>
						</div>
					</div>
				</div>
				<div class="back-to-home">
					<a href="<?php home_url(); ?>">Back to home</a>
				</div>
			</div>
			<?php softkey_marketing_post_thumbnail(); ?>
		</div>
		<div class="primaryAndSecondaryContent">
			<div class="primaryContentContainer">
				<section class="primaryContent" role="main">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'softkey-marketing') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'softkey-marketing') . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

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
get_sidebar();
get_footer();
