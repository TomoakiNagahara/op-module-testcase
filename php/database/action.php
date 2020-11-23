<?php
/** op-module-testcase:/php/database/action.php
 *
 * @created   2020-05-30
 * @moved     2020-11-18   testcase:/php/database.php --> testcase:/php/database/action.php
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	Database connection.
if(!include('connection.inc.php') ){
	include('analytics.inc.php');
	return;
}

//	Database and table list.
if(!include('list.inc.php') ){
	include('analytics.inc.php');
	return;
}

//	...
include('analytics.inc.php');
