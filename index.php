<?php

//設定ファイル読み込み
require_once 'admin/conf.php';
//ファンクションファイル読み込み
require_once 'admin/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>Wandastic</title>
<meta name="description" content="Motion Graphics / 3DCG / Animation">
<meta name="keywords" content="映像制作,モーショングラフィック,アニメーション,Wandastic,ワンダスティック">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/modal-video.min.css">

<!-- photo css -->
<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>

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

<script src="js/jquery.cookie.js"></script>	
	
<script src="js/jquery.showmore.min.js"></script>

<script src="js/jquery.inview.min.js"></script>

<script src="js/modal-video.js"></script>

<!--フェード　プラグイン-->
<script>
$(function() {
	var h = $(window).height(); //ブラウザウィンドウの高さを取得
	$('#main-contents').css('display','none'); //初期状態ではメインコンテンツを非表示
	$('#topfade-bg ,#topfade').height(h).css('display','block'); //ウィンドウの高さに合わせでローディング画面を表示
	});
	$(window).load(function () {
		$('#topfade-bg').delay(1000).fadeOut(500); //$('#loader-bg').fadeOut(800);でも可
		$('#topfade').delay(800).fadeOut(500); //$('#loader').fadeOut(300);でも可
		$('#main-contents').css('display', 'block'); // ページ読み込みが終わったらメインコンテンツを表示する
		});
		$(function(){
			setTimeout('stopload()',3000);　//いつまでもローディング状態にならないように3秒で強制表示させる
			});
			function stopload(){ //強制表示の関数
			$('#main-contents').css('display','block');
			$('#topfade-bg').delay(1000).fadeOut(500);
			$('#topfade').delay(800).fadeOut(300);
}
</script>

<script>
$(function(){
    if($.cookie("access")){
        $('#topfade-bg').css({display:'none'});
    }
    $(window).load(function(){
        $.cookie("access",$('body').addClass('access'));
    })
});
</script>

<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".rcm-box").width();
    var imgheight = (imgWidth*0.36);
    $(".rcm-box").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".rcm-box").width();
    var imgheight = (imgWidth*0.36);
    $(".rcm-box").css('height',imgheight);
});
</script>
<!--画像調整-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
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

<!--アニメーション　プラグイン-->
<script>
$(function() {
	$('.list-mv02').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mv02');
		}
		else{
			$(this).stop().removeClass('mv02');
		}
	});
});
</script>
<!--アニメーション　プラグイン--> 

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

<div id="topfade-bg"> 
<div id="topfade">
<div id="" class="top-animation animated fadeOut"><img src="img/logo.svg" alt="映像・グラフィック「ワンダースティック」"></div>
</div>
</div>

<div class="drawer drawer--right">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-top"><a class="drawer-brand" href="index.php" title="映像・グラフィック「ワンダースティック」ワークス">works<div class="drawer-line"></div></a></li>
        <li><a class="drawer-brand" href="about.php" title="映像・グラフィック「ワンダースティック」アバウト">about</a></li>        
        <li><a class="drawer-brand" href="info.php" title="映像・グラフィック「ワンダースティック」インフォメーション">info</a></li>   
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title="映像・グラフィック「ワンダースティック」"><img src="img/logo.svg" alt="映像・グラフィック「ワンダースティック」"></a></h1>
    <li class="menu__single">
      <a href="index.php" title="映像・グラフィック「ワンダースティック」ワークス">works<div class="menu_line"></div></a>
    </li>
    <li class="menu__single">
      <a href="about.php" title="映像・グラフィック「ワンダースティック」アバウト">about</a>
    </li>  
    <li class="menu__single">
      <a href="info.php" title="映像・グラフィック「ワンダースティック」インフォメーション">info</a>
    </li>               
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php"><img src="img/logo.svg" alt="映像・グラフィック「ワンダースティック」"></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div class="top_img_area">
  <?php 
	$result=mysqli_query($sql, "SELECT * From `data2` WHERE `name2` = 'demoreel'");
	
while($row=mysqli_fetch_assoc($result)){
include('admin/parts/basic_hensu3.php');
	
	if($photo1 == $empty){
	echo "";
}else{
		if($link1 == $empty){
	echo "<img src=\"admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" />";
}else{
		echo "<a class=\"btn_vimeo js-video-vimeo-btn\" data-video-id='".$link1."'><img src=\"admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" /></a>";
	}
	}
}
	?>
  <script>
  window.addEventListener('DOMContentLoaded',function(){
	  new ModalVideo(".js-video-vimeo-btn",{channel:'vimeo'});
	  });
  </script>
  
</div>
  
<div class="top_works_bg">
  <div class="top_contents_in">
    <div class="top_featured">featured</div>
   
    <div class="wrapper">
		<?php
$result=mysqli_query($sql, "SELECT * From `data` ORDER by id DESC");
$cnt=mysqli_num_rows($result);

//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('admin/parts/basic_hensu.php');

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);


	//▽表示内容ここから
	
//TDタグ開始
			echo "<div class=\"element_top\"><ul class=\"list\"><li class=\"list-mv02\"><a href=\"works.php?name2=".$name2."\"><div class=\"top_works_box\"><div class=\"rcm-box\">";

			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"admin/photo/no_photo.jpg?".$koshin."\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"admin/".$photo1.".jpg?".$koshin."\" alt=\"".$name."\" />\n";
}


			
			echo "<div class=\"rcm-overlay\"><div class=\"rcm-contents\">";
	
	if($profinfo2 == '1'){
	echo "<p class=\"rcm-title\">\n";
}elseif($profinfo2 == '2'){
	echo "<p class=\"rcm-title\" style=\"color: #FFF;\">\n";
}
			echo $comment2."</p></div></div></div></div><!--top_works_box--></a></li></ul></div>";
			


}

?>          
                                                                                                                                                                   
    </div><!--wrapper-->
 
  </div>  
</div> 


  
<div id="footer">
  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_in">    
    <p>© 2020 Wandastic.</p>
  </div> 
</div><!--footer-->

</main>

</div><!--drawer drawer--left-->

</body>

</html>