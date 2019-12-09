<?php
/**
 * module-testcase:/core/env.php
 *
 * @creation  2019-03-17
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-02-20
 */
namespace OP;

//	...
$temp = [];
$temp['admin']      = Env::isAdmin();
$temp['localhost']  = Env::isLocalhost();
$temp['ip_address'] = $_SERVER['REMOTE_ADDR'];

//	Case sensitive.
Env::Set('test',true);
$temp['case_sensitive'] = Env::Get('TEST');

//	...
D($temp);

//	...
Env::Debug();
