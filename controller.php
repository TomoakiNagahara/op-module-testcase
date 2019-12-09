<?php
/**
 * module-testcase:/index.php
 *
 * @creation  2019-03-01
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-02-20
 */
namespace OP;

/* @var $app \OP\UNIT\App */
$args = $app->Args();

//	...
$arg  = null;
$join = [];
$root = ConvertPath('testcase:/');

//	...
while( $arg = array_shift($args) ){
	//	...
	$join[] = $arg;

	//	...
	$path = $root.join('/',$join);

	//	menu
	if( file_exists($menu = $path . '/menu.phtml') ){
		$app->Template($menu);
	};

	//	...
	      if( file_exists( $file = $path . '/action.php' ) ){
		//	...
	}else if( file_exists( $file = $path . '.php' ) ){
		//	...
	}else{
		continue;
	};

	//	...
	$app->Template($file);
};
