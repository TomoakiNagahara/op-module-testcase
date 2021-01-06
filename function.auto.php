<?php
/** op-module-testcase:/function.auto.php
 *
 * @created   2021-01-06
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\TESTCASE;

/** use
 *
 */
use function OP\Template;
use function OP\Markdown;
use function OP\Load;

/** Auto
 *
 * @created   2020-05-21
 * @param     array        $args
 */
function Auto($args){
	//	...
	$file = array_pop($args);

	//	...
	$dirs = join('/', $args);

	//	...
	$path = './'.trim($dirs.'/'.$file,'/');

	//	...
	if( file_exists($file = $path.'.php') ){
		Template($file);
	}else{
		throw new \Exception("This file has not been exists. ($file)");
	}

	//	...
	if( file_exists($file = $path.'.md') ){
		Markdown($file);
	}
}
