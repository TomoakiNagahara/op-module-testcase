<?php
/** op-module-testcase:/php/pdo.php
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
$dsn      = 'mysql:dbname=testcase;host=localhost';
$user     = 'testcase';
$password = 'testcase';

//	PDO Connection
try{
	$pdo = new \PDO($dsn, $user, $password);
}catch(\PDOException $e){
	Notice($e->getMessage());
	return;
}

//	...
D($pdo);

//	Show tables.
$tables = [];
foreach( $pdo->query("SHOW TABLES") as $record ){
	$tables[] = $record['Tables_in_testcase'];
}
D($tables);

//	SELECT
if(!$table = $tables[0] ?? null ){
	return;
}

//	...
foreach( $pdo->query("SELECT * FROM {$table} LIMIT 1") as $record ){
	D($record);
}
