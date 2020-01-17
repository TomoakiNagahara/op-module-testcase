<?php
/**
 * unit-test:/app/secret.php
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
$urls[] = 'asset:/testcase/app/secret/secret.txt';
$urls[] = 'asset:/testcase/app/secret/secret.csv';
$urls[] = 'asset:/testcase/app/secret/secret.log';
$urls[] = 'testcase:/app/secret/.secret';
$urls[] = 'testcase:/app/secret/_secret';
$urls[] = 'app:/.git/HEAD';
?>
<hr>
<ul>
	<?php foreach( $urls as $url ): ?>
	<li><a href="<?= $app->URL($url) ?>"><?= $url ?></a></li>
	<?php endforeach; ?>
</ul>
