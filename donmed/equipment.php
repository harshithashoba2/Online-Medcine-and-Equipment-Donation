<?php
 $eqpname = $_POST['eqpname'];
 
 
 
 
 $mmdate = $_POST['mmdate'];
 
 
 $warranty = $_POST['warranty'];
 $detail = $_POST['detail'];
 $imgupload = $_POST['imgupload'];
 
	
	// Database connection
	$conn = new mysqli('localhost','root','','online medicine donation');
    

 
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

	} 
    else {
		$stmt = $conn->prepare("insert into equipment(eqpname,mmdate,warranty,detail,imgupload) values(?, ?, ?, ?,?)");
		$stmt->bind_param("sssss",$eqpname,$mmdate,$warranty,$detail,$imgupload);
        $execval = $stmt->execute();
		echo $execval;
        
		echo "<script>alert('Equipment added Successfully!');window.location='equipment.php'</script>";
		$stmt->close();
		$conn->close();
    }
?>