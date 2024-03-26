<?php
/** op-module-testcase:/ci/Testcase.php
 *
 * @created    2024-03-25
 * @version    1.0
 * @package    op-module-testcase
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\MODULE;

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP()->Unit('CI')->Config();

//	...
$method = 'Count';
$result =  1;
$args   = [];
$ci->Set($method, $result, $args);

//	...
$method = 'Template';
$result = '';
$args   = ['ci.phtml'];
$ci->Set($method, $result, $args);

//	...
return $ci->Get();
