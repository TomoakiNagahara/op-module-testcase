<?php
/** op-module-testcase:/core/unit.php
 *
 * @created   2019-12-13
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

/** use
 *
 */
use OP\UNIT\Testcase;

//	...
if(!require( ConvertPath('testcase:/Testcase.class.php') ) ){
	Notice("Include class is failed.");
}

Html('Singleton','h1');
Html('Check return same instance.');

//	...
$testcase1 = Testcase::Singleton();
D( $testcase1->Count() );

//	...
$testcase2 = Testcase::Singleton();
D( $testcase2->Count() );

Html('','hr');
