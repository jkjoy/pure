<?php
/**
 * 友情链接
 *
 * @package custom
 */
?>
<?php $this->need('header.php'); ?>

<style>
.links{
	text-align:center;
}
.links a{
	padding:8px;
	color:white;
	background:black;
	border:3px solid black;
	margin:8px;
	text-align:center;
	display:inline-block;
	letter-spacing:2px;
}
.links a:hover{
	color:black;
	background:white;
	text-decoration:none;
}
</style>

<div class="head"><h1><?php $this->title() ?></h1></div>

<div class="post-body links post-sum">
   <?php $this->content(); ?>
</div>

<hr />
<?php $this->need('comments.php'); ?>
<hr />

<?php $this->need('footer.php'); ?>