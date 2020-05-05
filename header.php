<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.css'); ?>">
  
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<!--start #header-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="celantupian">
  <?php $this->author->gravatar(100); ?>
  <a href="<?php $this->author->url(); ?>"><?php $this->author(); ?></a>
  </div>
  <a href="<?php $this->options ->siteUrl(); ?>">首页</a>
  <a href="#">分类</a>
  <a href="#">页面</a>
  <a href="#">关于</a>
</div>
 
</header>

<header id="mainheader" class="banner-mask">
<div class="nav-header container">
    <div class="nav-header-container font-colorh">
        <span class="back-home" onclick="openNav()">MENU</span>
    </div>
</div>
<div class="header-wrap">
    <div class="container">
        <div class="home-info-container">
         <?php if($this->is('index')): ?>
        <!--//首页输出内容-->
        <a href="<?php $this->options ->siteUrl(); ?>"><h2><?php $this->options->title() ?></h2></a>
            <h4><?php $this->options->description() ?></h4> 
        <?php elseif ($this->is('post') || ($this->is('page'))): ?>
       
        <a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
        <time><?php $this->date('Y年m月d日') ?></time> <?php $this->category(','); ?> <?php $this->tags(',', true, 'none'); ?>
       <?php else: ?>
       <h2><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h2></a>
       <h4><?php echo $this->getDescription(); ?></h4>
       <?php endif; ?>
            </div>
        </div>
    </div>


    
    
