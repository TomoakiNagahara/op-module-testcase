<?php
/** op-module-testcase:/core/notice.php
 *
 * @creation  2019-03-17
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
Notice::Set("This is notice test.");

//	...
D( Notice::Has() );

//	...
D($_SESSION);
