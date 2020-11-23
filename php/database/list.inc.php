<?php
/** op-module-testcase:/php/database/list.inc.php
 *
 * @created   2020-11-23
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

/* @var $pdo    \PDO    */
/* @var $mysqli \mysqli */

//	...
$databases = [];

//	...
if( $pdo ?? null ){

}

//	...
if( $mysqli ?? null ){
	//	...
	if( $result = mysqli_query($mysqli, 'SHOW DATABASES') ){
		$record = mysqli_fetch_all($result);
		foreach( $record as $temp ){
			//	...
			$database_name = $temp[0];

			//	...
			if( $database_name === 'information_schema' ){
				continue;
			}

			//	...
			$tables = [];

			//	...
			mysqli_query($mysqli, "USE {$database_name}");

			//	...
			if( $result = mysqli_query($mysqli, 'SHOW TABLES') ){

				//	...
				foreach( mysqli_fetch_all($result) as $table ){
					$tables[] = $table[0];
				}
			}

			//	...
			$databases[$database_name] = $tables;
		}
	}
}

//	...
return true;

//	...
D($databases);
