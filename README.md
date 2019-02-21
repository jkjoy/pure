
> Enjoy the beauty of pure things!

**主题没人用，弃坑了不干了!  不过以后可能会诈尸更新**

# 常见问题
请到主题wiki查看。

# 更新日志
**第一次更新 1.0.0**
- 调整了主题的配色
- 修正了评论区表单的显示
- 添加了一个水波效果，页面下拉到一定程度是会显示在页脚
- 重写了部分文章页面样式
- 添加了表格样式

**友情归档 1.1.0**
- 添加了友情链接和归档的页面模板
- 去掉了文章列表摘要和文章内`<p>`标签的阴影
- 修正了一些插件无法正常使用的bug（之前没有在footer里设置插件输出代码的地方）
- 可以在主题设置里自定义head和页脚了
- 修改了分页的样式
- 细调了分页样式

**光棍更新 1.1.1**
- 修改了文章列表的分页样式
- 现在可以在主题里设置首页名称了
- 现在可以自定义摘要内容了
- 鼠标悬停在文章列表一项上时，会缩小而不再是放大
- 修改了title格式，现在首页title是`主标题 | 副标题`，其他页面为`页面名 | 副标题`
- 现在代码高亮插件不会崩掉了
- 摘要文字字数修改为200字
- 缩小了代码框的文字，~~变得更加容易排版~~

# 已知bug
- 自定义摘要判断方式有误，不定义摘要是不会自动拉取摘要

解决方案：删除functions.php中的如下代码

```
function themeFields($layout) {
    $excerpt = new Typecho_Widget_Helper_Form_Element_Text('excerpt', NULL, NULL, _t('自定义摘要'), _t('输入一句话作为显示在文章列表的摘要，不填写则直接读取文章前200字'));
    $layout->addItem($excerpt);
}
```

需要自定义摘要时就自行在文章页添加一个名为`excerpt`的字段，字段内容即为自定义摘要，不需要则不添加字段，自动拉取摘要。

# 版权
本模板引用了[Font-awesome图标](http://www.fontawesome.com.cn/)，其他内容包括css均为原创，
主题开源可以随意修改，但魔改后如要二次发布请通知作者~~我觉得没有谁会这么闲的)~~，最后**请保留版权信息！！！**

# 演示
目前技术原因无法提供演示（就是之前的演示站用来演示Mark主题了，然后懒得再弄一个~）
