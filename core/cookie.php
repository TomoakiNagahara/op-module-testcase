<?php
/**
 * module-testcase:/core/cookie.php
 *
 * @creation  2019-03-16
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @creation  2019-02-20
 */
namespace OP;

//	...
$count = Cookie::Get('count', 0);

//	...
$expire = $_GET['expire'] ?? 10;
$result = Cookie::Set('count', $count+1, $expire);
?>
<section>
[
  <a href="?expire=10"> Expire after 10 sec</a> |
  <a href="?expire=2020-01-01"> Expire is just 2020-01-01</a>
]
</section>
<article>
	Count:  <?= $count ?>
	Expire: <?= $result ?>
</article>
