<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    tw
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 4256 2010-02-01 05:36:43Z beckmi $
 * @translator	点两下电脑工作室 http://ck2tw.net/
 */

// Navigation
define( "_AM_SYSTEM_BLOCKS_ADMIN", "区块管理" );
define( "_AM_SYSTEM_BLOCKS_MANAGMENT", "管理" );
define( "_AM_SYSTEM_BLOCKS_ADDBLOCK", "新增区块" );
define( "_AM_SYSTEM_BLOCKS_EDITBLOCK", "编辑区块" );
define( "_AM_SYSTEM_BLOCKS_CLONEBLOCK", "拷贝区块" );

// Forms
define( "_AM_SYSTEM_BLOCKS_CUSTOM", "自定义区块" );
define( "_AM_SYSTEM_BLOCKS_TYPES", "所有类型" );
define( "_AM_SYSTEM_BLOCKS_GENERATOR", "区块所属模块：");
define( "_AM_SYSTEM_BLOCKS_GROUP", "群组");
define( "_AM_SYSTEM_BLOCKS_SVISIBLEIN", "显示于");
define( "_AM_SYSTEM_BLOCKS_DISPLAY", "显示区块" );
define( "_AM_SYSTEM_BLOCKS_HIDE", "隐藏区块 " );
define( "_AM_SYSTEM_BLOCKS_CLONE", "拷贝");
define( "_AM_SYSTEM_BLOCKS_SIDELEFT", "左");
define( "_AM_SYSTEM_BLOCKS_SIDETOPLEFT", "上左");
define( "_AM_SYSTEM_BLOCKS_SIDETOPCENTER", "上中");
define( "_AM_SYSTEM_BLOCKS_SIDETOPRIGHT", "上右");
define( "_AM_SYSTEM_BLOCKS_SIDERIGHT", "右");
define( "_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT", "下左");
define( "_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER", "下中");
define( "_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT", "下右");
define( "_AM_SYSTEM_BLOCKS_ADD", "新增区块");
define( "_AM_SYSTEM_BLOCKS_MANAGE", "管理区块");
define( "_AM_SYSTEM_BLOCKS_NAME", "名称" );
define( "_AM_SYSTEM_BLOCKS_TYPE", "区块类型" );
define( "_AM_SYSTEM_BLOCKS_SBLEFT", "边缘区块 - 左边" );
define( "_AM_SYSTEM_BLOCKS_SBRIGHT", "边缘区块 - 右边" );
define( "_AM_SYSTEM_BLOCKS_CBLEFT", "中央区块 - 左" );
define( "_AM_SYSTEM_BLOCKS_CBRIGHT", "中央区块 - 右" );
define( "_AM_SYSTEM_BLOCKS_CBCENTER", "中央区块 - 中" );
define( "_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT", "中央区块 - 底左" );
define( "_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT", "中央区块 - 底右" );
define( "_AM_SYSTEM_BLOCKS_CBBOTTOM", "中央区块 - 底部" );
define( "_AM_SYSTEM_BLOCKS_WEIGHT", "顺序" );
define( "_AM_SYSTEM_BLOCKS_VISIBLE", "仅显示启用？" );
define( "_AM_SYSTEM_BLOCKS_VISIBLEIN", "显示于" );
define( "_AM_SYSTEM_BLOCKS_TOPPAGE", "首页");
define( "_AM_SYSTEM_BLOCKS_ALLPAGES", "全部页面");
define( "_AM_SYSTEM_BLOCKS_UNASSIGNED", "未指定");
define( "_AM_SYSTEM_BLOCKS_TITLE", "标题" );
define( "_AM_SYSTEM_BLOCKS_CONTENT", "内容" );
define( "_AM_SYSTEM_BLOCKS_USEFULTAGS", "可用标签：" );
define( "_AM_SYSTEM_BLOCKS_BLOCKTAG1", "%s 将会列印出 %s" );
define( "_AM_SYSTEM_BLOCKS_CTYPE", "内容类型" );
define( "_AM_SYSTEM_BLOCKS_HTML", "HTML" );
define( "_AM_SYSTEM_BLOCKS_PHP", "PHP脚本" );
define( "_AM_SYSTEM_BLOCKS_AFWSMILE", "自动格式（启用表情图）" );
define( "_AM_SYSTEM_BLOCKS_AFNOSMILE", "自动格式（关闭表情图）" );
define( "_AM_SYSTEM_BLOCKS_BCACHETIME", "快取时间");
define( "_AM_SYSTEM_BLOCKS_CUSTOMHTML", "自定义区块（HTML）" );
define( "_AM_SYSTEM_BLOCKS_CUSTOMPHP", "自定义区块（PHP）" );
define( "_AM_SYSTEM_BLOCKS_CUSTOMSMILE", "自定义区块（自动格式 + 表情图）" );
define( "_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE", "自定义区块（自动格式）" );
define( "_AM_SYSTEM_BLOCKS_EDITTPL", "编辑样板");
define( "_AM_SYSTEM_BLOCKS_OPTIONS", "选项" );
define( "_AM_SYSTEM_BLOCKS_DRAG", "拉动或排序区块" );

// Messages
define( "_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED );
define( "_AM_SYSTEM_BLOCKS_RUSUREDEL", "您确定要删除区块 <div class='bold'>%s</div> 吗？" );
define( "_AM_SYSTEM_BLOCKS_SYSTEMCANT", "不能删除系统区块！" );
define( "_AM_SYSTEM_BLOCKS_MODULECANT", "这个区块不能直接删除！若您不想要这个区块，请先关闭相关模块。" );


// Tips
define( '_AM_SYSTEM_BLOCKS_TIPS',
       '<ul>
       <li>只要点选 <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> 即可通过拖拉的方式轻松的变换区块位置以及进行区块管理。</li>
       <li>可新增自定义区块，输入任何您想秀在网站上的内容。</li>
       <li>通过点击 <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> 或 <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /> 即可设置区块是否显示。</li>
       </ul>' );