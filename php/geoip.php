<?php
/** op-module-testcase:/php/geoip.php
 *
 * @created   2019-12-27
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	...
$debug = [];

//	...
$debug['host_name'] = Env::isLocalhost() ? 'onepiece-framework.com': $_SERVER['HTTP_HOST'];

//	...
$debug['country_code'] = geoip_country_code_by_name($debug['host_name']);

//	...
D( $debug );
