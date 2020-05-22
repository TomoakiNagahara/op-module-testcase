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
