<?php
// $Id: welcome.php 1923 2008-07-27 14:22:14Z phppp $
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPSCHINA Translation Team
$content .="
<p>
    <strong><a href='http://xoops.sourceforge.net' tagert='_blank'>XOOPS</a></strong> 是一个高度可扩展、面向对象的建站系统，基于PHP语言和MySQL数据库开发。
    XOOPS 作为一个成熟的网站建设管理工具，可以方便的建设管理各类网站：内容管理与界面风格分离，便于方便灵活的设计切换不同的表现风格；成熟的功能模块化机制，有各种丰富多样的模块可供选择定制，比如新闻发布、文章管理、论坛、相册、下载、友情链接、广告管理、黄页、在线购物、博客和维基；具有完善的权限管理机制，可以针对不同用户群组设置不同权限。
</p>
<p>
    XOOPS 作为理想的 WEB 2.0 二次开发系统，可以开发各种规模不同类型的动态网络社区，实现高度定制化的内容管理功能。
</p>
<p>
    XOOPS 是一个<a href='http://xoops.org.cn/modules/article/view.article.php/c3/7' rel='external'>自由软件</a>，遵循<a href='http://www.gnu.org/copyleft/gpl.html' rel='external'>GNU General Public License (GPL)协议</a>，在此前提下，您可以按照自己的需要进行修改。
</p>
<h3><strong>系统需求</strong></h3>
<ul>
    <li>WWW 服务器 (<a href='http://www.apache.org/' rel='external'>Apache</a>, IIS, Roxen 等)</li>
    <li><a href='http://www.php.net/' rel='external'>PHP</a>  5.2 或更高版本</li>
    <li><a href='http://www.mysql.com/' rel='external'>MySQL</a> 数据库服务器  5.1 以上版本</li>
</ul>
    
<h3><strong>安装准备</strong></h3>
<ol>
    <li>正确设置WWW服务器，PHP和数据库服务器。</li>
    <li>建立一个用于安装XOOPS的数据库。</li>
    <li>配置用于登录数据库的帐号及密码。</li>
    <li>将下列资料夹与文件的属性设置为可写入 UNIX, Linux（777）；Windows（取消唯读属性）： %s</li>
	<li>基于安全考虑，建议您把下列文件夹移到 <a href='http://phpsec.org/projects/guide/3.html' rel='external'>document root（网站根目录）</a> 路径之外，并且修改文件夹名称。%s</li>
    <li>新增文件夹（若此文件夹不存在），并将此文件夹属性设置为可写入 UNIX, Linux（777）；Windows（取消唯读属性）：%s</li>
    <li>启用浏览器 cookie 及 JavaScript 功能。</li>
</ol>
";
?>