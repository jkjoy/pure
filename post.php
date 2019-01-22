  <?php $this->need('header.php'); ?>
  
    <div class="head" id="top">
	 <h1><?php $this->title() ?></h1>
	</div>
   <div class="post-body">
   <hr />
	<div class="post-sum">
	 <?php $this->content(); ?>
	 <b>Tags：</b><?php $this->tags(',', true, '还没有标签哦~'); ?>
	</div>
   </div>
   
    <hr />
	<?php $this->need('comments.php'); ?>
	
  <?php $this->need('footer.php'); ?>