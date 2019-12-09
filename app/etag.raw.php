<?php
/**
 * module-testcase:/app/etag.raw.php
 *
 * @created   2019-05-08  Separate from etag.php
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$etag   = "W/123456";
$age    = 60 * 60 * 24 * 7;

//	...
$gmtime = time();
$date   = gmdate('D, j M Y H:i:s ', $gmtime       ) . 'GMT';
$expire = gmdate('D, j M Y H:i:s ', $gmtime + $age) . 'GMT';
header("Date:    " . $date  , true);
header("Expires: " . $expire, true);

//	Overwrite at empty.
header('Pragma: ', true);

//	...
$last_modified = filemtime( __FILE__ );
$last_modified = gmdate( "D, d M Y H:i:s T", $last_modified + $age);
header("Last-Modified: {$last_modified}", true);

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
