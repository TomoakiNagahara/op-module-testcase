<?php
/**
 * module-testcase:/core/metapath.php
 *
 * @creation  2019-03-26
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-03-26
 */
namespace OP;

/* @var $app \OP\UNIT\App */

//	...
echo 'app:/ --&gt; ' . ConvertPath('app:/').'<br/>';

//	...
echo 'app:/ --&gt; ' . ConvertURL('app:/').'<br/>';

//	G11n
if( $_GET['g11n'] ?? Env::Get('router')['g11n']['execute'] ?? null ){
	echo 'app:/ --&gt; ' . $app->URL('app:/hoge/hoge?foo=bar').'<br/>';
};
