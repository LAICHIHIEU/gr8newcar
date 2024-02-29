const mainSwiper = new Swiper('.swiper.-main', {
  // 繧ｪ繝励す繝ｧ繝ｳ
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  spaceBetween: 10,
  centeredSlides: true,
  initialSlide: 1,
  // 繝壹�繧ｸ繝阪�繧ｷ繝ｧ繝ｳ蛻ｩ篆､譎�
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  // 繝翫ン繧ｲ繝ｼ繧ｷ繝ｧ繝ｳ繝懊ち繝ｳ蛻ｩ篆､譎�
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 5000,
  },

  breakpoints: {
    769: {
      direction: 'horizontal',
      loop: true,
      slidesPerView: 1.5,
      spaceBetween: 10,
      centeredSlides: true,
      initialSlide: 1,
      // 繝壹�繧ｸ繝阪�繧ｷ繝ｧ繝ｳ蛻ｩ篆､譎�
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      // 繝翫ン繧ｲ繝ｼ繧ｷ繝ｧ繝ｳ繝懊ち繝ｳ蛻ｩ篆､譎�
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
      },
    }
  }
})



const mySwiper = new Swiper('.swiper.-item', {
  // 繧ｪ繝励す繝ｧ繝ｳ
  direction: 'horizontal',
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  // 繝翫ン繧ｲ繝ｼ繧ｷ繝ｧ繝ｳ繝懊ち繝ｳ蛻ｩ篆､譎�
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    769: {
      direction: 'horizontal',
      loop: true,
      slidesPerView: 4,
      spaceBetween: 40,
      // 繝翫ン繧ｲ繝ｼ繧ｷ繝ｧ繝ｳ繝懊ち繝ｳ蛻ｩ篆､譎�
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    }
  }
});


jQuery(function ($) {
  /* ==============================
    繝倥ャ繝繝ｼ
  ============================== */
  /*
    繧ｰ繝ｭ繝ｼ繝舌Ν繝翫ン
  ---------------------------------*/
  // 繧ｰ繝ｭ繝ｼ繝舌Ν繝翫ン繝｡繝九Η繝ｼ繧偵�繝舌�
  $('.js-globalNav__items').children('li').hover(function () {
    // 蟄舌Γ繝九Η繝ｼ縺ゅｋ隕∫ｴ�縺ｫ繧ｯ繝ｩ繧ｹ莉倅ｸ弱∝ｭ舌Γ繝九Η繝ｼ縺ｪ縺励°縺､縺雁撫縺�粋繧上○繝懊ち繝ｳ莉･螟悶↓繧ゆｻ倅ｸ�
    // 繝帙ヰ繝ｼ譎ゅ�繧｢繝九Γ繝ｼ繧ｷ繝ｧ繝ｳ繧辰SS縺ｧ蛻ｶ蠕｡縺吶ｋ縺溘ａ縺ｮ繧ｯ繝ｩ繧ｹ
    if ($(this).hasClass('menu-item-has-children')) {
      $(this).toggleClass('is-childMenuActive');
    } else if (!$(this).hasClass('p-globalNav__contact')) {
      $(this).toggleClass('is-singleMenuActive');
    }
  });

  /* ==============================
  Drawer
============================== */
  $('.js-drawer').click(function () {
    $('body').toggleClass('is-drawerActive');

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true);
    } else {
      $(this).attr('aria-expanded', false);
    }
  });
})



  if (window.matchMedia('(max-width:768px)').matches) {
    $(function() {
    
      $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
          $(".half").fadeIn("fast");
        } else {
          $(".half").fadeOut("fast");
        }
    
        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $("footer").innerHeight();
    
        if ( scrollHeight - scrollPosition  <= footHeight ) {
          $(".half").css({
            "position":"absolute",
          });
        } else {
          $(".half").css({
            "position":"fixed",
          });
        }
      });
    
    });
    }else if (window.matchMedia("(min-width:767px)").matches) {
      $(".half").css({
        "display":"none",
      });
    }

    function validateForm() {
      var checkbox = document.getElementById("checkbox-single");
      var submitButton = document.querySelector('.submit-button');
      var alertMessage = document.querySelector('.alert');

      if (!checkbox.checked) {
          alertMessage.innerText = "※個人情報の取扱いについて同意するにチェックを入れて下さい";
          submitButton.disabled = true;
      } else {
          alertMessage.innerText = "";
          submitButton.disabled = false;
      }
  }


// open mobile menu
$('.js-toggle-menu').click(function(e){
  e.preventDefault();
  $('.mobile-header-nav').slideToggle();
  $(this).toggleClass('open');
});

// $(document).ready(function() {
//     $('#toggle').click(function() {
//         $('nav').slideToggle();
//     });
// })


function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
}
// Mặc định hiển thị tab đầu tiên
document.getElementById("tab1").style.display = "flex"; // Hiển thị tab đầu tiên
document.querySelector(".tablinks").classList.add("active"); // Đánh dấu tab đầu tiên là active