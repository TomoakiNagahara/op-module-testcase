<?php
/** op-module-testcase:/core/debug.php
 *
 * @created   2019-03-22
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

/* @var $app \OP\UNIT\App */
$app->Unit('Router')->Debug('__construct');
$app->Unit('Router')->Debug();
