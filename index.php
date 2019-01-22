<?php
/**
 *  Enjoy the beauty of pure things!
 *
 * <a href="https://cokewithice.com/">作者博客</a> | 欢迎访问！
 *
 * @package Pure
 * @author  BigCoke
 * @version 1.0
 * @link https://cokewithice.com/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

  <?php $this->need('header.php'); ?>
  
  <div class="head" id="top">
    <h1><?php $this->options->title() ?></h1>
	<p><?php $this->options->about(); ?></p>
	<hr />
  </div>
  
  <?php while($this->next()): ?>

   <div class="post-item">
    <a href="<?php $this->permalink() ?>"><h2><?php $this->sticky(); $this->title() ?></h2></a>
	<p><?php $this->excerpt(150); ?></p>
   </div>

   <?php endwhile; ?>
   
   <div class="pageNav">
    <?php $this->pageNav('<', '>',3, '...'); ?>
   </div>
   
   <hr />
   
  <?php $this->need('footer.php'); ?>
   

