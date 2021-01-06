<?php
/** op-module-testcase:/function.menu.php
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
use OP\Env;

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
