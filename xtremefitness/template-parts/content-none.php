<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package XtremeFitness
 */
?>
<section class="no-results not-found pb-5">
	<header class="page-header">
		<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'xtremefitness' ); ?></h2>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'xtremefitness' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'xtremefitness' ); ?></p>
			<?php
			get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'xtremefitness' ); ?></p>
			<?php
			get_search_form();

		endif;?>
	</div><!-- .page-content -->
</section><!-- .no-results -->