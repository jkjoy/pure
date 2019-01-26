<!-- 头部信息 -->

  <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />

  <!-- 引入css -->
   <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/main.css'); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>" />
  <!-- 引入end -->
  
  <!-- 自定义头部 -->
  <?php $this->options->head() ?>
 
  
  <!-- 定义title -->
   <?php if ($this->is('index')): ?><!-- 页面为首页时 -->
     <title><?php $this->options->title() ?> | <?php $this->options->about() ?></title>
   <?php else: ?><!-- 页面为其他页时 -->
    <title><?php $this->title() ?> | <?php $this->options->about() ?></title>
   <?php endif; ?>
  <!-- title结束 -->

  <?php $this->header(); ?>
<!-- 头部信息end -->

<!-- 顶部导航栏 -->
 <div class="nav">
    <?php $this->options->nav(); ?>
 </div>
<!-- 导航end -->


