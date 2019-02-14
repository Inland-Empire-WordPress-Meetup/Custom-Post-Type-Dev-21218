<?php

/**
 * The template for displaying News Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

  get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
			</header><!-- .page-header -->

			<?php
			// Start the Custom Loop for the events post type.
      
      $args = array('post_type' => 'news', 'posts_per_page' => 2);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
      the_post();

      /*
      * Include the Post-Format-specific template for the content.
      * If you want to override this in a child theme, then include a file
      * called content-___.php (where ___ is the Post Format name) and that will be used instead.
      */
      
      get_template_part('template-parts/content/content', 'news');

				// End the loop.
  endwhile;

			// Previous/next page navigation.
  twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
  else :
    get_template_part('template-parts/content/content', 'none');

  endif;
  ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
