<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function send_mail($mail,$subject,$msg)
{
	
			$CI=& get_instance();
			$config['protocol']    = 'smtp';
        	$config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
        	$config['smtp_timeout'] = '60';
        	$config['smtp_user']    = 'webhousing07@gmail.com';
        	$config['smtp_pass']    = 'webhousing123';
        	$config['charset']    = 'utf-8';
        	$config['newline']    = "\r\n";
        	$config['mailtype'] = 'html'; // or html
        	$config['validation'] = TRUE; // bool whether to validate email or not      
	
	        $CI->email->initialize($config);

	        $CI->email->from('webhousing07@gmail.com','OTP Confirmation');
	        $CI->email->to($mail); 

			$CI->email->subject($subject);
			$CI->email->message($msg);  
	
			if($CI->email->send()){return true;}else{return false;}

}

?>