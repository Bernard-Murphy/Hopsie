<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article <?php post_class( 'group' ); ?> role="article">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>

  <?php endwhile; endif; ?>
  <script src="http://localhost/wordpress/wp-includes/js/vendor.js"></script>
  <script src="http://localhost/wordpress/wp-includes/js/foundation.js"></script>
</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
