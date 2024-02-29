<?php
/**
 * The template for displaying archive pages
 *
 */

get_header(); ?>

<div class="post-list-content">
  <div class="banner-post-list">
    <div class="inner">
      <h1>お知らせ</h1>
    </div>
  </div>
  <div class="inner">
    <div class="breadcrumb">
      <div class="wrapper">
        <a href="">TOP</a>
        <i class="fas fa-chevron-right"></i>
        <a href="">お知らせ</a>
      </div>
    </div>
    <div class="post-list-detail">
      <div class="post-list-item">
        <ul>
            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : ?>
              <?php the_post(); ?>
                <?php get_template_part( 'template-parts/content-post'); ?>
              <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content/content-none' ); ?>
            <?php endif; ?>
        </ul>
       
      </div>
    </div>
    
  </div>
</div>


<?php get_footer(); ?>

