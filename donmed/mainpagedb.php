<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	
	
	 $address = $_POST['address'];
	 $sql = "INSERT INTO selection (address)
	 VALUES ('$address')";
	 if (mysqli_query($conn, $sql)) {
        echo "<script>alert('NGO Selected Successfully');window.location='useradd.php'</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>