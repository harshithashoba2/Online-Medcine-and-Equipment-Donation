<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='onlinedonmed@gmail.com';
$mail->Password='#DonMED@$';
$mail->setFrom('onlinedonmed@gmail.com','donmed');
$mail->addAddress('harshithashoba2@gmail.com');
$mail->addReplyTo('onlinedonmed@gmail.com');
$mail->isHTML(true);
$mail->Subject='Regarding Approval of Medicine/Equipment';
$mail->Body='<b>Hello User</b><br> Thank You so much for donating unused medicines at ONLINE MEDICINE AND EQUIPMENT DONATION. We are happy to inform you that your medicine is Approved. Kindly please wait until you get response from your selected NGO . Thank you once again for using ONLINE MEDICINE AND EQUIPMENT DONATION and helping poor!
<br><br>Regards,<br> ONLINE MEDICINE AND EQUIPMENT DONATION';
if(!$mail->send()){
    echo "<script>alert('oops!Email not sent!');window.location='medicinedb.php'</script>";
}
else{
    echo "<script>alert('Email Successfully sent!');window.location='medicinedb.php'</script>";
}
?>