<?php
/**
 * module-testcase:/unit/action.php
 *
 * @created   2019-12-09
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
Load('Template');

/* @var $args array */
if(!$name = array_shift($args) ){
	Template('README.md');
	return;
}

//	...
$path = "unit:/{$name}/testcase/action.php";

//	...
if( file_exists( ConvertPath($path, false) ) ){
	//	...
	Template($path, $args);
}else{
	//	...
	Unit::Singleton($name)->Testcase($args);
}
