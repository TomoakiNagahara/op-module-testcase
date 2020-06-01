<?php
/** op-module-testcase:/app/cdn.php
 *
 * @created   2019-04-17
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app \OP\UNIT\App */
?>

URL:
<img src="<?= $app->URL('app:/img/icon.png') ?>"/>

CDN:
<img src="<?= $app->CDN('app:/img/icon.png') ?>"/>
