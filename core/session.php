<?php
/**
 * module-testcase:/core/session.php
 *
 * @creation  2019-04-09
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-04-09
 */
namespace OP;

/* @var $app UNIT\App */

//	...
$count = & $app->Session('count');

//	...
$count++;

?>
<article>
	Count:  <?= $count ?>
</article>
