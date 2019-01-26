<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeFields($layout) {
    $excerpt = new Typecho_Widget_Helper_Form_Element_Text('excerpt', NULL, NULL, _t('自定义摘要'), _t('输入一句话作为显示在文章列表的摘要，不填写则直接读取文章前200字'));
    $layout->addItem($excerpt);
}

function themeConfig($form) {
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, NULL, _t('首页名称'), _t('首页名称，会显示在文章列表的上面'));
    $form->addInput($IndexName);	

	$about = new Typecho_Widget_Helper_Form_Element_Text('about', NULL, NULL, _t('关于内容'), _t('对站点或自己的介绍，显示在首页名称下面，也会用作title的副标题'));
    $form->addInput($about);
	
	$nav = new Typecho_Widget_Helper_Form_Element_Textarea('nav', NULL, NULL, _t('导航'), _t('顶部的导航，用a标签书写，一行一个，当然你<s>想写什么就写什么</s>，显示在首页名称和关于内容下面'));
    $form->addInput($nav);
	
	$foot = new Typecho_Widget_Helper_Form_Element_Textarea('foot', NULL, NULL, _t('自定义页脚(footer)'), _t('自定义页脚输出的内容，输出在主题版权信息的下面'));
    $form->addInput($foot);
	
	$head = new Typecho_Widget_Helper_Form_Element_Textarea('head', NULL, NULL, _t('自定义head'), _t('输出在header.php内，你可以在这里导入css或者js'));
    $form->addInput($head);
}
?>