<?php
class contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db= "online medicine donation";
    public $mysqli;
    public function __construct()
    {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);

    }
    public function contact($data){
        $name=$data['name'];
        $email=$data['email'];
        $phone=$data['phone'];
        $city=$data['city'];
        $state=$data['state'];
        $type=$data['type'];
        $message=$data['message'];
        $q="insert into contact set name='$name',email='$email', phone='$phone',city='$city',state='$state',type='$type',message='$message'";
        $data=$this->mysqli->query($q);
        if($data==true){
            $body="One message received from DonMed contact . details are below..<br>name='$name',email='$email', phone='$phone',city='$city',state='$state',type='$type',message='$message'";
            return $this->sent_mail("onlinedonmed@gmail.com", "Message received from DonMed", $body);
            }
        }
            public function sent_mail($to,$subject,$body){
                $mailFromName="DonMed";
                $mailFrom="onlinedonmed@gmail.com";
                /////////////////////////////////////////////////////////////
//Mail Header
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
//$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin
if(mail($to, $subject, $body, $mailHeader)){
 return true;
 }else{
return false;
 }
    }
        }

 





?>