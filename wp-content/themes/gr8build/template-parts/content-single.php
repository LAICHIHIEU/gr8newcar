<?php
/**
 * Template part for displaying posts
 *
 */

?>

<div class="title-news-detail">
    <small><?php echo get_the_date(); ?></small>
    <h2><?php echo the_title(); ?></h2>
</div>
<!-- news detail -->
<div class="news-content">
    <div class="images-detail">
      <div class="news-img"><?php the_post_thumbnail("full",array( "title" => get_the_title(),"alt" => get_the_title() ));?></div>
    </div>
    <div class="text-detail">
        <?php the_content(); ?>
    </div>
</div>
