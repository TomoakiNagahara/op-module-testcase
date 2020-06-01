<?php
/** op-module-testcase:/core/error.php
 *
 * @creation  2019-03-03
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

/* @var $var null */
if( $_GET['error'] ?? null ){
	echo $var;
}else{
	Html('?error=1', 'a');
};
