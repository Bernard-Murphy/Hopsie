<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Marketing Site</li>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#">Three</a></li>
          <li><a href="#">Four</a></li>
          <li><a href="#">Five</a></li>
          <li><a href="#">Six</a></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="row columns">
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <ul class="orbit-container">
          <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
          <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
          <li class="orbit-slide is-active">
            <img src="https://placehold.it/1200x450">
          </li>
          <li class="orbit-slide">
            <img src="https://placehold.it/1200x450">
          </li>
          <li class="orbit-slide">
            <img src="https://placehold.it/1200x450">
          </li>
          <li class="orbit-slide">
            <img src="https://placehold.it/1200x450">
          </li>
        </ul>
      </div>
    </div>

    <div class="row column text-center">
      <h1>Bernard Murphy</h1>
      <p class="lead">This is a test Wordpress site, hosted on BernardMurphy.net</p>
      <a href="#" class="button large">Learn More</a>
      <a href="#" class="button large hollow">Learn Less</a>
    </div>

    <hr>

    <div class="row">
      <div class="medium-6 large-3 columns">
        <h3>Lorum</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-6 large-3 columns">
        <h3>Ipsum</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-6 large-3 columns">
        <h3>Dolor</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
      <div class="medium-6 large-3 columns">
        <h3>Sit Amet</h3>
        <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
      </div>
    </div>

    <hr>

    <div class="row column">
      <div class="callout primary text-center">
        <h3>Really Great Deals</h3>
        <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor.</p>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="large-6 columns">
        <h4>Nulla At Nulla Justo, Eget</h4>
        <img class="thumbnail" src="https://placehold.it/700x250">
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in.</p>
      </div>
      <div class="large-6 columns">
        <h4>Nulla At Nulla Justo, Eget</h4>
        <img class="thumbnail" src="https://placehold.it/700x250">
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo consequat posuere. Vestibulum ante ipsum primis in.</p>
      </div>
    </div>

    <hr>

    <div class="row column">
      <ul class="menu">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
      </ul>
    </div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
