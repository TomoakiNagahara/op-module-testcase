<?php
/** op-module-testcase:/core/d.php
 *
 * @created   2020-06-01
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
$object = new \stdClass();
$object->string  = 'string';
$object->integer =  1;
$object->double  =  1.1;
$object->float   =  0.1;
$object->object  = new \stdClass();

//	...
D('string', '1', '1.1', '0.1');
D('number',  1 ,  1.1 ,  0.1 );
D('object',  $object);

//	...
$count = & $_SESSION['OP']['TESTCASE']['d']['count'];
$count = 1 + (int)$count;

//	...
D( $_SESSION );
