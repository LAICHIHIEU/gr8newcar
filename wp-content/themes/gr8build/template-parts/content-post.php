<?php
/**
 * Template part for displaying posts
 *
 */

?>
<li>
  <a href="<?php the_permalink(); ?>">
    <div class="news-img"><?php the_post_thumbnail("medium",array( "title" => get_the_title(),"alt" => get_the_title() ));?></div>
    <div class="news-text">
      <small class="date"><?php echo get_the_date(); ?></small>
      <div class="news-title"><?php echo the_title(); ?></div>
      <?php echo the_excerpt(); ?>
    </div>
  </a>
</li>
