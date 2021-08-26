<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$id = $_POST['id'];
	$name2 = $_POST['name2'];
	include('parts/function.php');

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜Admin Tool</title>
<meta name="description" content="クライアント管理画面ツールトップ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".top_works_box_wrap").width();
    var imgheight = (imgWidth*0.37);
    $(".top_works_box_wrap").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_works_box_wrap").width();
    var imgheight = (imgWidth*0.37);
    $(".top_works_box_wrap").css('height',imgheight);
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
　if ($(this).scrollTop() > 100) {
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

<script>
$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  $('.modal_open').click(function(){
 
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  });
});
</script>

</head>

<body class="drawer drawer--left">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php" title="WORKS設定">WORKS設定</a></li>
        <li><a class="drawer-brand" href="demoreel.php" title="デモリール設定">デモリール設定</a></li>
        <li><a class="drawer-brand" href="" title="設定">―</a></li>              
        <li><a class="drawer-brand" href="" title="設定">―</a></li>
        <li><a class="drawer-brand" href="" title="設定">―</a></li>
        <li><a class="drawer-brand" href="" title="設定">―</a></li>     
        <li><a class="drawer-brand" href="" title="設定">―</a></li>
        <li><a class="drawer-brand" href="" title="設定">―</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="login_top.php" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1>
    <li class="menu__single">
      <a href="login_top.php" title="WORKS設定">WORKS設定</a>
    </li>
    <li class="menu__single">
      <a href="demoreel.php" title="デモリール設定">デモリール設定</a>
    </li>     
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>     
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>                  
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>            
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="login_top.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div id="page_base">
  <h2>WORKS設定</h2>
  
<div class="page_base_in">

  <div class="page_base_box">
  <h3>WORKS登録</h3> 
    <div class="top_works_button"><a href="works_new.php" class="btn_2">動画を登録</a></div>
  
  </div><!--page_base_box-->




  <div class="page_base_box">
  <h3>featured一覧</h3>
  <div class="works_list">
  現在の動画登録数<br />
  「<?php

$result=mysqli_query($sql, "SELECT * From `data` ORDER by id DESC");
$cnt=mysqli_num_rows($result);


echo $cnt;

if ($cnt == '0') {
	echo '0';
}
?>件」
  </div>
    
  <div class="wrapper"><?php
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/basic_hensu.php');

//▽表示内容ここから

echo "<div class=\"element_top\"><div class=\"top_works_box\"><div class=\"top_works_box_wrap\">\n";


	//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"photo/no_photo.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}
echo "</div>";

//写真登録・編集削除画面へ
echo <<<GOLGO
 <div class="top_works_box_button">
          <div class="top_works_box_button_a">
            <a href="works_edit.php?name2=$name2" class="btn_1">編集</a>
          </div>
<div class="top_works_box_button_a">
            <a data-target="modal_delete_$id" class="btn_1 modal_open">削除</a>
          </div>
         
          <div class="clear"></div>
          
		  <!-- 削除モーダル1 -->
            <div id="modal_delete_$id" class="modal_box">          
              <p>
                <div class="top_works_box_modal_box_title">$comment2を削除</div>
                <div class="top_works_box_modal_sakujyo">本当に削除しますか？</div>
                <div class="top_works_button"><a href="rewrite2.php?name2=$name2" class="btn_2">削除する</a></div>
              </p>
              <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
            </div>
GOLGO;
	
	
	
//△表示内容ここまで
echo "</div><div class=\"top_works_title\">".$comment2."</div></div><!--top_cast_box--></div><!--element_1 end-->\n";

}
?>          

    
    
  </div><!--wrapper-->
  </div>


</div><!--base-->

</div>

<div id="footer">
  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>
  
  <div class="footer_in">
    <p>© 2018 Monochrome Design Studio.</p>
  </div> 
</div>


</main>

</body>

</html>