<?php
/**
 * module-testcase:/core/convert_url.php
 *
 * @creation  2019-04-04
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

//	Convert test, Check alias path.
$url = ConvertURL( __DIR__);
$io  = $url === __DIR__ ? false : true;
D( $io, $url );

//	Is slash at end of url.
$io = $url[strlen($url)-1] === '/' ? true : false;
D( $io, 'Slash at end of url.' );
