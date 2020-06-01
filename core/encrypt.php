<?php
/** op-module-testcase:/core/encrypt.php
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

/** namespace
 *
 */
namespace OP;

//	...
$str = $_GET['str'] ?? 'テスト';

//	...
$enc = Encrypt::Enc($str);

//	...
$dec = Encrypt::Dec($enc);

//	...
D($str, $enc, $dec);
