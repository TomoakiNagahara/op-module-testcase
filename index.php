<?php
/** op-module-testcase:/index.php
 *
 * @created   2019-03-01
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	...
if(!Env::isAdmin() ){
	echo $_SERVER['REMOTE_ADDR'];
	return;
};

//	...
Load('Args');

//	...
require_once('function.php');

/* @var $app \OP\UNIT\App */
$app->Title('testcase');

//	...
$root_path = dirname( Unit('Router')->EndPoint() );

//	...
RootPath('testcase', $root_path);

//	...
Template('index.phtml');
