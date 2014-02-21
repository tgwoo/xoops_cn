<?php
/**
* @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
* @license     http://www.fsf.org/copyleft/gpl.html GNU public license
* _LANGCODE    tw
* _CHARSET     UTF-8
* @version     $Id:$
* @translator	点两下电脑工作室 http://ck2tw.net/
*/

//Nav
define("_AM_SYSTEM_MAINTENANCE_NAV_MANAGER", "维护");
define("_AM_SYSTEM_MAINTENANCE_NAV_LIST","所有维护");
define("_AM_SYSTEM_MAINTENANCE_NAV_DUMP","导出");

define("_AM_SYSTEM_MAINTENANCE_SESSION","清空 sessions 数据库表");
define("_AM_SYSTEM_MAINTENANCE_SESSION_OK","Session 维护：完成");
define("_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK","Session 维护：失败");
define("_AM_SYSTEM_MAINTENANCE_CACHE","清空快取目录");
define("_AM_SYSTEM_MAINTENANCE_CACHE_OK","快取维护：完成");
define("_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK","快取维护：失败");
define("_AM_SYSTEM_MAINTENANCE_TABLES","数据库表维护");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OK","数据库表维护：完成");
define("_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK","数据库表维护：失败");
define("_AM_SYSTEM_MAINTENANCE_QUERY_DESC","优化、检查、修复及分析您的数据库表");
define("_AM_SYSTEM_MAINTENANCE_QUERY_OK","数据库维护：完成");
define("_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK","数据库维护：失败");
define("_AM_SYSTEM_MAINTENANCE_CHOICE1","优化数据库表");
define("_AM_SYSTEM_MAINTENANCE_CHOICE2","检查数据库表");
define("_AM_SYSTEM_MAINTENANCE_CHOICE3","修复数据库表");
define("_AM_SYSTEM_MAINTENANCE_CHOICE4","分析数据库表");
define("_AM_SYSTEM_MAINTENANCE_TABLES_DESC",
"「分析数据库表」会对数据库表进行分析以及索引的重整，进行分析时，此数据库表会暂时被锁住无法读取。<br />
「检查数据库表」用来检查数据库表有无错误。<br />
「优化数据库表」 会重新清除表中没用到的空间，并将资料进行重整让读取更有效率。<br />
「修复数据库表」用来修复毁损的数据库表。");

define("_AM_SYSTEM_MAINTENANCE_RESULT","结果");
define("_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT","无结果");
define("_AM_SYSTEM_MAINTENANCE_RESULT_CACHE","清除快取任务");
define("_AM_SYSTEM_MAINTENANCE_RESULT_SESSION","清除session数据库表任务");
define("_AM_SYSTEM_MAINTENANCE_RESULT_QUERY","数据库维护任务");
define("_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE","没有选择欲维护的数据库表");

define("_AM_SYSTEM_MAINTENANCE_TABLES1","数据库表");
define("_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE","优化");
define("_AM_SYSTEM_MAINTENANCE_TABLES_CHECK","检查");
define("_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR","修复");
define("_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE","分析");

//Dump
define("_AM_SYSTEM_MAINTENANCE_DUMP","导出");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES","选择数据库表或模块");
define("_AM_SYSTEM_MAINTENANCE_DUMP_DROP","加入删除数据库表语法到导出文件中");
define("_AM_SYSTEM_MAINTENANCE_DUMP_OR", "或");
define("_AM_SYSTEM_MAINTENANCE_DUMP_AND", "及");
define("_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "您必须选择数据库表或模块");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES", "无数据库表");
define("_AM_SYSTEM_MAINTENANCE_DUMP_TABLES", "数据库表");
define("_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES", "数据库表结构");
define("_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS", "纪录数量");
define("_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED", "文件已建立");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RESULT", "结果");
define("_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS", "纪录");

// Tips
define("_AM_SYSTEM_MAINTENANCE_TIPS",
'<ul>
<li>您可以在此进行简单的维护动作，包括清除XOOPS快取以及session数据库表，或者对于XOOPS的数据库表进行修复、检查的基本维护。</li>
</ul>' );