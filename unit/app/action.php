<?php
/**
 * module-testcase:/unit/app/action.php
 *
 * @creation  2019-04-02
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app  OP\UNIT\App */

//	...
$args = $app->Args();

//	...
$file = array_pop($args);

//	...
if(!file_exists($path = "{$file}.inc.php") ){
	unset($path);
};

//	...
$app->Template('menu.phtml');

//	...
if( $path ?? null ){
	$app->Template($path);
};
