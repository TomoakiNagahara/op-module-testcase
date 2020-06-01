<?php
/** op-module-testcase:/core/time.php
 *
 * @created   2019-04-18
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//date_default_timezone_set('asia/tokyo');

//	...
$temp = [];
$temp['timezone']         = date_default_timezone_get();
$temp['time']             = time();
$temp['gmtime']           = strtotime(gmdate('Y-m-d H:i:s'));
$temp['time()']['date']   = date(  'Y-m-d H:i:s', time());
$temp['time()']['gmdate'] = gmdate('Y-m-d H:i:s', time());

//	...
$temp['op']['time']   = Env::Time();
$temp['op']['date']   =   date('Y-m-d H:i:s', Env::Time());
$temp['op']['gmdate'] = gmdate('Y-m-d H:i:s', Env::Time());

//	...
D($temp);
