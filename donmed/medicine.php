<?php
 $medname = $_POST['medname'];
 
 
 $tablet = $_POST['tablet'];
 
 $mdate = $_POST['mdate'];
 
 
 $edate = $_POST['edate'];
 $detail = $_POST['detail'];
 $imgupload = $_POST['imgupload'];
 
	
	// Database connection
	$conn = new mysqli('localhost','root','','online medicine donation');
    

 
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} 
    else {
		$stmt = $conn->prepare("insert into medicine(medname,tablet,mdate,edate,detail,imgupload) values(?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssss",$medname,$tablet,$mdate,$edate,$detail,$imgupload);
        $execval = $stmt->execute();
		echo $execval;
        
		echo "<script>alert('Medicine added Successfully!');window.location='addmedicine.php'</script>";
		$stmt->close();
		$conn->close();
    }
?>