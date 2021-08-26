<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$name2 = $_GET['name2'];

$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
include('parts/schetime.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>WORKS設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　WORKS設定">

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
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>

</head>

<body class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>WORKS設定</h2>
  
<div class="page_base_in">

  <div class="page_base_box">
    <h3>動画設定</h3>
    <div class="top_works_button"><a href="works_photo.php?name2=<?php echo $name2; ?>" class="btn_2">画像の設定</a></div>
  </div>

  <div class="page_base_box">
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="rewrite.php" method="post" id="form" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input name="name2" type="hidden" class="w_per50" value="<?php echo $name2; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="hidden" name="photo2" value="<?php echo $photo2; ?>" />
<input type="hidden" name="photo3" value="<?php echo $photo3; ?>" />
<input type="hidden" name="photo4" value="<?php echo $photo4; ?>" />
    <p>
    <label><span>Vimeo URL（<font color="#CC0000">必須</font>）</span><span style="font-size: 70%; line-height: 1.3em;">https://player.vimeo.com/video/</span><input type="text" name="profinfo1" class="txtfiled" placeholder="例）136563604" value="<?php echo $profinfo1; ?>" required></label>
    <span style="font-size: 70%; color: #F66;">※動画URLの数値のみ入力してください。</span>
    </p>
    <p>
    <label><span>タイトル（<font color="#CC0000">必須</font>）</span><?php $comment2 = str_replace("<br />" , "\r\n" , $comment2); ?><textarea name="comment2" class="txtfiled" rows="2" required><?php echo $comment2; ?></textarea></label>
    </p>
    <p>
    <label><span>トップタイトルの文字色（<font color="#CC0000">必須</font>）</span>
    <?php
if($profinfo2=='1'){$color1=' selected="selected"';}
if($profinfo2=='2'){$color2=' selected="selected"';}
?><select name="profinfo2">
    <option value="1" <?php echo $color1; ?>>黒</option>
    <option value="2" <?php echo $color2; ?>>白</option>
    </select>
    </label>
    </p>    
    <p>
    <label><span>コメント（<font color="#CC0000">必須</font>）</span><?php $comment = str_replace("<br />" , "\r\n" , $comment); ?><textarea name="comment" class="txtfiled" rows="5" required><?php echo $comment; ?></textarea></label>
    </p>
    <input type="hidden" name="operation" value="edit" />
      <div class="todayscast_button_2">
      <button type="submit" class="formbtn_2">登録する</button>
      </div>
    </form>

  

  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</body>

</html>