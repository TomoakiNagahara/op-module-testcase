<?php
/** op-module-testcase:/core/email.php
 *
 * @created   2020-04-23
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

/*
//	Mail header injection
$from    = "root@localhost";
$to      = "root@localhost\r\nBcc: info@localhost";
$subject = 'Mail header injection';
$content = 'This is mail header injection test mail.';

//	...
$mail = new \OP\EMail();
$mail->From($from);
$mail->To($to);
$mail->Subject($subject);
$mail->Content($content);
$mail->Send();
*/
