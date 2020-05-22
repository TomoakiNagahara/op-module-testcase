<?php
/**
 * module-testcase:/core/define.php
 *
 * @created   2019-09-20
 * @version   1.0
 * @package   module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-09-20
 */
namespace OP;

//	...
$temp = [];
$temp['_OP_NAME_SPACE_'] = _OP_NAME_SPACE_;
$temp['_OP_APP_ID_']     = _OP_APP_ID_;
/*
$temp['_OP_SALT_']       = _OP_SALT_;
*/
$temp['_OP_DATE_']       = _OP_DATE_;
$temp['_OP_DATE_TIME_']  = _OP_DATE_TIME_;
$temp['_OP_DENY_IP_']    = _OP_DENY_IP_;

//	...
D($temp);
