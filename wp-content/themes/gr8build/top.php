<?php
/**
 *
 * Template Name: Top Page
 *
 */
get_header(); ?>

<div class="p-swiper__container -main">
        <!-- Slider 全体のコンテナー -->
        <div class="swiper -main">
          <!-- Sliderの内包コンテナー -->
          <ul class="swiper-wrapper">
            <!-- スライドするコンテンツ -->
          <?php $slider = SCF::get_option_meta( 'slider-option', 'slider' ); ?>
          <?php foreach ($slider as $slider_item) :?>
            <?php $image = wp_get_attachment_image_src( $slider_item['slider-image'], 'full' ); ?>
            <li class="swiper-slide -main">
              <a href="<?php echo $slider_item['slider-url'];?>" class="swiper__item -main" target="_blank">
                <img src="<?php echo esc_html($image[0]) ;?>" alt="" decoding='async'>
              </a>
            </li>
          <?php endforeach;?>

          <?php $slider = SCF::get_option_meta( 'slider-option', 'sliderimage' ); ?>
          <?php foreach ($slider as $slider_item) :?>
            <?php $image = wp_get_attachment_image_src( $slider_item['sliderimageonly'], 'full' ); ?>
            <li class="swiper-slide -main swiper__item -main">
                <img src="<?php echo esc_html($image[0]) ;?>" alt="" decoding='async'>
            </li>
          <?php endforeach;?>
            <!-- スライドするコンテンツ -->
                <!-- <li class="swiper-slide -main">
                <a href="https://www.goo-net.com/php/search/summary.php?baitai=0208506&client_id=0208506,0206645&area_id=15&ef_flag=1" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2022/05/aaafe83e007e86fc8c123bca81408dc9.jpg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://www.gr8style.co.jp/store-online/product/beginnersset-n/" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2024/01/1d9c1135db7a9502d42cbfb1132cb644.jpeg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://www.gr8style.co.jp/news/oam2024/" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2024/01/OAM.001.jpeg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://lin.ee/n6EODjH" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2023/12/6679f4fb44953f26b69cede73f4a1c31.jpeg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2023/11/546dc2cdb413cd2da1608b2eaedc86a0.jpeg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://www.gr8style.co.jp/store-online/" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2022/05/5f5dfb3571cc2012dfe478a76a31dd8b.jpg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://www.gr8style.co.jp/news/cclassic-bk/" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2023/03/5f181baf06fd3035fc796b73aef2e627-1.jpeg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://lin.ee/hHslPhv" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2023/09/suraida-.002.jpeg" alt="" decoding='async'>
                </a>
              </li>
                                    <li class="swiper-slide -main">
                <a href="https://www.instagram.com/gr8style_japan/" class="swiper__item -main" target="_blank" rel="noopener">
                  <img src="https://www.gr8style.co.jp/wp-content/uploads/2022/05/0a54aabf30b911017996878cc7ed8b85.jpg" alt="" decoding='async'>
                </a>
              </li> -->
            </ul>
  
        </div>
        <!-- ページネーション（省略可能） -->
        <div class="swiper-button-prev -main"></div>
        <div class="swiper-button-next -main"></div>
        <div class="swiper-pagination -main"></div>
      </div>

    <main>
      	<div class="inner"> 
        	<div class="top_links">
	            <div class="top_links_text">
	                <p>New car quote</p>
	                <h2>無料新車見積もり</h2>
	            </div>
            	<div class="-flex sp-block js">
                	<div class="top_links_text-link">
	                	<a><img src="<?php echo get_template_directory_uri();?>/assets/img/top_links1.png" ></a>
	                	<p class="txt-center">１から作る</p>
                	</div>
	                <div class="top_links_text-link">
	                    <a><img src="<?php echo get_template_directory_uri();?>/assets/img/top_links2.png"></a>
	                    <p class="txt-center">パッケージから作る</p>
	                </div>
            	</div>
        	</div>

        	<div class="top_links">
	            <div class="top_links_text">
	                <p>New cars in stock and ready to ship</p>
	                <h2>在庫即納新車</h2>
	            </div>
            	<div class="-flex sp-block js">
	                <div class="top_links_text-link ipad-content">
		                <a>
		                  <img class="pc-content" src="<?php echo get_template_directory_uri();?>/assets/img/top_links3.png">
		                  <img class="sp-content" src="<?php echo get_template_directory_uri();?>/assets/img/top/top-sp1.png">
		                </a>
	                	<p class="txt-center">春日井店</p>
	                </div>
                	<div class="top_links_text-link ipad-content">
	                    <a>
	                      <img class="pc-content" src="<?php echo get_template_directory_uri();?>/assets/img/top_links4.png">
	                      <img class="sp-content" src="<?php echo get_template_directory_uri();?>/assets/img/top/top-sp2.png">
	                    </a>
                    	<p class="txt-center">大府店</p>
                	</div>
                	<div class="top_links_text-link ipad-content">
	                    <a>
	                      <img class="pc-content" src="<?php echo get_template_directory_uri();?>/assets/img/top_links5.png">
	                      <img class="sp-content" src="<?php echo get_template_directory_uri();?>/assets/img/top/top-sp3.png">
	                    </a>
                    	<p class="txt-center">岡崎店</p>
                	</div>
            	</div>
        	</div>  
      		<a href="" class="btn1"><button>コーポレートサイトに戻る</button></a>
   
	      	<div class="top_links">
		        <div class="top_links_text">
		            <p>News</p>
		            <h2>お知らせ</h2>
                <?php $catquery = new WP_Query( 'cat=1&posts_per_page=3' ); ?>
		              <ul class="news-list">    
                    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                      <li><a href="<?php the_permalink() ?>">2024.07.01<span><?php the_title(); ?></span></a></li>
                    <?php endwhile;
                  wp_reset_postdata();?>
		                
<!-- 		                <li><a href="">2024.07.01<span>WEBサイトをオープンしました</span></a></li>
		                <li><a href="">2024.07.01<span>WEBサイトをオープンしました</span></a></li> -->

		            </ul>
		        </div>
	    	</div>
		</div>
	</main>

<?php get_footer(); ?>