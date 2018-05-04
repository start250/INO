<?php
//require_once "Mail.php";
function sendMail($from,$to,$subject,$token){


    $subject = 	$subject;
					$body ="Your password reset link is: https://be.aimuhire.com/reset/?t=".$token;
					$headers = array(
							'From' => $from,
							'To' => $to,
							'Subject' => $subject
					);
					
					$smtp = Mail::factory('smtp', array(
									'host' => 'ssl://smtp.gmail.com',
									'port' => '465',
									'auth' => true,
									'username' => 'iganeza@gmail.com',
									'password' => 'PASSWORDSS'
							));
					$mail = $smtp->send($to, $headers, $body);
					
					if (PEAR::isError($mail)) {
							echo('<p>' . $mail->getMessage() . '</p>');
                            
                            return false;
					} else {
						
						 return true;
					}
               

        return false;
}