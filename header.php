<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="http://localhost/wordpress/wp-includes/css/foundation.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

</header>
