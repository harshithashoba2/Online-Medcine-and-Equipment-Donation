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
$mail->Subject='Regarding Denial of Medicine/Equipment';
$mail->Body='<b>Hello User </b><br>  Thank You so much using ONLINE MEDICINE AND EQUIPMENT DONATION. We are sorry to inform you that your medicine/equipment is not Approved. <br><b>Reasons of Denial:</b><br> 1.Medicine Expired <br> 2.User Medicine mismatch with Original Medicine.<br> Please check everything about medicine and donate. Regards, ONLINE MEDICINE AND EQUIPMENT DONATION.
<br><br>Regards,<br> ONLINE MEDICINE AND EQUIPMENT DONATION';
if(!$mail->send()){
    echo "<script>alert('oops!Email not sent!');window.location='medicinedb.php'</script>";
}
else{
    echo "<script>alert('Email Successfully sent!');window.location='medicinedb.php'</script>";
}
?>