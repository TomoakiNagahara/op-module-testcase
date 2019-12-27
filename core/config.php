<?php
/**
 * module-testcase:/core/config.php
 *
 * @created   2019-12-27
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-12-27
 */
namespace OP;

//	...
$name = 'testcase';

//	...
D( Config::Get($name) );

//	...
Config::Set($name,['1st'=>true,'nest'=>[null]]);

//	...
D( Config::Get($name) );

//	...
Config::Set($name,['2nd'=>true,'nest'=>[true]]);

//	...
D( Config::Get($name) );

//	...
Config::Set($name,['1st'=>'OK','2nd'=>'OK']);

//	...
D( Config::Get($name) );

//	...
D( Env::Get($name) );
