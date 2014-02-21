<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    zh_tw
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 4091 2010-01-05 17:02:11Z forxoops $
 * @translator	点两下电脑工作室 http://ck2tw.net/
 */

// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN", "偏好设置");

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS", "<ul><li>管理所有网站的设置</li></ul>");

define("_MD_AM_SITEPREF", "网站参数设置");
define("_MD_AM_SITENAME", "网站名称");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "网站口号");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "管理员电子邮件");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "网站预设语言");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "网站首页所用模块");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "无");
define("_MD_AM_SERVERTZ", "伺服器时区");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "网站预设时区");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "预设主题（theme）");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "样板主题");
define("_MD_AM_CUSTOM_REDIRECT", "使用 jGrowl 动态转向");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "以 jquery 的方式取代原有的页面转向效果<br />jGrowl 是一个 jQuery 用来进行 XOOPS 消息提示的外挂");
define("_MD_AM_ANONNAME", "匿名使用者名称");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "密码最小长度");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "有新会员注册时发送电子邮件通知？");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "允许会员删除自己的帐号？");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_USEGZIP", "使用 gzip 压缩？");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "会员帐号的允许类型");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "严格 （只允许字母和数字）");
define("_MD_AM_MEDIUM", "中等");
define("_MD_AM_LIGHT", "宽鬆（可使用中文字）");
define("_MD_AM_USERCOOKIE", "设置会员帐号的 cookies 名称，可以让会员不用每次都输入使用者名称");
define("_MD_AM_USERCOOKIEDSC", "使用此 cookie 储存会员帐号一年（如果会员愿意），如果有此 cookie，登录框将自动显示会员帐号。");
define("_MD_AM_USEMYSESS", "使用自定义 session");
define("_MD_AM_USEMYSESSDSC", "是否使用自定义 session。");
define("_MD_AM_SESSNAME", "Session 名称");
define("_MD_AM_SESSNAMEDSC", "Session名称（启用自定义session才有作用）。");
define("_MD_AM_SESSEXPIRE", "Session 有效时间");
define("_MD_AM_SESSEXPIREDSC", "最大 sesssion 有效时间[以分钟计]（只有当启用自定义 seesion 时才有效）。");
define("_MD_AM_BANNERS", "启用广告？");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "您的 IP 位址");
define("_MD_AM_MYIPDSC", "来自此 IP 的展示不计入广告的展示统计。");
define("_MD_AM_ALWDHTML", "允许使用的 HTML 标签");
define("_MD_AM_INVLDMINPASS", "密码最小长度");
define("_MD_AM_INVLDUCOOK", "不正确的帐号 cookies 名称");
define("_MD_AM_INVLDSCOOK", "不正确的 session cookies 名称");
define("_MD_AM_INVLDSEXP", "不正确的 session 时间");
define("_MD_AM_ADMNOTSET", "管理员电子邮件地址未设置");
define("_MD_AM_YES", "是");
define("_MD_AM_NO", "否");
define("_MD_AM_DONTCHNG", "请勿修改！");
define("_MD_AM_REMEMBER", "为了让系统能正常操作该文件，请将该文件的属性设为644");
define("_MD_AM_IFUCANT", "如果无法修改属性，请手动修改文件");

define("_MD_AM_COMMODE", "预设的评论显示模式");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "预设的评论排序方式");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "允许在评论中使用 HTML");
define("_MD_AM_DEBUGMODE", "开启错误检查模式");
define("_MD_AM_DEBUGMODEDSC", "开启后将会显示错误信息，网站正式执行后请关闭此功能。");
define("_MD_AM_AVATARALLOW", "允许上传头像");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "最少发佈文章数");
define("_MD_AM_AVATARMPDSC", "只有发表超过该数目的会员才可以上传头像。");
define("_MD_AM_AVATARW","头像最大宽度（像素）");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH","头像最大高度（像素）");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX","头像文件大小（位元组）");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF","自定义头像设置");
define("_MD_AM_CHNGUTHEME","修改所有会员的主题");
define("_MD_AM_NOTIFYTO","会员注册时通知群组");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME","允许会员选择主题");
define("_MD_AM_ALLOWIMAGE","允许会员在发表的文章中显示图片");

define("_MD_AM_USERACTV","需要经由电子邮件启用帐号");
define("_MD_AM_AUTOACTV","注册后自动启用");
define("_MD_AM_ADMINACTV","由管理员手动启用");
define("_MD_AM_ACTVTYPE","选择会员注册的启用方式");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP","选择启用邮件要附送的群组");
define("_MD_AM_ACTVGROUPDSC","只有选用「由管理员启用」才有效。");
define("_MD_AM_USESSL", "使用 SSL 加密方式登录？");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "SSL Post 变数名称");
define("_MD_AM_SSLPOSTDSC", "经由 POST 发送 Session 值时所用的变数名称，如果您不瞭解此变数，请选一个不容易猜到的名称。");
define("_MD_AM_DEBUGMODE0","关闭");
define("_MD_AM_DEBUGMODE1","PHP 错误检查");
define("_MD_AM_DEBUGMODE2","MySQL/Blocks 错误检查");
define("_MD_AM_DEBUGMODE3","Smarty 样板错误检查");
define("_MD_AM_MINUNAME", "帐号最小长度");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "帐号最大长度");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "基本参数设置");
define("_MD_AM_USERSETTINGS", "会员管理设置");
define("_MD_AM_ALLWCHGMAIL", "允许会员修改电子邮件地址");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "被禁止的 IP");
define("_MD_AM_BADEMAILS", "使用者注册时不可使用的电子邮件");
define("_MD_AM_BADEMAILSDSC", "请用 <strong>|</strong> 分隔关键词，不区分大小写，可使用 regex。");
define("_MD_AM_BADUNAMES", "禁用的帐号名称");
define("_MD_AM_BADUNAMESDSC", "请用 <strong>|</strong> 分隔关键词，不区分大小写，可使用 regex。");
define("_MD_AM_DOBADIPS", "启用 IP 被禁止功能");
define("_MD_AM_DOBADIPSDSC", "使用此 IP 位址的使用者将无法浏览您的网站。");
define("_MD_AM_BADIPS", "输入要被禁止的 IP 位址。<br />请用 <strong>|</strong> 分隔关键词，不区分大小写，可使用正规表达式（所以点「.」代表「任何字元」而「\.」才是代表「.」）。");
define("_MD_AM_BADIPSDSC", "^aaa\.bbb\.ccc 将拒绝以 aaa.bbb.ccc 开头的 IP 位址的存取。<br />aaa\.bbb\.ccc$ 将拒绝以 aaa.bbb.ccc 结尾的 IP 位址的存取。 <br />aaa\.bbb\.ccc 将拒绝含有 aaa.bbb.ccc 的 IP 位址的存取。");
define("_MD_AM_PREFMAIN", "系统参数设置");
define("_MD_AM_METAKEY", "Meta 关键字");
define("_MD_AM_METAKEYDSC", "关键字标示用于代表站台的主要内容，通常由多个关键词组成，填入多个关键词请用半形逗号（,）隔开（如 XOOP, PHP, mySQL, portal system）");
define("_MD_AM_METARATING", "Meta 等级");
define("_MD_AM_METARATINGDSC", "等级标示用来定义站台的适合年龄及内容的等级。");
define("_MD_AM_METAOGEN", "一般");
define("_MD_AM_METAO14YRS", "14 岁");
define("_MD_AM_METAOREST", "限制");
define("_MD_AM_METAOMAT", "成人");
define("_MD_AM_METAROBOTS", "Meta 机器人");
define("_MD_AM_METAROBOTSDSC", "机器人标示用来告知查询引擎什么样的内容可供其索引。");
define("_MD_AM_INDEXFOLLOW", "Index, Follow");
define("_MD_AM_NOINDEXFOLLOW", "No Index, Follow");
define("_MD_AM_INDEXNOFOLLOW", "Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW", "No Index, No Follow");
define("_MD_AM_METAAUTHOR", "Meta 作者");
define("_MD_AM_METAAUTHORDSC", "作者名称、电子邮件地址及网址。");
define("_MD_AM_METACOPYR", "Meta 版权");
define("_MD_AM_METACOPYRDSC", "版权标示用来定义网站页面文件所遵循的版权说明。");
define("_MD_AM_METADESC", "Meta 描述");
define("_MD_AM_METADESCDSC", "描述标示相当于网站的摘要，通常用一小段文字来表达。");
define("_MD_AM_METAFOOTER", "Meta 及页尾");
define("_MD_AM_FOOTER", "页尾注脚");
define("_MD_AM_FOOTERDSC", "确定使用完整网址，否则链接到模块页面将不能正常工作。");
define("_MD_AM_CENSOR", "敏感词语检查");
define("_MD_AM_DOCENSOR", "启用敏感词语检查");
define("_MD_AM_DOCENSORDSC", "若此选项开启，将会筛选文章中的敏感词语，若为了提升网站速度，建议关闭此选项。");
define("_MD_AM_CENSORWRD", "敏感词语");
define("_MD_AM_CENSORWRDDSC", "输入要禁用的敏感词语。<br />使用 <strong>|</strong> 分开，不区分大小写。");
define("_MD_AM_CENSORRPLC", "敏感词语将被取代为：");
define("_MD_AM_CENSORRPLCDSC", "敏感词语将会被取代成您所输入的字元。");

define("_MD_AM_SEARCH", "查询选项");
define("_MD_AM_DOSEARCH", "启用全站查询");
define("_MD_AM_DOSEARCHDSC", "允许查询全站范围的内容。");
define("_MD_AM_MINSEARCH", "关键字最小长度");
define("_MD_AM_MINSEARCHDSC", "查询时须输入最少的字数。");
define("_MD_AM_MODCONFIG", "系统基本设置选项");
define("_MD_AM_DSPDSCLMR", "显示注册条款声明");
define("_MD_AM_DSPDSCLMRDSC", "选择是，将在注册页面显示条款声明。");
define("_MD_AM_REGDSCLMR", "注册条款声明");
define("_MD_AM_REGDSCLMRDSC", "会员注册时显示的条款。");
define("_MD_AM_ALLOWREG", "允许新会员注册");
define("_MD_AM_ALLOWREGDSC", "如果不再接受新会员，就选「否」。");
define("_MD_AM_THEMEFILE", "自动编译您修改的样板档？");
define("_MD_AM_THEMEFILEDSC", "若为「是」，当您修改完样板会自动编译成新样板。若网站已经稳定运作不会再修改样板，那么建议您关闭之。");
define("_MD_AM_CLOSESITE", "关闭网站");
define("_MD_AM_CLOSESITEDSC", "网站关闭后，只允许被授权的群组会员进入。");
define("_MD_AM_CLOSESITEOK", "选择网站关闭后，有权进入的会员群组");
define("_MD_AM_CLOSESITEOKDSC", "网站最高管理权者不受限制。");
define("_MD_AM_CLOSESITETXT", "网站关闭原因");
define("_MD_AM_CLOSESITETXTDSC", "网站关闭时，该段内容自动显示在首页。");
define("_MD_AM_SITECACHE", "网站快取");
define("_MD_AM_SITECACHEDSC", "快取储存网站的内容，如模块、区块…等。");
define("_MD_AM_MODCACHE", "模块快取");
define("_MD_AM_MODCACHEDSC", "快取模块资料。");
define("_MD_AM_NOMODULE", "没有模块使用快取");
define("_MD_AM_DTPLSET", "预设样板群组");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "SSL 登录页面的 URL");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER","电子邮件设置");
define("_MD_AM_MAILER_MAIL","电子邮件");
define("_MD_AM_MAILER_SENDMAIL","发送电子邮件");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","寄件人电子邮件地址");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","寄件人姓名");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","来自");
define("_MD_AM_MAILFROMUIDDESC","当系统发送一则私人消息，显示的寄件人姓名。");
define("_MD_AM_MAILERMETHOD","电子邮件分发方式");
define("_MD_AM_MAILERMETHODDESC","用于分发电子邮件的方式，预设为「mail」，除非这种方式无法正常工作，否则不要用其它方式。");
define("_MD_AM_SMTPHOST","SMTP 伺服器");
define("_MD_AM_SMTPHOSTDESC","尝试连接的 SMTP 伺服器清单。");
define("_MD_AM_SMTPUSER","SMTPAuth 的使用者名称");
define("_MD_AM_SMTPUSERDESC","很多 SMTP 伺服器都启用了验证功能，请输入您的会员帐号。");
define("_MD_AM_SMTPPASS","SMTPAuth 的密码");
define("_MD_AM_SMTPPASSDESC","输入您在 SMTP 伺服器的会员密码。");
define("_MD_AM_SENDMAILPATH","sendmail 路径");
define("_MD_AM_SENDMAILPATHDESC","请输入您 Web 伺服器上的 Sendmail 程式（或者其它邮件伺服器程式）的路径。");
define("_MD_AM_THEMEOK","使用者可选择的主题");
define("_MD_AM_THEMEOKDSC","可供使用者选择的主题。");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","此为 soap 伺服器位置");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say '是'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","若是您需要 wdsl soap 服务，请启用此选项。");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP 帐号");
define("_MD_AM_SOAP_USERNAMEDESC","soap 伺服器上的帐号.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP 密码");
define("_MD_AM_SOAP_PASSWORDDESC","若您的 soap service 需要密码请在此输入。");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client Alive");
define("_MD_AM_SOAP_KEEPCLIENTDESC","保持 Soap 客户端连线状态");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - 特殊帐号");
define("_MD_AM_SOAP_FILTERPERSONDESC","用来进行 Xoops 验证的特殊帐号。");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy 主机位址");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP 伺服器之 Proxy 伺服器");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy 埠号");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP 伺服器之 Proxy 伺服器的埠号<br>例如：0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy 帐号");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP 伺服器之 Proxy 伺服器帐号");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy 密码");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP 伺服器之 Proxy 伺服器密码");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP 逾期时限");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","保持 Soap 请求之有效性 <strong>xx</strong> 秒。");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP 执行时限");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","保持 Soap 请求 <strong>xx</strong> 秒。");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops验证伺服器栏位对应");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","在此输入XOOPS数据库栏位与LDAP验证系统栏位的对应。" .
       "<br /><br />格式 [Xoops 数据库栏位]=[LDAP 属性]" .
       "<br />例如： email=mail" .
       "<br />用 | 作为分隔符号" .
       "<br /><br />！！仅适用进阶使用者！！");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS 数据库");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "标准 LDAP 目录");
define("_MD_AM_AUTH_CONFOPTION_AD", "微软 Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops Soap Authentication");
define("_MD_AM_AUTHENTICATION", "认证方式管理");
define("_MD_AM_AUTHMETHOD", "认证方法");
define("_MD_AM_AUTHMETHODDESC", "选择对会员身份进行认证的方法。");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - 邮件网域名称");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","LDAP 树状目录中邮件的网域名称。");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - 通用名称（CN）的网域名称");
define("_MD_AM_LDAP_NAME_ATTR_DESC","LDAP 目录中通用名称（Common Name）的网域名称。");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - 姓的网域名称");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","LDAP 目录中姓（Surname）的网域名称。");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - 名的网域名称");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","LDAP 目录中名（Given Name）的网域名称。");
define("_MD_AM_LDAP_BASE_DN", "LDAP - 基本识别名");
define("_MD_AM_LDAP_BASE_DN_DESC", "LDAP 树状目录的基本识别名（Distinguished Name）。");
define("_MD_AM_LDAP_PORT","LDAP - 连接埠号。");
define("_MD_AM_LDAP_PORT_DESC","登录 LDAP 目录伺服器的连接埠号。");
define("_MD_AM_LDAP_SERVER","LDAP - 伺服器名");
define("_MD_AM_LDAP_SERVER_DESC","LDAP 目录伺服器的名称。");

define("_MD_AM_LDAP_MANAGER_DN", "LDAP 管理员识别名");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "允许查询的人员识别名。");
define("_MD_AM_LDAP_MANAGER_PASS", "LDAP 管理员的密码");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "允许查询的人员密码。");
define("_MD_AM_LDAP_VERSION", "LDAP 版本协定");
define("_MD_AM_LDAP_VERSION_DESC", "LDAP 版本协定：2或3。");
define("_MD_AM_LDAP_USERS_BYPASS", "使用者可以绕过 LDAP 验证");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "使用者以 XOOPS 方式验证。");

define("_MD_AM_LDAP_USETLS", " 使用 TLS 链接");
define("_MD_AM_LDAP_USETLS_DESC", "使用 TLS（Transport Layer Security-传输层安全）连接，TLS 使用标准的 389 连接埠<BR>并且 LDAP 的版本为3。");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","用于查询会员的 LDAP 属性");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","当在识别名（DN）选项中设置登录名为「是」时，必须与 XOOPS 中的登录名一致。");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "在识别名中使用的登录名");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "LDAP 的识别名（DN）中使用的 XOOPS 登录名（如：uid=<loginname>,dc=xoops,dc=org）<br />该执行绪不用查询，而是直接在目录伺服器中读取。");

define("_MD_AM_LDAP_FILTER_PERSON", "LDAP 查询使用者的查询筛选器");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "使用者查询会员的特殊 LDAP 过期器，@@loginname@@ 被取代成为使用者的登录名，如果你不清楚，请务必留空！" .
       "<br />例如：(&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
       "<br />例如：(&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "域名");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows 域名（只有活动目录伺服器（ADS）和NT伺服器）。");

define("_MD_AM_LDAP_PROVIS", "自动建立会员帐号");
define("_MD_AM_LDAP_PROVIS_DESC", "如果没有 XOOPS 使用者数据库，那么将自动建立。");

define("_MD_AM_LDAP_PROVIS_GROUP", "预设新会员群组");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "新会员将会被设置为该群组。");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "XOOPS认证伺服器栏位对应");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "在此输入XOOPS数据库栏位与LDAP验证系统栏位的对应。" .
       "<br /><br />格式 [Xoops 数据库栏位]=[LDAP 属性]" .
       "<br />例如： email=mail" .
       "<br />用 | 作为分隔符号" .
       "<br /><br />！！仅适用进阶使用者！！");

define("_MD_AM_LDAP_PROVIS_UPD", "从验证伺服器来维护XOOPS会员帐号");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "XOOPS会员帐号总是与验证伺服器进行同步");


define("_MD_AM_CPANEL", "控制台介面（Control Panel GUI）");
define("_MD_AM_CPANELDSC", "后台");

define("_MD_AM_WELCOMETYPE", "发送欢迎信息");
define("_MD_AM_WELCOMETYPE_DESC", "选择一种方式，在使用者成功注册以后发送欢迎信息。");
define("_MD_AM_WELCOMETYPE_EMAIL", "电子邮件");
define("_MD_AM_WELCOMETYPE_PM", "私人消息");
define("_MD_AM_WELCOMETYPE_BOTH", "电子邮件和私人消息");

define("_MD_AM_MODULEPREF", "模块偏好设置");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS", "系统基本设置");