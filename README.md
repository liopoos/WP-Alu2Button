# WP Alu2Button #

**为你的Wordpress编辑框和评论框增加阿鲁表情**

screenshot：
![](https://blog.mayuko.cn/wp-content/uploads/2016/06/alu-1.jpg)

## 食用方法： ##

1. 在后台上传将本插件，在插件管理器中将插件激活即可。
2. 通过后台ftp程序将插件文件夹上传至`./wp-content/plugins/`，在插件管理器中将插件激活即可。

启用插件后，WordPress的默认编辑器就有一个呆呆的阿鲁按钮，点击它就可以选择各种各样的阿鲁表情。

![](https://blog.mayuko.cn/wp-content/uploads/2016/06/QQ%E6%88%AA%E5%9B%BE20160602215759.jpg)

第二部分，就是在评论框增加了一列阿鲁表情选择按钮，这样，你就可以在评论框选择你喜欢的阿鲁表情啦。

![](https://blog.mayuko.cn/wp-content/uploads/2016/06/QQ%E6%88%AA%E5%9B%BE20160602215857.jpg)

如果激活插件后没有表情，那么要在comment.php或者其他评论的合适地方加入：

    <?php echo alu_get_wpsmiliestrans();?>

就可以正常使用了。

[文章地址](https://blog.mayuko.cn/archives/1530)