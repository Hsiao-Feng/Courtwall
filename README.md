# Courtwall

## 简介
这是一款使用 PHP 、HTML 、CSS 和 PHP 语言写的表白墙。功能十分简单。

目前，这不是一款完整的产品，它缺少一个后台。但是此程序支持基本的发布、浏览。

## 运行环境
PHP + MySQL 。

## 开始使用
将 `courtwall.sql` 导入您的数据库。

然后修改 `settings.php` 中的数据：
```PHP
define("title", "网站标题");
$con = mysqli_connect("数据库地址","用户名","密码","数据库名");
date_default_timezone_set("时区"); //对于北京时间，使用 "PRC"
```

如果您需要支援 emoji 😉的使用，请将数据库字符集设置为`utf8mb4`。

## 问题/建议
敬请提交 Issue 。
