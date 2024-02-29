<?php
/**
 * Header file
 *
 */
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>愛知県のハイエースカスタム・オリジナルエアロ・コンプリートカーGR8</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="icon" href="https://www.gr8style.co.jp/wp-content/uploads/2022/06/cropped-7a42e4a8755d20ed68b9ae998150886e-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.gr8style.co.jp/wp-content/uploads/2022/06/cropped-7a42e4a8755d20ed68b9ae998150886e-180x180.png" />

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
        <div class="logo">
            <p class="pc-content">愛知県のハイエースカスタム・オリジナルエアロ・コンプリートカー</p>
            <a href="<?php echo get_home_url(); ?>"><h1 class="-flex al-center sp-content-left"><img class="big-logo-sp" src="<?php echo get_template_directory_uri();?>/assets/img/logo-primary.png" alt="株式会社GR8" style="margin-right: 10px;">
              <img class="small-logo-sp" src="<?php echo get_template_directory_uri();?>/assets/img/header_logo2.png" alt="株式会社GR8"></h1></a>
            <div class="sp-menu-icon">
              <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
                <span class="menu-item"></span>
                <span class="menu-item"></span>
                <span class="menu-item"></span>
              </a>
            </div>  
        </div>
        <a href="<?php echo get_home_url(); ?>/contact/" class="contact pc-content">お問い合わせ</a>

        <div class="sp-menu">
          <nav class="mobile-nav-wrap" role="navigation">
            <ul id="sp-menu-all" class="mobile-header-nav sp-menu-content">
              <li id="main-menu" class="main-menu"><a>無料新車見積もり</a>
                <ul class="sp-sub-menu">
                  <li id="" class=""><a target="_blank" rel="noopener" href="<?php echo get_home_url(); ?>">1から作る</a></li>
                  <li id="" class=""><a target="_blank" rel="noopener" href="<?php echo get_home_url(); ?>">パッケージから作る</a></li> 
                </ul>
              </li>
              <li id="main-menu" class="main-menu"><a>在庫即納新車</a>
                <ul class="sp-sub-menu">
                  <li id="" class=""><a href="">春日井店</a></li>
                  <li id="" class=""><a href="">大府店</a></li>
                  <li id="" class=""><a href="">岡崎店</a></li>   
                </ul>
              </li>
              <div class="content-top-menu-sp">
                <p>愛知県のハイエースカスタム・オリジナルエアロ・コンプリートカー</p>
                <a href=""><span>お問い合わせ</span></a>
              </div>
            </ul>
          </nav>
          
        </div>
        
        <ul id="menu-global-menu" class="js-globalNav__items l-globalNav__items p-globalNav__items pc-content">
          <li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93"><a>無料新車見積もり</a>
            <ul class="sub-menu">
              <li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a target="_blank" rel="noopener" href="">1から作る</a></li>
              <li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a target="_blank" rel="noopener" href="">パッケージから作る</a></li> 
            </ul>
          </li>
          <li id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99"><a>在庫即納新車</a>
            <ul class="sub-menu">
              <li id="menu-item-100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-100"><a href="">春日井店</a></li>
              <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="">大府店</a></li>
              <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="">岡崎店</a></li>   
            </ul>
          </li>
        </ul>

    </header>

