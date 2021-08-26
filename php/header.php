<?php
echo <<<GOLGO
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-top"><a class="drawer-brand" href="index.php" title="">works<div class="drawer-line"></div></a></li>
        <li><a class="drawer-brand" href="about.php" title="">about</a></li>        
        <li><a class="drawer-brand" href="info.php" title="">info</a></li>   
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1>
    <li class="menu__single">
      <a href="index.php">works<div class="menu_line"></div></a>
    </li>
    <li class="menu__single">
      <a href="about.php">about</a>
    </li>  
    <li class="menu__single">
      <a href="info.php">info</a>
    </li>               
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>
GOLGO;
?>