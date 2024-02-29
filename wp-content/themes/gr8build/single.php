<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>
	
	<div class="content-sngle">
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
		    <div class="content-post-text">
		    	<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content-single' );
					endwhile;  
				?>
		    </div>
			
		</div>
	</div>
	

<?php get_footer();
