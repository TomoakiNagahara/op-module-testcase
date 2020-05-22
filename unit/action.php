<?php
/**
 * module-testcase:/unit/action.php
 *
 * @created   2019-12-09
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-20
 */
namespace OP;

//	...
Load('Template');

/* @var $args array */
$name = array_shift($args);

//	...
Unit::Singleton($name)->Testcase($args);
