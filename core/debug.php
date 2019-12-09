<?php
/**
 * module-testcase:/core/debug.php
 *
 * @creation  2019-03-22
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-02-22
 */
namespace OP;

/* @var $app \OP\UNIT\App */
$app->Unit('Router')->Debug('__construct');
$app->Unit('Router')->Debug();
