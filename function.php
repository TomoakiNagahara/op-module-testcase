<?php
/** op-module-testcase:/function.php
 *
 * @created   2020-05-21
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
use OP\Notice;
use OP\Env;

/** Auto
 *
 * @created   2020-05-21
 */
function Auto($args){
	//	...
	if(!$file = array_shift($args) ){
		return;
	}

	//	...
	$file.= '.php';

	//	...
	if(!file_exists($file) ){
		Notice::Set("This file has not been exists. ($file)");
		return;
	}

	//	...
	require($file);
}

/** Menu
 *
 * @created   2020-05-21
 */
function Menu(){
	//	...
	if(!Env::isHttp() ){
		return;
	}

	//	...
	echo '<div class="menu">';

	//	...
	foreach( glob('*\.php') as $file ){
		//	...
		list($name, $ext) = explode('.', $file);

		//	...
		if( $name === 'action' or $ext !== 'php' ){
			continue;
		}

		//	...
		printf('<span class="menu"><a href="%s">%s</a></span >', $name, $name);
	}

	//	...
	echo '</div>';
}
