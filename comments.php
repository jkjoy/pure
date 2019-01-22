<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <div>
    <?php $comments->listComments(); ?>
    </div>
	<div class="pageNav">
    <?php $comments->pageNav('<', '>'); ?>
	</div>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response" class="comment-reply-title"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
		<div class="post-comment">
    		<p class="comment-form-author">
    			<input placeholder="留下你的大名可好ヾ(◍°∇°◍)ﾉﾞ" type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p class="comment-form-email">
    			<input placeholder="填上邮箱，不然就成无头像人士了(*/ω＼*)" type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p class="comment-form-url">
    			<input placeholder="留下你的地址，也让我来逛逛٩(๑>◡<๑)۶ " type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
		</div>
    		<p class="comment-form-comment">
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p class="form-submit">
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
		</div>
    </div>
    <?php else: ?>
    <h3><?php _e('评论关闭了哦'); ?></h3>
    <?php endif; ?>
</div>