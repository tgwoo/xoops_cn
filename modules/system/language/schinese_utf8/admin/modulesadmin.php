<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    tw
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 4091 2010-01-05 17:02:11Z forxoops $
 * @translator	点两下电脑工作室 http://ck2tw.net/
 */

// Navigation
define( "_AM_SYSTEM_MODULES_ADMIN", "系统基本设置" );
define( "_AM_SYSTEM_MODULES_LIST", "模块列表");
define( "_AM_SYSTEM_MODULES_TOINSTALL", "安装模块" );
define( "_AM_SYSTEM_MODULES_VALIDATE", "变更确认" );
define( "_AM_SYSTEM_MODULES_SUBMITRES", "送出结果");

// Messages
define( "_AM_SYSTEM_MODULES_RUSUREINS", "点选以下按钮安装此模块");
define( "_AM_SYSTEM_MODULES_RUSUREUPD", "点选以下按钮更新此模块");
define( "_AM_SYSTEM_MODULES_RUSUREUNINS", "您是否确实想反安装此模块？");
define( "_AM_SYSTEM_MODULES_BTOMADMIN", "返回模块管理区");
define( "_AM_SYSTEM_MODULES_INSTALLING", "正在安装");
define( "_AM_SYSTEM_MODULES_UNINSTAL", "反安装");
define( "_AM_SYSTEM_MODULES_DEACTIVATE", "停用");
define( "_AM_SYSTEM_MODULES_ACTIVATE", "启用");
define( "_AM_SYSTEM_MODULES_UPDATING", "更新");

// Main
define( "_AM_SYSTEM_MODULES_INSTALL", "安装");
define( "_AM_SYSTEM_MODULES_UNINSTALL", "反安装");
define( "_AM_SYSTEM_MODULES_UPDATE", "更新" );
define( "_AM_SYSTEM_MODULES_VIEWLARGE", "大图示" );
define( "_AM_SYSTEM_MODULES_VIEWLINE", "小图示" );

// %s represents module name
define( "_AM_SYSTEM_MODULES_FAILINS", "无法安装 %s ");
define( "_AM_SYSTEM_MODULES_FAILACT", "无法启用 %s ");
define( "_AM_SYSTEM_MODULES_FAILDEACT", "无法停用 %s ");
define( "_AM_SYSTEM_MODULES_FAILUPD", "无法更新 %s ");
define( "_AM_SYSTEM_MODULES_FAILUNINS", "无法反安装 %s ");
define( "_AM_SYSTEM_MODULES_FAILORDER", "无法重新排列 %s ");
define( "_AM_SYSTEM_MODULES_FAILWRITE", "无法写入主选单。");
define( "_AM_SYSTEM_MODULES_ALEXISTS", "模块 %s 已存在。");
define( "_AM_SYSTEM_MODULES_ERRORSC", "错误(s)：");
define( "_AM_SYSTEM_MODULES_OKINS", "模块 %s 安装成功。");
define( "_AM_SYSTEM_MODULES_OKACT", "模块 %s 启用成功。");
define( "_AM_SYSTEM_MODULES_OKDEACT", "模块 %s 停用成功。");
define( "_AM_SYSTEM_MODULES_OKUPD", "模块 %s 更新成功。");
define( "_AM_SYSTEM_MODULES_OKUNINS", "模块 %s 反安装成功。");
define( "_AM_SYSTEM_MODULES_OKORDER", "模块 %s 更改成功。");

define( "_AM_SYSTEM_MODULES_MODULE", "模块名称");
define( "_AM_SYSTEM_MODULES_VERSION", "版本");
define( "_AM_SYSTEM_MODULES_LASTUP", "最后更新日期／时间");
define( "_AM_SYSTEM_MODULES_DEACTIVATED", "停用");
define( "_AM_SYSTEM_MODULES_ACTION", "操作");
define( "_AM_SYSTEM_MODULES_MENU", "选单" );
define( "_AM_SYSTEM_MODULES_HIDE", "隐藏" );
define( "_AM_SYSTEM_MODULES_SHOW", "显示" );

define( "_AM_SYSTEM_MODULES_DUPEN", "数据库的模块表中有重複条目！");
define( "_AM_SYSTEM_MODULES_DEACTED", "选定的模块已被停用，现在您可以安全地反安装此模块。");
define( "_AM_SYSTEM_MODULES_ACTED", "	选定的模块已启用！");
define( "_AM_SYSTEM_MODULES_UPDTED", "选定的模块已更新！");
define( "_AM_SYSTEM_MODULES_SYSNO", "系统模块不能停用。");
define( "_AM_SYSTEM_MODULES_STRTNO", "此模块已设置为预设的首页，请设置适合您的首页。");

define( "_AM_SYSTEM_MODULES_ORDER", "顺序");
define( "_AM_SYSTEM_MODULES_ORDER0", "（0 = 隐藏）");
define( "_AM_SYSTEM_MODULES_ACTIVE", "启用");
define( "_AM_SYSTEM_MODULES_INACTIVE", "未启用");
define( "_AM_SYSTEM_MODULES_NOTINSTALLED", "没有安装");
define( "_AM_SYSTEM_MODULES_NOCHANGE", "无变化");
define( "_AM_SYSTEM_MODULES_SUBMIT", "送出");
define( "_AM_SYSTEM_MODULES_CANCEL", "取消");
define( "_AM_SYSTEM_MODULES_DBUPDATE", _AM_SYSTEM_DBUPDATED);
define( "_AM_SYSTEM_MODULES_LISTUPBLKS", "以下区块将一起更新。<br />选择要更新的区块内容（格式）将一起更新。<br />");
define( "_AM_SYSTEM_MODULES_NEWBLKS", "新区块");
define( "_AM_SYSTEM_MODULES_DEPREBLKS", "不更新区块");

// Logger
define("_AM_SYSTEM_MODULES_TABLE_RESERVED", "%s 是一个预留数据库表！");
define("_AM_SYSTEM_MODULES_CREATE_TABLES", "正在新建数据库表…");
define("_AM_SYSTEM_MODULES_TABLE_CREATED", " %s 新建数据库表成功 ");
define("_AM_SYSTEM_MODULES_INSERT_DATA", "&nbsp;&nbsp; 资料已插入到数据库表中 %s");
define("_AM_SYSTEM_MODULES_INSERT_DATA_FAILD", " %s 未能插入到数据库中");
define("_AM_SYSTEM_MODULES_INSERT_DATA_DONE", "模块资料新增成功 ");
define("_AM_SYSTEM_MODULES_MODULEID", " 模块 ID：%s");
define("_AM_SYSTEM_MODULES_SQL_FOUND", "在 %s 中发现 SQL 文件");
define("_AM_SYSTEM_MODULES_SQL_NOT_FOUND", "在 %s 中没有发现 SQL 文件");
define("_AM_SYSTEM_MODULES_SQL_NOT_CREATE", "出错：未能新建 %s");
define("_AM_SYSTEM_MODULES_SQL_NOT_VALID", "%s 不是可用的 SQL！");
define("_AM_SYSTEM_MODULES_GROUP_ID", " 群组 ID：%s ");
define("_AM_SYSTEM_MODULES_NAME", "名称：");
define("_AM_SYSTEM_MODULES_VALUE", " 值：");

// Templates
define("_AM_SYSTEM_MODULES_TEMPLATES_ADD", "正在新增样板…");
define("_AM_SYSTEM_MODULES_TEMPLATES_DELETE", "正在删除样板…");
define("_AM_SYSTEM_MODULES_TEMPLATES_UPDATE", "正在更新…");
define("_AM_SYSTEM_MODULES_TEMPLATE_ID", "样板 ID：%s ");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA", "样板 %s 已新增到数据库");
define("_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR", "错误：样板 %s 没有新增到数据库中");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED", "样板 %s 编译成功 ");
define("_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED", "错误：样板 %s 没有编译成功 ");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA", "样板 %s 已从数据库中删除");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD", "错误：样板 %s 没有从数据库中删除");
define("_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA", "样板 %s 已新增到数据库中");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE", "样板 %s 重新编译");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD", "错误：样板 %s 重新编译失败");
define("_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR", "错误：不能重新编译样板 %s");
define("_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR", "错误：没有删除旧的样板 %s，已放弃更新此文件");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE", "样板 %s 更新成功 ");
define("_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR", "错误：没有更新 %s 样板");

// Blocks
define( "_AM_SYSTEM_MODULES_BLOCKS_ADD", "正在新增区块…");
define( "_AM_SYSTEM_MODULES_BLOCKS_DELETE", "正在删除区块…");
define( "_AM_SYSTEM_MODULES_BLOCKS_REBUILD", "正在重建区块…");
define( "_AM_SYSTEM_MODULES_BLOCK_ID", " 区块 ID：%s ");

define( "_AM_SYSTEM_MODULES_BLOCK_ACCESS", "新增区块权限");
define( "_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR", "错误：未能新增区块权限");
define( "_AM_SYSTEM_MODULES_BLOCK_ADD", "区块 %s 已新增");
define( "_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR", "错误：未能新增区块 %s 到数据库中！");
define( "_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE", "数据库错误：%s");
define( "_AM_SYSTEM_MODULES_BLOCK_CREATED", "区块 %s 已新建");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE", "区块 %s 已删除");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA", "区块样板 %s 已从数据库中删除。");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR", "错误：未能删除区块  %s");
define( "_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR", "错误：未能从数据库中删除区块 %s。");
define( "_AM_SYSTEM_MODULES_BLOCK_DEPRECATED", "区块样板 %s deprecated ");
define( "_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR", "错误：Could not remove deprecated block template.");
define( "_AM_SYSTEM_MODULES_BLOCK_UPDATE", "区块 %s 更新成功！");

// Configs
define( "_AM_SYSTEM_MODULES_GONFIG_ID", "偏好设置编号： %s");
define( "_AM_SYSTEM_MODULES_MODULE_DATA_ADD", "正在加入模块设置资料…");
define( "_AM_SYSTEM_MODULES_MODULE_DATA_DELETE", "正在删除模块设置资料…");
define( "_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE", "模块资料更新成功 ");
define( "_AM_SYSTEM_MODULES_CONFIG_ADD", " 设置项目已新增");
define( "_AM_SYSTEM_MODULES_CONFIG_DATA_ADD", "偏好设置「%s」已新增到数据库");
define( "_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR", "错误：无法新增偏好设置「%s」到数据库。");
define( "_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE", "偏好设置资料已从数据库删除。");
define( "_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR", "错误：偏好设置资料无法从数据库删除");

// Access
define( "_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD", "正在设置群组权限…");
define( "_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR", "错误：无法删除群组权限");
define( "_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED", "群组权限已删除");
define( "_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD", "新增模块管理权限给编号 %s 的群组");
define( "_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR", "错误：无法新增模块管理权限给编号 %s 的群组");
define( "_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR", "新增模块使用权限给编号 %s 的群组");
define( "_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR", "错误：无法新增模块使用权限给编号 %s 的群组");

// execute module specific install script if any
define( "_AM_SYSTEM_MODULES_FAILED_EXECUTE", "执行 %s 失败");
define( "_AM_SYSTEM_MODULES_FAILED_SUCESS", "%s 执行成功！");
define( "_AM_SYSTEM_MODULES_DELETE_ERROR", "错误：无法删除 %s");
define( "_AM_SYSTEM_MODULES_UPDATE_ERROR", "错误：无法更新 %s");
define( "_AM_SYSTEM_MODULES_DELETE_MOD_TABLES", "删除模块数据库表...");
define( "_AM_SYSTEM_MODULES_COMMENTS_DELETE", "删除评论...");
define( "_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR", "错误：无法删除评论");
define( "_AM_SYSTEM_MODULES_COMMENTS_DELETED", "评论已删除");
define( "_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE", "删除通知消息中...");
define( "_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR", "错误：无法删除通知消息");
define( "_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED", "通知消息已删除");
define( "_AM_SYSTEM_MODULES_TABLE_DROPPED", "数据库表 %s 删除成功！");
define( "_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR", "错误：不能删除数据库表 %s");
define( "_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED", "错误：不允许删除 %s 数据库表！");

// Tips
define( "_AM_SYSTEM_MODULES_TIPS",
       "<ul>
       <li>安装新模块之后，记得设置一下模块的偏好设置、区块以及群组权限！</li>
       <li>若不想让模块出现在主选单中，请将「顺序」设为 0 即可。</li>
       <li>没有用到的模块反安装后，就请从主机删除掉实体文件，以保持网站的安全性。</li>
       <li>要调整模块顺序（会影响呈现在主选单的顺序），您只需要直接拖曳模块到您想要的位置即可。</li>
       </ul>");
define( "_AM_SYSTEM_MODULES_CONFIRM_TIPS",
      "<ul>
      <li>检查所有变更，使之生效</li>
      </ul>");