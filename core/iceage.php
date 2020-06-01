<?php
/** op-module-testcase:/core/iceage.php
 *
 * @creation  2020-04-10
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
$temp = [];

//	...
$temp['正解']['jpn'] =   date(_OP_DATE_TIME_);
$temp['正解']['gmt'] = gmdate(_OP_DATE_TIME_);

//	...
$time = strtotime('2020-01-01 00:00:00' );
$temp['手本']['jpn'] =   date(_OP_DATE_TIME_, $time);
$temp['手本']['gmt'] = gmdate(_OP_DATE_TIME_, $time);

//	...
Env::Time(0, '2020-01-01 00:00:00');
$temp['time']['jpn'] = date(_OP_DATE_TIME_, Env::Time(0));
$temp['time']['gmt'] = date(_OP_DATE_TIME_, Env::Time(1));

//	...
$temp['timezone']['jpn'] = Env::Timestamp(0);
$temp['timezone']['gmt'] = Env::Timestamp(1);

//	...
D($temp);
