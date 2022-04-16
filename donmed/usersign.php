

<!DOCTYPE html>
<html>
    <head>
                 <title>Login</title>
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
  <script>

    function checkForm(form)
    {
     
      if(!form.terms.checked) {
        alert("Please accept the Terms and Conditions");
        form.terms.focus();
        return false;
      }
      
      
    }
  
  </script>
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
                         background: white;
                         margin-left:10%;
                         margin-right: auto;
                         
                        
                        
                     }
                     table{
                         width: 40%;
                         height: 40%;
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
                     .center{
                       display: flex;
                       justify-content: center;
                       align-items: center;
                       
                     }
                     button:hover{
                       background-color: skyblue;
                     }
                     .loginbtn
                     {
                       border-radius: 0.4em;
                     }
                     
                     
                 </style>
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
                        <form  action="validation.php" method="POST" onsubmit="return checkForm(this);">
                            <table>
                               <h1 style="text-align: center;color: blue;">MEMBER LOGIN</h1>
                               
                                <tr><td style="width: 25%;"><b>Member Name</b></td><td><input type="text" name="name" class="name" placeholder="Enter Full Name" required></td></tr>
                                
                                <tr><td><b>Email</b></td><td><input type="email" name="email" class="email" placeholder="Enter Email" required><small class='text-danger'>*This email used for verification.</small></td></tr>
                             
                                <tr><td><b>Password</b></td><td><input type="password" name="password" class="password" placeholder="Password" required></td></tr>
                                
                                <tr><td><b>Donar Type</b></td><td><select name="donar" id="type">
                                      <option value="Select">Select</option>  
                                      <option value="Individual">Individual</option>
                                      <option value="Care Centres">Care Centres</option>
                                      <option value="Pharmacies">Pharmacies</option>
                                      <option value="Manufacturer">Manufacturer</option>
                                      <option value="Whole Sellers">Whole Sellers</option>
                                      <option value="Patient">Patient</option>
                                      </select>
                                </td></tr>
                                
                            </table>
                            <p style="margin-left: 2px;"><input type="checkbox" name="terms"> I accept the <a href="termsandcondition.php">Terms and Conditions</a></p><br>
                           
                             
                            <div class="center">
                              <button type="submit" class="loginbtn">Login</button>
                            </div>
                            
                              <p><h5 style="text-align: center;">Dont't have an account? <a href="userlogin.php">REGISTER</a>.</h5></p>
                            
                           
                        </form>
                       
                    </td></tr>
            </div>
          
        </table>
        
      
        
    </body>
</html>