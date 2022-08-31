<?php include "../include/page_var.php" ?>
<!DOCTYPE html>
<html lang="ko" class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="format-detection" content="telephone=no, address=no, email=no">
<meta name="title" content="<?=$site_name?>" />
<meta name="description" content="<?=$site_name?>" />
<meta name="keywords" content="<?=$site_name?>">
<meta property="og:type" content="website" />
<meta property="og:title" content="<?=$site_name?>"/>
<meta property="og:image" content="/images/inc/logo.png"/>
<meta property="og:site_name" content="<?=$site_name?>"/>
<meta property="og:url" content=""/>
<meta property="og:description" content="<?=$site_name?>"/> 
<meta name="naver-site-verification" content="b5f5c495ed77649cb12d61c1d021495b53140030" />
<script src="../assets/js/lib/jquery-3.4.1.min.js"></script>
<link href="../assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/xeicon.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/jquery.scrollbar.css" rel="stylesheet" type="text/css">
<link href="../assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link href="../assets/css/fullpage.css" rel="stylesheet" type="text/css">
<link href="../assets/css/slick.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/swiper.min.css" rel="stylesheet" type="text/css">
<link href="../assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="../assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="../assets/css/style.css?rel=200823" rel="stylesheet" type="text/css">
<link href="../assets/css/add.css?rel=200927" rel="stylesheet" type="text/css">
<!-- <title><?php if($dp0!='main'){if($dp2!=null){echo ${nav_.$dp1._.$dp2};}echo ${nav_.$dp1};}else{echo $site_name;}?></title> -->
<title><? if($dp0!='main'){?> <? if($dp2!=null){?><?=${nav_.$dp1._.$dp2}?> - <? }?><?=${nav_.$dp1}?> - <? }?><?=$site_name?></title>

