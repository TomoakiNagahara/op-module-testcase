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
$urls[] = 'app:/asset/test/secret.txt';
$urls[] = 'testcase:/.dot';
$urls[] = 'testcase:/secret.txt';
$urls[] = 'testcase:/secret.csv';
$urls[] = 'testcase:/secret.log';

//	...
$git = rtrim( $app->URL('app:/.git/HEAD'), '/');

?>
<hr>
<ul>
	<li><a href="<?= $git ?>"><?= $git ?></a></li>
	<?php foreach( $urls as $url ): ?>
	<li><a href="<?= $app->URL($url) ?>"><?= $url ?></a></li>
	<?php endforeach; ?>
</ul>
