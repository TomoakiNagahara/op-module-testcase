<?php
/** op-module-testcase:/core/env.php
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
$temp = [];
$temp['ip_address'] = $_SERVER['REMOTE_ADDR'];
$temp['admin']      = Env::isAdmin();
$temp['localhost']  = Env::isLocalhost();
$temp['locale']     = Env::Locale();

//	Case sensitive.
Env::Set('testcase',[true]);
$temp['case_sensitive'] = Env::Get('TESTCASE');

//	Display
D($temp);
