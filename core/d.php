<?php
/** op-module-testcase:/core/d.php
 *
 * @created   2020-06-01
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
$count = & $_SESSION['OP']['TESTCASE']['d']['count'];
$count = 1 + (int)$count;

//	...
D( $_SESSION );
