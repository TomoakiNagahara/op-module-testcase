<?php
/** op-module-testcase:/php/mysqli.php
 *
 * @created   2020-12-30
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
if(!class_exists('mysqli') ){
	Notice("Probably the MySQL module for PHP is not installed.");
	return;
}

//	...
$host     = 'localhost';
$username = 'testcase';
$password = 'testcase';
$database = 'testcase';
$port     =  3306;
$socket   =  null;

//	...
$mysqli = new \mysqli($host, $username, $password, $database, $port, $socket);
D($mysqli);

//	...
if( $mysqli->connect_error ){
	echo $mysqli->connect_error;
	return;
}

//	...
$mysqli->set_charset("utf8");

//	...
$mysqli->close();
