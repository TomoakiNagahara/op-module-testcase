<?php
/** op-module-testcase:/app/locale.php
 *
 * @created   2019-04-18
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app \OP\UNIT\App */

//	...
$temp = [];
$temp['locale'] = OP\Cookie::Get('locale');
$temp['config']['router'] = OP\Env::Get('router');
$temp['config']['g11n']   = OP\Env::Get('g11n');

//	...
D($temp);
