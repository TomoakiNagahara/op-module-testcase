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
$args = Args();

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
		Template($menu);
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
	Template( CompressPath($file), ['args'=>$args]);
};
