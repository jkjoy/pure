<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	$about = new Typecho_Widget_Helper_Form_Element_Text('about', NULL, NULL, _t('关于内容'), _t('对站点或自己的介绍，显示在首页名称下面，也会用于QQ转发链接卡片的<meta>中'));
    $form->addInput($about);
	
	$nav = new Typecho_Widget_Helper_Form_Element_Textarea('nav', NULL, NULL, _t('导航'), _t('顶部的导航，用a标签书写，一行一个，当然你<s>想写什么就写什么</s>，显示在首页名称和关于内容下面'));
    $form->addInput($nav);
}
?>