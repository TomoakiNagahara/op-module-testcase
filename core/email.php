<?php
/** op-module-testcase:/core/email.php
 *
 * @created   2020-05-21
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
$to      = $_GET['to']   ?? null;
$to_name = 'TESTCASE';
$subject = 'This is test mail';
$message = 'This is test mail. Send from testcase > core > email.';

//	...
if( $to and $to_name ){
	//	...
	$mail = new EMail();
	$mail->From( $mail->GetLocalAddress() );
	$mail->To($to, $to_name);
	$mail->Subject($subject);
	$mail->Content($message);
	$io = $mail->Send();
	D($io, $to, $to_name, $subject, $message);
}else{
	Html('Empty $_GET["to"].');
}
