<?php
/**
 *
 * Template Name: Choice Device page
 *
 */
get_header(); ?>

	<main class="steps">
        <div class="inner"> 

          <div class="top_links page-content-custom">
            <div class="top_links_text">
                <p>Choose Custom/Device</p>
                <h2>カスタム/装備を選ぶ</h2>
            </div>
          </div>

          <div class="-flex flex-start steps_top pc-content">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/step_car.png" class="steps_car">
              <ul class="steps_car-price-list">
                <li class="is-active">
                  <dl class="-flex js">
                    <dt>車両本体価格<br>
                      (消費税込)</dt>
                    <dd>3,765,500<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>ボディカラー価格<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>メーカーオプション価格<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>カスタム/装備価格<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>セキュリティ/コーティング<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li class="is-active">
                  <dl class="-flex js">
                    <dt>合計金額<br>
                      (消費税込)</dt>
                    <dd>3,765,500<span><span>円</span></span></dd>
                  </dl>
                </li>

                <li class="btn">
                    <a href="" class="step_btn forward"><button>セキュリティ/コーティングを選ぶ　<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></button></a>
                </li>
                <li class="btn">
                  <a href="" class="step_btn back"><button><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i>　戻る</button></a>
                </li>

              </ul>
          </div>
          <div class="car-image sp-content">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/step_car.png" class="steps_car">
          </div>
          <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'tab1')"><img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1.png"><span style="margin-top: 20px;">エクステリアパーツ</span></button>
            <button class="tablinks" onclick="openTab(event, 'tab2')"><img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab2.png"><span>インテリアパーツ</span></button>
          </div>

          <div id="tab1" class="tab-content -flex steps_bottom wrap js">
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct1.png">
                <p class="tt-spec"><small>フロントスポイラー【Ⅲ型標準ボディ専用】</small></p>
                <p class="price-custom">+37400円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct2.png">
                <p class="tt-spec"><small>フロントスポイラー【Ⅲ型標準ボディ専用】</small></p>
                <p class="price-custom">+47,080円～106,480円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct3.png">
                <p class="tt-spec"><small>フロントスポイラー【フロントハーフスポイラー Ver.2　【Ⅳ型・標準ボディ用】】</small></p>
                <p class="price-custom">+43,780円～99,880円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct4.png">
                <p class="tt-spec"><small>フロントハーフスポイラー Ver3</small></p>
                <p class="price-custom">+33,000円～44,000円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct5.png">
                <p class="tt-spec"><small>サイドステップ Ver.1</small></p>
                <p class="price-custom">+33,000円～44,000円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct6.png">
                <p class="tt-spec"><small>サイドステップ Ver.3　【Ⅰ-Ⅳ型・標準ボディ/ワイドボディ】</small></p>
                <p class="price-custom">+¥45,980円～102,080円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
          </div>

          <div id="tab2" class="tab-content -flex steps_bottom wrap js">
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct1.png">
                <p class="tt-spec"><small>フロントスポイラー【Ⅲ型標準ボディ専用】</small></p>
                <p class="price-custom">+37400円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct2.png">
                <p class="tt-spec"><small>サイドステップ Ver.3　【Ⅰ-Ⅳ型・標準ボディ/ワイドボディ】</small></p>
                <p class="price-custom">+43,780円～99,880円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
            <div class="option-box">
              <div class="option-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/custom-device/tab1-ct3.png">
                <p class="tt-spec"><small>サイドステップ Ver.3　【Ⅰ-Ⅳ型・標準ボディ/ワイドボディ】</small></p>
                <p class="price-custom">¥45,980円～102,080円</p>
              </div>
              <div class="option-plus">
                <p>＋</p>
              </div>
            </div>
          </div>
          <div class="steps-info-detail-sp sp-content">
            <ul class="steps_car-price-list sp-list">
                <li class="is-active">
                  <dl class="-flex js">
                    <dt>車両本体価格<br>
                      (消費税込)</dt>
                    <dd>3,765,500<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>ボディカラー価格<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>メーカーオプション価格<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>カスタム/装備価格<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li>
                  <dl class="-flex js">
                    <dt>セキュリティ/コーティング<br>
                      (消費税込)</dt>
                    <dd>0<span>円</span></dd>
                  </dl>
                </li>
                <li class="is-active">
                  <dl class="-flex js">
                    <dt>合計金額<br>
                      (消費税込)</dt>
                    <dd>3,765,500<span><span>円</span></span></dd>
                  </dl>
                </li>

                <li class="btn">
                    <a href="" class="step_btn forward"><button>セキュリティ/コーティングを選ぶ　<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></button></a>
                </li>
                <li class="btn">
                  <a href="" class="step_btn back"><button><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i>　戻る</button></a>
                </li>

              </ul>
          </div>
      </main>

<?php get_footer(); ?>