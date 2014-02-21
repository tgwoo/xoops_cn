<?php
    /**
     * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
     * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
     * @version     $Id: admin.php 4251 2010-01-31 16:54:19Z forxoops $
     * _LANGCODE: zh_cn
     * _CHARSET : UTF-8
     * @translator	基于点两下电脑工作室 http://ck2tw.net/ 繁体中文版，Tgwoo 简体中文修订
     */
    
    
    // Main
    define("_AM_SYSTEM_CONFIG", "系统设置" );
    define("_AM_SYSTEM_CPANEL", "控制台" );
    define("_AM_SYSTEM_UPDATE", "更新" );
    define("_AM_SYSTEM_GOTOMODULE", "切换到模块" );
    define("_AM_SYSTEM_HELP", "帮助" );
    define("_AM_SYSTEM_HELP_VIEW", "显示帮助" );
    define("_AM_SYSTEM_HELP_HIDE", "隐藏帮助" );
    define("_AM_SYSTEM_TIPS", "提示" );
    define("_AM_SYSTEM_SECTION", "区域" );
    define("_AM_SYSTEM_DESC", "描述" );
    define("_AM_SYSTEM_GO", "进入设置" );
    define("_AM_SYSTEM_STATUS", "启用" );
    define("_AM_SYSTEM_LOADING", "载入中");
    define("_AM_SYSTEM_ALL", "全部");
    
    define("_AM_SYSTEM_TIPS_MAIN","<ul><li>启用或关闭系统模块区域或只是读取之。</li></ul>");
    define("_AM_SYSTEM_AVATAR_INFO", '<ul><li>有 <span class="bold red">%s</span> 个头像</li></ul>' );
    define("_AM_SYSTEM_BANNER_INFO", '<ul><li>有 <span class="bold red">%s</span> 个广告</li></ul>' );
    define("_AM_SYSTEM_COMMENT_INFO", '<ul><li>有 <span class="bold red">%s</span> 则评论。</li></ul>' );
    define("_AM_SYSTEM_GROUP_INFO", '<ul><li>有 <span class="bold red">%s</span> 个群组。</li></ul>' );
    define("_AM_SYSTEM_IMG_INFO", '<ul><li>有 <span class="bold red">%s</span> 个图片。</li></ul>' );
    define("_AM_SYSTEM_SMILIES_INFO", '<ul><li>有 <span class="bold red">%s</span> 个表情图。</li></ul>' );
    define("_AM_SYSTEM_RANKS_INFO", '<ul><li>有 <span class="bold red">%s</span> 个使用者等级。</li></ul>' );
    define("_AM_SYSTEM_USERS_INFO", '<ul><li>有 <span class="bold red">%s</span> 个使用者。</li></ul>' );
    
    
    // Admin Module Names and description
    define( "_AM_SYSTEM_ADGS", "群组");
    define( "_AM_SYSTEM_ADGS_DESC", "可新增群组并管理每个群组的权限");
    define( "_AM_SYSTEM_BANS", "广告");
    define( "_AM_SYSTEM_BANS_DESC", "管理网站广告");
    define( "_AM_SYSTEM_BLOCKS", "区块" );
    define( "_AM_SYSTEM_BLOCKS_DESC", "网站区块管理" );
    define( "_AM_SYSTEM_MODULES", "模块" );
    define( "_AM_SYSTEM_MODULES_DESC", "安装、移除、更新网站模块" );
    define( "_AM_SYSTEM_SMLS", "表情图");
    define( "_AM_SYSTEM_SMLS_DESC", "表情图可在文章、消息、评论...中使用");
    define( "_AM_SYSTEM_RANK", "会员等级");
    define( "_AM_SYSTEM_RANK_DESC", "可为会员区分各种等级");
    define( "_AM_SYSTEM_USER", "会员");
    define( "_AM_SYSTEM_USER_DESC", "可新增会员或编辑会员信息，亦可变更会员群组等各种会员管理功能。");
    define( "_AM_SYSTEM_PREF", "偏好设置");
    define( "_AM_SYSTEM_PREF_DESC", "网站及各种模块的设置选项");
    define( "_AM_SYSTEM_MLUS", "会员消息群发");
    define( "_AM_SYSTEM_MLUS_DESC", "可网站会员群发消息或邮件");
    define( "_AM_SYSTEM_IMAGES", "图片管理");
    define( "_AM_SYSTEM_IMAGES_DESC", "可上传图片或新增图片分类");
    define( "_AM_SYSTEM_AVATARS", "头像" );
    define( "_AM_SYSTEM_AVATARS_DESC", "新增会员选用的头像" );
    define( "_AM_SYSTEM_TPLSETS", "模板");
    define( "_AM_SYSTEM_TPLSETS_DESC", "可让您用浏览器来自行修改模块外观");
    define( "_AM_SYSTEM_COMMENTS", "评论");
    define( "_AM_SYSTEM_COMMENTS_DESC", "用来管理使用者所发表的评论");
    define( "_AM_SYSTEM_FILEMANAGER", "文件管理");
    define( "_AM_SYSTEM_FILEMANAGER_DESC", "可新增或修改网站中的所有文件");
    define( "_AM_SYSTEM_MAINTENANCE", "维护");
    define( "_AM_SYSTEM_MAINTENANCE_DESC", "数据库的维护工具，可清除 快取资料夹及 session 数据库表");
    
    // Messages
    define("_AM_SYSTEM_DBUPDATED", "数据库更新成功！");
    define("_AM_SYSTEM_DBERROR", "因有部份错误导致数据库无法完成更新");
    define("_AM_SYSTEM_NOTACTIVE", "这部份尚未启用");
    
    
    // Group permission phrases
    define("_MD_AM_PERMADDNG","无法加入群组权限（权限：%s　群组：%s）");
    define("_MD_AM_PERMADDOK","群组权限新增成功（权限：%s　群组：%s）");
    define("_MD_AM_PERMRESETNG","无法重置[%s]模块的群组权限");
    define("_MD_AM_PERMADDNGP", "必须选取所有上一级项目。");
    
    define("_AM_SYSTEM_UNINSTALL","卸载");
