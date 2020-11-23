<?php
/** op-module-testcase:/readme.php
 *
 *  Automatically display README.md file.
 *  Search from low hierarchy.
 *
 * @created   2020-11-19
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
$root = RootPath('testcase');

//	...
do{
	//	...
	$path = null;

	//	...
	if( $args ){
		$path = join('/', $args).'/';
	}

	//	...
	$path .= 'README.md';

	//	...
	if( file_exists($root . $path) ){
		Load('Markdown');
		Markdown("testcase:/{$path}");
		return;
	}

}while( array_pop($args) );
