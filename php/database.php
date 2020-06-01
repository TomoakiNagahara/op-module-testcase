<?php
/** op-module-testcase:/php/database.php
 *
 * @created   2020-05-30
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
$host     = $_GET['host']     ?? '127.0.0.1';
$port     = $_GET['port']     ??  3306;
$username = $_GET['username'] ?? 'testcase';
$password = $_GET['password'] ?? 'testcase';
$database = $_GET['database'] ?? 'testcase';
$table    = $_GET['table']    ?? 't_test';
//$socket   =  null;

//	...
$sql = "SELECT * FROM `{$table}` LIMIT 10";
echo $sql;

//	...
$dump = [];

//	...
try{
	//	...
	$dsn = "mysql:host={$host};port={$port};dbname={$database}";
	D($dsn, $username, $password);

	//	...
	$pdo = new \PDO($dsn, $username, $password);
	D($pdo);

	//	...
	if(!$statement = $pdo->query($sql) ){
		D($statement, $pdo->errorInfo());
	}else{
		D($statement->fetchAll(\PDO::FETCH_ASSOC));
	}

	//	...
	$link = mysqli_connect($host, $username, $password, $database, $port);
	D($link);

}catch( \Throwable $e ){
	var_dump($e);
}

//	...
D($dump);
