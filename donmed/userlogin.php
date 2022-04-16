<?php 
session_start();

	include("connections.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
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

		if(!empty($name) || !empty($gender) ||!empty($email) || !empty($age) || !empty($contact)  ||!empty($password) || !empty($cpassword)  || !empty($address)  || !empty($city)  || !empty($donar))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into registration (name,gender,email,age,contact,password,cpassword,address,city,donar) values ( '$name','$gender','$email','$age','$contact','$password','$cpassword','$address','$city','$donar')";

			mysqli_query($con, $query);

			header("Location: usersign.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
      
			header("Location: userlogin.php");
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
                 <title>Registration</title>
                 <link rel="stylesheet" href="style.css">
                 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
                 <link href="mainstyle.css" rel="stylesheet">
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-icons.css" rel="stylesheet">
  <link href="boxicons.min.css" rel="stylesheet">
  <link href="glightbox.min.css" rel="stylesheet">
  <link href="swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
                 <style>
                     
                     body{
                        background-image:url("medical_back.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                     }
                     .emp-add{
                         padding: 5%;
                         margin-top: 3%;
                         margin-bottom: 1%;
                         border-radius: 0.7rem;
                         background: #fff;
                         margin-left:10%;
                         margin-right: auto;
                         
                        
                        
                     }
                     table{
                         width: 40%;
                         height: 60%;
                         border-spacing: 15px;
                         border-collapse: separate;
                     }
                     table td{
                         font-size: large;
                         width:25%;
                         padding: 3px;
                         
                     }
                     .text-danger
                     {
                         color: red;
                     }
                     a{
                         text-decoration: none;
                     }
                     .registerbtn
                     {
                       border-radius: 0.4em;
                     }
                     button:hover{
                       background-color: skyblue;
                     }
                     
                 </style>
                 <script>
                   function validate() {
                     password=document.myForm.password.value;
                     cpassword=document.myForm.cpassword.value;
                   if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.gender.value == "" ) {
            alert( "Please provide your Gender!" );
            document.myForm.gender.focus() ;
            return false;
         }
         if(password!=cpassword)
         {
           alert("Password is not matching!");
           document.myForm.password.focus() ;
           document.myForm.cpassword.focus() ;
           return false;
         }
         
   
        
      }


                 </script>
                 
    </head>
    
    <body>
        <header id="header">
            <div class="container d-flex align-items-center">
        
              <div class="logo me-auto">
                <h1><a href="index.php">Online Medicine and Equipment Donation</a></h1>
              </div>
        
              <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                  <li><a class="nav-link scrollto active" href="index.php">HOME</a></li>
                  <li><a class="nav-link scrollto" href="about.php">ABOUT</a></li>
                  <li class="dropdown"><a href="#"><span>USER</span></a>
                    <ul>
                      <li><a href="userlogin.php">Donate</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link scrollto" href="contact.php">CONTACT</a></li>
                  <li><a class="nav-link scrollto" href="admin.php">ADMIN</a></li>
                  <li><a class="nav-link scrollto" href="ngo.php">NGO</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav>
            </div>
          </header><!-- End Header -->
        
        <table height=100% width=100%>
            
            <div class="center">
                
                    <td>
                        <div class="container emp-add">
                        <form action="db.php" method="POST" name = "myForm" onsubmit = "return(validate());">
                            <table>
                               <h1 style="text-align: center;color: blue;">MEMBER REGISTRATION</h1>
                              
                                <tr><td style="width: 25%;"><b>Member Name</b></td><td><input type="text" name="name" class="name" placeholder="Enter Full Name" ></td></tr>
                                <tr><td><b>Gender</b></td><td><input type="radio" name="gender" class="gender" value="male"> Male
                                                              <input type="radio" name="gender" class="gender" value="female"> Female
                                                              <input type="radio" name="gender" class="gender"value="others"> Others
                                                             </td></tr>
                                <tr><td><b>Email</b></td><td><input type="email" name="email" class="email" placeholder="Enter Email" ><small class='text-danger'>*This email used for verification.</small></td></tr>
                                <tr><td><b>Age</b></td><td><input type="tel" name="age" class="age" placeholder="Enter Age" required ></td></tr>
                                <tr><td><b>Contact.No</b></td><td><input type="tel" name="contact" class="contact" placeholder="Enter Contact Number" maxlength=10 required ></td></tr>
                                <tr><td><b>Password</b></td><td><input type="password" name="password"  class="password" id="pass" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                  title="Must contain at least one number and one uppercase and lowercase letter, and at
                                  least 8 or more characters"required></td></tr>
                                <tr><td><b>Confirm Password</b></td><td><input type="password" name="cpassword" class="cpassword" placeholder="Confirm Password" required></td></tr>
                                <tr><td><b>Address</b></td><td><input type="textarea" name="address" rows="5" cols="40" class="address" placeholder="Enter Address" required></td></tr>
                                <tr><td><b>City</b></td><td><input type="text" name="city" class="city" placeholder="Enter City" required></td></tr>
                                <tr><td><b>Donar Type</b></td><td><select name="donar" id="type">
                                      <option value="Select" required>Select</option>  
                                      <option value="Individual" >Individual</option>
                                      <option value="Care Centres" >Care Centres</option>
                                      <option value="Pharmacies" >Pharmacies</option>
                                      <option value="Manufacturer" >Manufacturer</option>
                                      <option value="Whole Sellers">Whole Sellers</option>
                                      <option value="Patient">Patient</option>
                                      </select>
                                </td></tr>
                                <br>
                                <tr><td><b></b></td><td><button type="submit" class="registerbtn">Register</button>
                                </div>
                              
 
                                  <p><h5 style="text-align: left;">Already have an account? <a href="usersign.php">LOGIN</a>.</h5></p>
                                
                                </div>
                                
                            </table>
                        </form>
                        
                        </td></tr>  
                    
            </div>
          
        </table>
       
                                                            
                                                           
      
        
    </body>
</html>
