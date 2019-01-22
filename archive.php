
<?php $this->need('header.php'); ?>

<div class="post-body">
    <div class="col-mb-12 col-8" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
		
   <div class="post-item">
    <a href="<?php $this->permalink() ?>"><h2><?php $this->title() ?></h2></a>
	<p><?php $this->excerpt(150); ?></p>
   </div>
   
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
     <div class="pageNav">
        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	 </div>
    </div><!-- end #main -->
</div>

	<?php $this->need('footer.php'); ?>
