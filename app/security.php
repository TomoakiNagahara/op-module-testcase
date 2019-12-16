<?php
/**
 * unit-test:/app/security.php
 *
 * @created   2010-01-10
 * @version   1.0
 * @package   unit-test
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app OP\UNIT\App */
//	...
$urls = [];
$urls[] = 'asset:/testcase/app/security/secret.txt';
$urls[] = 'asset:/testcase/app/security/secret.csv';
$urls[] = 'asset:/testcase/app/security/secret.log';
$urls[] = 'testcase:/app/security/.secret';
$urls[] = 'testcase:/app/security/_secret';
$urls[] = 'app:/.git/HEAD';
?>
<hr>
<ul>
	<?php foreach( $urls as $url ): ?>
	<li><a href="<?= $app->URL($url) ?>"><?= $url ?></a></li>
	<?php endforeach; ?>
</ul>
