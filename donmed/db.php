<?php
 
	if (isset($_POST)) {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$cpassword =$_POST['cpassword'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$donar = $_POST['donar'];
		}
		if (!empty($name) || !empty($gender) ||!empty($email) || !empty($age) || !empty($contact)  ||!empty($password) || !empty($cpassword)  || !empty($address)  || !empty($city)  || !empty($donar))
		{
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "online medicine donation";
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		if (mysqli_connect_error()){
		  die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
		}
		else{
		  $SELECT = "SELECT email From registration Where email = ? Limit 1";
		  $INSERT = "INSERT Into registration (name,gender,email,age,contact,password,cpassword,address,city,donar) values(?, ?, ?, ?, ?, ?,?,?,?,?)";
		  $stmt = $conn->prepare($SELECT);
		  $stmt->bind_param("s", $email);
		  $stmt->execute();
		  $stmt->bind_result($email);
		  $stmt->store_result();
		  $rnum = $stmt->num_rows;
		
		  //checking username
		   if ($rnum==0) {
		   $stmt->close();
		   $stmt = $conn->prepare($INSERT);
		   $stmt->bind_param("sssiisssss", $name,$gender,$email,$age,$contact,$password,$cpassword,$address,$city,$donar);
		   $stmt->execute();
		   echo "<script>alert('Registration Successful');window.location='usersign.php'</script>";
		  } else {
		   echo "<script>alert('Someone already register using this email');window.location='userlogin.php'</script>";
		  }
		  $stmt->close();
		  $conn->close();
		 }
		} else {
		echo "<script>alert('All field are required');window.location='userlogin.php'</script>";
		die();
		}
?>