<?php
 

    if (isset($_POST)) {
        $name = $_POST['name'];
 
 
       $email = $_POST['email'];
 
       $password = $_POST['password'];
 
 
     
        
        }
        if (!empty($name) || !empty($email)   ||!empty($password))
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
         
         

      
          $sql = "SELECT * FROM ngoregister WHERE email='$email' AND password='$password'";
      
          $result = mysqli_query($conn, $sql);
      
          if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
                  if ($row['email'] === $email && $row['password'] === $password) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
            	$_SESSION['donar'] = $row['donar'];
                    echo "<script>alert('Login Successful');window.location='ngomainpage.php'</script>";
                  exit();
                  }else{
                    echo "<script>alert('oops!Incorrect email/Password');window.location='ngologinpage.php'</script>";
                  exit();
            }
          }else{
            echo "<script>alert('oops!Incorrect email/Password');window.location='ngologinpage.php'</script>";
                exit();
          }
        }
        
      }else{
        header("Location: index.php");
        exit();
      }
    
?>



