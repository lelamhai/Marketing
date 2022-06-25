<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Softkey_Marketing
 */

if ( ! function_exists( 'softkey_marketing_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function softkey_marketing_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'softkey-marketing' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'softkey_marketing_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function softkey_marketing_posted_by() {
		$queried_obj = get_queried_object();
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'softkey-marketing' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID', $queried_obj->post_author ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name', $queried_obj->post_author ) ) . '</a></span>'
		);
		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'softkey_marketing_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function softkey_marketing_entry_footer( $text_active = false ) {
		$categories_text = ($text_active === true) ? __('Posted in ') : '';
		$tags_text = ($text_active === true) ? __('Tagged ') : '';

		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' ', 'softkey-marketing' ) );

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'softkey-marketing' ) );

			$both_cat_tag_exists = ( $categories_list && $tags_list ) ? true : false;

			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				$categories_el = ( $both_cat_tag_exists = false ) ? '<span class="cat-links">' : '';
				$categories_el_end = ( $both_cat_tag_exists = false ) ? '</span>' : '';
				printf( $categories_el . esc_html__( $categories_text . '%1$s', 'softkey-marketing' ) . $categories_el_end, $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				$tags_el = ( $both_cat_tag_exists === true ) ? '<span class="tags-links">' : ' ';
				$tags_el_end = ( $both_cat_tag_exists === true ) ? '</span>' : '';
				printf( $tags_el . esc_html__(  $tags_text . '%1$s', 'softkey-marketing' ) . $tags_el_end, $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		// if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		// 	echo '<span class="comments-link">';
		// 	comments_popup_link(
		// 		sprintf(
		// 			wp_kses(
		// 				/* translators: %s: post title */
		// 				__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'softkey-marketing' ),
		// 				array(
		// 					'span' => array(
		// 						'class' => array(),
		// 					),
		// 				)
		// 			),
		// 			wp_kses_post( get_the_title() )
		// 		)
		// 	);
		// 	echo '</span>';
		// }

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'softkey-marketing' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'softkey_marketing_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function softkey_marketing_post_thumbnail($is_banner = false ) {

		if ( post_password_required() || is_attachment() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->
		<?php elseif( $is_banner === true ): ?>
			<div class="post-thumbnail">
				<?php 
					if ( is_archive() ) {
						$queried_obj = get_queried_object();
						$image_obj = get_field('cat-image', $queried_obj);
						$image_id = ( $image_obj ) ? $image_obj : '';
					} elseif( is_singular() ) {
						$image_id = ( has_post_thumbnail() ) ? get_post_thumbnail_id() : '';
					} else {
						$image_id = '';
					}
					$banner_image = ( !empty($image_id) ) ? wp_get_attachment_image( $image_id, array('700', '600'), "", array( "class" => "img-responsive" ) ) : '<img src="'. get_template_directory_uri() .'/assets/imgs/blog-background.png"/>';
					echo $banner_image;
				?>
			</div><!-- .post-thumbnail -->
		<?php else : ?>
			<div class="post-thumbnail-wrap">
				<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php
						the_post_thumbnail(
							'post-thumbnail',
							array(
								'alt' => the_title_attribute(
									array(
										'echo' => false,
									)
								),
							)
						);
					?>
				</a>
			</div>
			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
