<?php
/**
 * module-testcase:/index.php
 *
 * @created   2019-03-01
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-20
 */
namespace OP;

//	...
if(!Env::isAdmin() ){
	echo $_SERVER['REMOTE_ADDR'];
	return;
};

//	...
require_once('function.php');

/* @var $app \OP\UNIT\App */
$app->Title('testcase');

//	...
$root_path = dirname( Unit('Router')->EndPoint() );

//	...
RootPath('testcase', $root_path);

//	...
$app->Template('index.phtml');

//	...
$app->Template('controller.php');

//	...
echo '<hr/>'.PHP_EOL;

//	...
Html(null, 'hr');
Html( 'momory usage: ' . memory_get_usage() / 1000 .'KB (max: '. memory_get_peak_usage() / 1000 .'KB)');
Debug::Set('PHP' , PHP_VERSION);
Debug::Set('SAPI', php_sapi_name());
Debug::Set('OP'  , Env::isLocalhost() ? 'localhost': geoip_country_code_by_name('onepiece-framework.com'));
Debug::Set('test',true);
Debug::Set('test',false);
Debug::Set('test',null);
Debug::Out();
