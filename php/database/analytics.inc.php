<?php
/** op-module-testcase:/php/database/analytics.inc.php
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

//	...
$result = [];

//	...
foreach(['mysqli','pdo','version','socket','host','port','username','password','database','dsn','options','databases','tables'] as $key){
	if( ${$key} ?? null ){
		$result[$key] = ${$key};
	}
}

//	...
D($result);
