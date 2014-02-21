<?php
/**
* @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
* @license     http://www.fsf.org/copyleft/gpl.html GNU public license
* _LANGCODE    tw
* _CHARSET     UTF-8
* @version     $Id: users.php 4091 2010-01-05 17:02:11Z forxoops $
* @translator	点两下电脑工作室 http://ck2tw.net/
*/

// Navigation
define("_AM_SYSTEM_USERS_NAV_MAIN","会员管理");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","高级查询");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","新增会员");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","编辑会员");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","删除会员");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>管理本站会员</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","会员");
define("_AM_SYSTEM_USERS_ADMIN","管理员");
define("_AM_SYSTEM_USERS_UID","Uid编号");
define("_AM_SYSTEM_USERS_STATUS","状态");
define("_AM_SYSTEM_USERS_NAME","姓名");
define("_AM_SYSTEM_USERS_UNAME","帐号");
define("_AM_SYSTEM_USERS_EMAIL","Email");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","编辑群组");
define("_AM_SYSTEM_USERS_REG_DATE","注册日期");
define("_AM_SYSTEM_USERS_LAST_LOGIN","最后登录");
define("_AM_SYSTEM_USERS_POSTS","评论/文章");
define("_AM_SYSTEM_USERS_LEVEL","等级");
define("_AM_SYSTEM_USERS_ACTION","动作");
define("_AM_SYSTEM_USERS_FINDUS","寻找会员");
define("_AM_SYSTEM_USERS_AVATAR","头像");
define("_AM_SYSTEM_USERS_REALNAME","真实姓名");
define("_AM_SYSTEM_USERS_REGDATE","注册日期");
define("_AM_SYSTEM_USERS_PM","站内消息");
define("_AM_SYSTEM_USERS_URL","网址");
define("_AM_SYSTEM_USERS_PREVIOUS","上页");
define("_AM_SYSTEM_USERS_NEXT","下页");
define("_AM_SYSTEM_USERS_USERSFOUND","找到 %s 个会员");
define("_AM_SYSTEM_USERS_ACTUS", "正式会员数：%s");
define("_AM_SYSTEM_USERS_INACTUS", "未启用帐号会员数：%s");
define("_AM_SYSTEM_USERS_NOFOUND","找不到会员");
define("_AM_SYSTEM_USERS_ICQ","ICQ 号码");
define("_AM_SYSTEM_USERS_AIM","AIM 链接");
define("_AM_SYSTEM_USERS_YIM","Yahoo 即时通链接");
define("_AM_SYSTEM_USERS_FACEBOOK","Facebook 链接"); //TODO
define("_AM_SYSTEM_USERS_SKYPE","Skype 链接"); //TODO
define("_AM_SYSTEM_USERS_MSNM","MSN链接");
define("_AM_SYSTEM_USERS_TIMEZONE","时区");
define("_AM_SYSTEM_USERS_SHOWSIG","总是秀出我的签名档");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","评论呈现模式");
define("_AM_SYSTEM_USERS_CSORTORDER","评论排序依据");
define("_AM_SYSTEM_USERS_EXTRAINFO","其他信息");
define("_AM_SYSTEM_USERS_LOCATION","来自");
define("_AM_SYSTEM_USERS_OCCUPATION","职业");
define("_AM_SYSTEM_USERS_INTEREST","兴趣爱好");
define("_AM_SYSTEM_USERS_URLC","个人网站");
define("_AM_SYSTEM_USERS_LOCATIONC","位置");
define("_AM_SYSTEM_USERS_OCCUPATIONC","职业");
define("_AM_SYSTEM_USERS_INTERESTC","兴趣");
define("_AM_SYSTEM_USERS_LASTLOGMORE","最后登录已超过 <span style='color:#ff0000;'>X</span> 天");
define("_AM_SYSTEM_USERS_LASTLOGLESS","最后登录在 <span style='color:#ff0000;'>X</span> 天内");
define("_AM_SYSTEM_USERS_REGMORE","加入日期已超过 <span style='color:#ff0000;'>X</span> 天");
define("_AM_SYSTEM_USERS_REGLESS","加入日期在 <span style='color:#ff0000;'>X</span> 天内");
define("_AM_SYSTEM_USERS_POSTSMORE","发表文章数大于 <span style='color:#ff0000;'>X</span> 篇");
define("_AM_SYSTEM_USERS_POSTSLESS","发表文章数小于 <span style='color:#ff0000;'>X</span> 篇");
define("_AM_SYSTEM_USERS_SORT","排序");
define("_AM_SYSTEM_USERS_ORDER","排序");
define("_AM_SYSTEM_USERS_LASTLOGIN","最后登录日期");
define("_AM_SYSTEM_USERS_ASC","递增排序");
define("_AM_SYSTEM_USERS_DESC","递减排序");
define("_AM_SYSTEM_USERS_LIMIT","每页秀出会员数");
define("_AM_SYSTEM_USERS_RESULTS", "查询结果");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "会员显示类型");
define("_AM_SYSTEM_USERS_MAILOK","愿意接收Email");
define("_AM_SYSTEM_USERS_MAILNG","不愿意接收Email的会员");
define("_AM_SYSTEM_USERS_SHOWTYPE", "会员显示类型");
define("_AM_SYSTEM_USERS_ACTIVE","仅正式会员");
define("_AM_SYSTEM_USERS_INACTIVE","仅尚未启用帐号会员");
define("_AM_SYSTEM_USERS_BOTH", "所有会员");
define("_AM_SYSTEM_USERS_SENDMAIL", "寄发Email");
define("_AM_SYSTEM_USERS_ADD2GROUP", "新增会员到 %s 群组");
define("_AM_SYSTEM_USERS_GROUPS", "群组");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "新增群组");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "删除群组");
define("_AM_SYSTEM_USERS_AYSYWTDU","您确定要删除帐号<strong>%s</strong>吗？");
define("_AM_SYSTEM_USERS_BYTHIS","将永远删除这个帐号的信息。");
define("_AM_SYSTEM_USERS_YES","是");
define("_AM_SYSTEM_USERS_NO","否");
define("_AM_SYSTEM_USERS_YMCACF","您必需填写必填栏位。");
define("_AM_SYSTEM_USERS_CNRNU","无法注册新会员。");
define("_AM_SYSTEM_USERS_EDEUSER","修改帐号");
define("_AM_SYSTEM_USERS_NICKNAME","暱称");
define("_AM_SYSTEM_USERS_MODIFYUSER","编辑帐号");
define("_AM_SYSTEM_USERS_DELUSER","删除帐号");
define("_AM_SYSTEM_USERS_GO","送出");
define("_AM_SYSTEM_USERS_ADDUSER","新增帐号");
define("_AM_SYSTEM_USERS_OPTION","选项");
define("_AM_SYSTEM_USERS_THEME","主题");
define("_AM_SYSTEM_USERS_AOUTVTEAD","允许公开这个电子邮件");
define("_AM_SYSTEM_USERS_RANK","等级");
define("_AM_SYSTEM_USERS_NSRA","未指定特殊等级");
define("_AM_SYSTEM_USERS_NSRID","在数据库中没有特殊等级");
define("_AM_SYSTEM_USERS_ACCESSLEV","等级");
define("_AM_SYSTEM_USERS_SIGNATURE","签名");
define("_AM_SYSTEM_USERS_PASSWORD","密码");
define("_AM_SYSTEM_USERS_INDICATECOF","* 为必填选项");
define("_AM_SYSTEM_USERS_NOTACTIVE","这个帐员尚未启用，您要启用这个帐号吗？");
define("_AM_SYSTEM_USERS_UPDATEUSER","更新帐号");
define("_AM_SYSTEM_USERS_USERINFO","帐号信息");
define("_AM_SYSTEM_USERS_USERID","会员ID");
define("_AM_SYSTEM_USERS_RETYPEPD","确认密码");
define("_AM_SYSTEM_USERS_CHANGEONLY","（仅有供修改时再确认用）");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","重计发表数");
define("_AM_SYSTEM_USERS_USERDONEXIT","会员不存在！");
define("_AM_SYSTEM_USERS_STNPDNM","抱歉，两次输入的新密码不符，请重新再试一次。");
define("_AM_SYSTEM_USERS_CNUUSER","无法更新会员。");
define("_AM_SYSTEM_USERS_CNGUSERID","无法取得会员帐号。");
define("_AM_SYSTEM_USERS_NOUSERS","未选定要编辑的会员。");
define("_AM_SYSTEM_USERS_CNRNU2","新会员未能新增到如下群组中：%s。");
define("_AM_SYSTEM_USERS_SEARCH","查询");
define("_AM_SYSTEM_USERS_SEARCH_USER","查询会员");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","高级查询");
define("_AM_SYSTEM_USERS_EDIT","编辑会员");
define("_AM_SYSTEM_USERS_DEL","删除会员");
define("_AM_SYSTEM_USERS_DELETE","删除");
define("_AM_SYSTEM_USERS_SUBMIT","送出");
define("_AM_SYSTEM_USERS_PURGE","清除");
define("_AM_SYSTEM_USERS_ADD","新增会员");
define("_AM_SYSTEM_USERS_VIEW","观看会员信息");
define("_AM_SYSTEM_USERS_NO_FOUND","找不到会员");
define("_AM_SYSTEM_USERS_NOT_CONNECT","从未连线");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","删除会员：%s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","删除");
define("_AM_SYSTEM_USERS_NO_SUPP", "无法删除会员：%s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "管理员无法被删除： %s <br />");
define("_AM_SYSTEM_USERS_ERROR", "错误：<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "所有群组");
define("_AM_SYSTEM_USERS_ALLUSER", "所有会员");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "仅已启用会员");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "仅尚未启用会员");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","会员名称「%s」已存在");
define("_AM_SYSTEM_USERS_MAIL_ERROR","会员Email「%s」已存在");

//2.5.4
define("_AM_SYSTEM_USERS_ACCEPT_EMAIL","接受来自管理员的信件");