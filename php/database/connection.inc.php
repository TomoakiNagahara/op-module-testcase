<?php
/** op-module-testcase:/php/database/connection.php
 *
 * @created   2020-11-18
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	Get request from URL Query.
$request = Env::Request();

//	...
if(!/*$target = */($request['target'] ?? null) ){
	echo "<p>Which your target? : <a href='?target=mysqli'>mysqli</a> / <a href='?target=pdo'>pdo</a></p>";
	return;
}

//	...
if( $socket = $request['socket'] ?? null ){
	$host   = null;
	$port   = null;
}else{
	//	...
	$host   = $request['host']   ?? 'localhost';

	//	...
	if(!$port = $request['port'] ?? null ){
		if( strpos($host = $request['host'], ':') ){
			list($host, $port) = explode(':', $host);
		}
	}
}

//	...
if( !$socket and !$host ){
	echo '<p>Empty host name.</p>';
	return;
}

//	...
$product  = $request['product']  ?? 'mysql';
$username = $request['username'] ?? 'testcase';
$password = $request['password'] ?? 'testcase';
$database = $request['database'] ?? 'testcase';

//	Which target.
if( $request['target'] === 'mysqli' ){
	//	...
	if(!$mysqli = mysqli_connect($host, $username, $password, $database, $port, $socket) ){
		Html("Failed mysql connect.");
		return;
	}
	$result  = mysqli_query($mysqli, 'SELECT VERSION()');
	$record  = mysqli_fetch_all($result);
	$version = $record[0][0];
}else{
	//	...
	if( $socket ){
		$dsn = "{$product}:unix_socket={$socket};dbname=testdb";
	}else if( $host === 'localhost' ){
		$dsn = "{$product}:host={$host};dbname={$database}";
	}else{
		$dsn = "{$product}:host={$host};port={$port};dbname={$database}";
	}

	//	...
	$options  = [
		\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	];

	//	...
	try{
		$pdo = new \PDO($dsn, $username, $password, $options);
	}catch( \Exception $e ){
		//	echo $e;
	}
}

//	...
return true;

//	For eclipse never used error.
D($pdo, $version);
