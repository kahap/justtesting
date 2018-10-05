<?php
include "../../cls/email/class.phpmailer.php"; //匯入PHPMailer類別

class Email extends PHPMailer{

	/**	建構函式
	  *	$useOtherSMTP	是否要使用其他smtp	ex:google
	  *	$SMTPAuth	是否要驗證身分	ex:google要驗證身分
	  *	$SMTPSecure	加密方式		ex:ssl
	  *	$SMTPhost	smtp伺服器	ex:smtp.gmail.com
	  *	$SMTPport	smtp post	ex:465
	  *	$SMTPusername	信箱帳號
	  *	$SMTPpassword	信箱密碼
	**/
// 	public function Email($useOtherSMTP=true,$SMTPusername='happyfan',$SMTPpassword='wmf6A7W7h3',$SMTPAuth=true,$SMTPSecure='ssl',$SMTPhost='cp26.g-dns.com',$SMTPport='465'){
	public function Email($useOtherSMTP=true,$SMTPusername='service@happyfan7.com',$SMTPpassword='21-finance',$SMTPAuth=true,$SMTPSecure='',$SMTPhost='mail.happyfan7.com',$SMTPport='25'){
		if($useOtherSMTP){
			// parent::IsSMTP(); //設定使用SMTP方式寄信
			$this->SMTPAuth = $SMTPAuth; //設定SMTP需要驗證
			$this->SMTPSecure = $SMTPSecure; // Gmail的SMTP主機需要使用SSL連線
			$this->Host = $SMTPhost; //Gamil的SMTP主機
			$this->Port = $SMTPport;  //Gamil的SMTP主機的埠號(Gmail為465)
			$this->CharSet = "utf-8"; //郵件編碼
			
			$this->Username = $SMTPusername; //Gamil帳號
			$this->Password = $SMTPpassword; //Gmail密碼
		}
	}
	
	/**	使用其他smtp寄信
	  *	$receive_email	收件人信箱
	  *	$receive_name	收件人姓名
	  *	$sender_email	寄件人信箱
	  *	$sender_name	寄件人姓名
	  *	$subject	標題主旨
	  *	$content	信件內容
	**/
	public function SendEmail_smtp($receive_email,$receive_name,$sender_email,$sender_name,$subject,$content){
		/*if($this->CheckMail($receive_email) && $this->CheckMail($sender_email)){
			$message = '';
			$this->From = $sender_email;
			$this->FromName = $sender_name;
			
			$this->Subject = $subject;
			$this->Body = $content;
			parent::IsHTML(true); //郵件內容為html ( true || false)
			$this->AddAddress($receive_email,$receive_name);
			
			if(!parent::Send()){
				$message = $this->ErrorInfo;
			}
		}else{
			$message = 'Email not valid';
		}*/
		return $message;
	}
	
	//密件多人時
	public function SendBCCEmail_smtp($namesAndEmails,$sender_email,$sender_name,$subject,$content){
		$message = '';
		/*if($this->CheckAllMail($namesAndEmails)=="OK"){
			
			$this->From = $sender_email;
			$this->FromName = $sender_name;
				
			$this->Subject = $subject;
			$this->Body = $content;
			parent::IsHTML(true); //郵件內容為html ( true || false)
			foreach($namesAndEmails as $email=>$name){
				$this->AddBCC($email,$name);
			}
				
			if(!parent::Send()){
				$message = $this->ErrorInfo;
			}
		}else{
			$message = $this->CheckAllMail($namesAndEmails);
		}*/
		return $message;
	}
	
	/**	使用伺服器smtp寄信
	  *	$receive_email	收件人信箱
	  *	$receive_name	收件人姓名
	  *	$sender_email	寄件人信箱
	  *	$sender_name	寄件人姓名
	  *	$subject	標題主旨
	  *	$content	信件內容
	**/
	public function SendEmail($receive_email,$receive_name,$sender_email,$sender_name,$subject,$content){
		if($this->CheckMail($receive_email) && $this->CheckMail($sender_email)){
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
			$headers .= 'From: '.$sender_name.' <'.$sender_email.'>' . "\r\n";
			//$headers .= 'Cc: '.$other.'' . "\r\n";
			mail($receive_email, $this->encodeMIMEString("UTF-8", $subject), $content, $headers);
			return true;
		}else{
			return false;
		}
	}
	
	//解決中文亂碼問題
	public function encodeMIMEString ($enc, $string){
	   return "=?$enc?B?".base64_encode($string)."?=";
	}
	
	//確認email格式是否正確
	public function CheckMail($mail) {
		if($mail !== "") {
			if(preg_match('/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/', $mail)) {
		  		return true;
			} else {
		  		return false;
			}
		}else{
			return false;
		}
	}
	
	//驗證全部email
	public function CheckAllMail($allMail) {
		$errMsg = "";
		if(!empty($allMail)) {
			foreach($allMail as $mail=>$name){
				if(preg_match('/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/', $mail)) {
					return "OK";
				} else {
					$errMsg .= $name."的Email格式錯誤。\n";
					return $errMsg;
				}
			}
		}else{
			return "沒有Email接收人。\n";
		}
	}
}

?>