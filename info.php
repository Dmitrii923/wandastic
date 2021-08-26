<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>information｜Wandastic</title>
<meta name="description" content="Motion Graphics / 3DCG / Animation、informationページ">
<meta name="keywords" content="映像制作,モーショングラフィック,アニメーション,Wandastic,ワンダースティック,information">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>


<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 10) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
<!--サイド　プラグイン-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129806242-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129806242-1');
</script>

</head>

<body>

<div class="drawer drawer--right">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-top"><a class="drawer-brand" href="index.php" title="映像・グラフィック「ワンダースティック」ワークス">works</a></li>
        <li><a class="drawer-brand" href="about.php" title="映像・グラフィック「ワンダースティック」アバウト">about</a></li>        
        <li><a class="drawer-brand" href="info.php" title="映像・グラフィック「ワンダースティック」インフォメーション">info<div class="drawer-line"></div></a></li>   
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title="映像・グラフィック「ワンダースティック」"><img src="img/logo.svg" alt="映像・グラフィック「ワンダースティック」"></a></h1>
    <li class="menu__single">
      <a href="index.php" title="映像・グラフィック「ワンダースティック」ワークス">works</a>
    </li>
    <li class="menu__single">
      <a href="about.php" title="映像・グラフィック「ワンダースティック」アバウト">about</a>
    </li>  
    <li class="menu__single">
      <a href="info.php" title="映像・グラフィック「ワンダースティック」インフォメーション">info<div class="menu_line"></div></a>
    </li>               
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title="映像・グラフィック「ワンダースティック」"><img src="img/logo.svg" alt="映像・グラフィック「ワンダースティック」"></a></h1></div>
  <div class="clear"></div>
</div>


<div class="clear"></div>

<div class="page_base_area_3">
  <div class="page_base">
  
  <div class="info_page_bg">

  <div class="wrapper">
    <div class="element_info">
      <div class="info_office_box">
        <img src="img/info.svg"><br />
        <div class="info_office_box_main_1">
        <span style="font-family: 'Montserrat', sans-serif;">〒371-0017</span><br />
        群馬県前橋市日吉町<span style="font-family: 'Montserrat', sans-serif;">1-21-3</span><br />
			グランデステージ瑞樹<span style="font-family: 'Montserrat', sans-serif;">202</span>
        </div>
        <div class="info_office_box_main">
        <span style="font-family: 'Montserrat', sans-serif; font-size: 128%; font-weight: 600;">Wandastic</span><span style=" font-size: 120%;">株式会社</span><br />
        代表 横塚健介<br />
        </div>
        <div class="info_office_box_main_2">
        <span class="info_office_box_mail" style="font-family: 'Montserrat', sans-serif;">info@wandastic.com</span>
        </div>
        <div class="info_office_box_main" style="padding-top: 0; padding-bottom: 0;">
        <span style="font-family: 'Montserrat', sans-serif;">
        Tel: 027-289-0434<br />
        Fax:027-289-0479
        </span>
        </div>
      </div><!--info_office_box-->
    </div><!--element_info-->
    <div class="element_info">
    </div><!--element_info-->
  </div><!--wrapper-->   
   
  </div> 
                                  
  </div><!--page_base-->  
</div><!--page_base_area-->

<div id="footer">
  <div class="footer_in">    
    <p>© 2020 Wandastic.</p>
  </div> 
</div><!--footer-->

</main>

</div><!--drawer drawer--left-->

</body>

</html>