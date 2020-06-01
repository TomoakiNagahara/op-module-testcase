<?php
/** op-module-testcase:/app/etag.php
 *
 * @created   2019-03-01
 * @updated   2019-05-08  Separate to Raw and App.
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app OP\UNIT\App */
if( isset($app) ){
	include('etag.app.php');
}else{
	include('etag.raw.php');
};
?>
<div>
	<div>
	[
	Cache :
	<a href="?<?= http_build_query(array_merge($_GET,['cache'=>1])) ?>">ON</a> |
	<a href="?<?= http_build_query(array_merge($_GET,['cache'=>0])) ?>">OFF</a>
	]
	</div>
	<div>
	[
	ETag :
	<a href="?<?= http_build_query(array_merge($_GET,['etag'=>1])) ?>">ON</a> |
	<a href="?<?= http_build_query(array_merge($_GET,['etag'=>0])) ?>">OFF</a>
	]
	</div>
	<div><a href="">reload</a></div>
</div>
<?php
/*
//	...
$age = 60 * 60 * 24 * 7;

//	...
$etag   = "W/123456";
$age    = 60 * 60 * 24 * 7;

//	...
if( $_GET['cache'] ?? null ){
	header("Cache-Control: max-age={$age}", true);
};

//	...
if( $_GET['etag'] ?? null ){
	header("ETag: {$etag}", true);
};

//	...
if( isset($_SERVER['HTTP_IF_NONE_MATCH']) ){
	if( $_SERVER['HTTP_IF_NONE_MATCH'] === $etag){
		header('HTTP/1.1 304 Not Modified');
		return;
	};
};
*/
