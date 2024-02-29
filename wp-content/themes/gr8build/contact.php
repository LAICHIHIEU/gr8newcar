<?php
/**
 * Template Name: Contact
 *
 */

get_header(); ?>

	<div class="content-page-all">
		<div class="banner-page-all">
			<div class="inner">
		      <h1>お問い合わせ</h1>
		    </div>
		</div>
		<div class="detail-page-all">
			<div class="inner">
				<div class="breadcrumb">
			      <div class="wrapper">
			        <a href="">TOP</a>
			        <i class="fas fa-chevron-right"></i>
			        <a href="">お問い合わせ</a>
			      </div>
			    </div>
			    <div class="content-text-page">
			    	<div class="p-contact__tel">
				        <h2 class="p-heading-secondary -sideLine">お電話でのお問い合わせ</h2>
				        <div class="l-wrapper">
				          <div class="p-telButtons">
				            <p class="p-telButtons__item"><a href="tel:0120-927-968" class="c-button p-telButton js-buttonIcon"><span class="p-telButton__label">GR8 STYLE 春日井店</span><span class="p-telButton__number"><img src="https://www.gr8style.co.jp/wp-content/themes/gr8style/assets/images/common/icon-freedial-secondary_off.png" alt="" class="p-telButton__icon">0120-927-968</span></a></p>
				            <p class="p-telButtons__item"><a href="tel:0120-968-106" class="c-button p-telButton js-buttonIcon"><span class="p-telButton__label">GR8 STYLE 大府店</span><span class="p-telButton__number"><img src="https://www.gr8style.co.jp/wp-content/themes/gr8style/assets/images/common/icon-freedial-secondary_off.png" alt="" class="p-telButton__icon">0120-968-106</span></a></p>
				          </div>
				          <p class="u-center"><a href="tel:0120-882-817" class="c-button p-telButton js-buttonIcon"><span class="p-telButton__label">GR8 OUTDOOR 岡崎店</span><span class="p-telButton__number"><img src="https://www.gr8style.co.jp/wp-content/themes/gr8style/assets/images/common/icon-freedial-secondary_off.png" alt="" class="p-telButton__icon">0120-882-817</span></a></p>
				        </div>
				        <!-- /.l-wrapper -->
				    </div>
			    	<div class="contact-content">
			    		<h2 class="p-heading-secondary -sideLine">フォームでお問合せ</h2>
			    		<div class="l-wrapper">
			    			<?php echo do_shortcode('[contact-form-7 id="9cd94bb" title="Contact"]') ?>
					        <p class="p-contact__note">※迅速な対応を心がけておりますが、返信メールの送信が2日ほどかかる場合がございますので、ご了解ください。（火曜定休）</p>
					        <p class="p-contact__note">※迷惑メールの設定をしている場合、メールが届かないことがございます。【info@gr8style.co.jp】からのメールの受信を許可する設定にご変更をお願いいたします。</p>
					        <p class="p-contact__note"> ※お問い合わせの場合、内容によってはご返答が遅れる場合がございますので、ご了承ください。</p>
			    		</div>
			    		
			    	</div>
			    </div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>