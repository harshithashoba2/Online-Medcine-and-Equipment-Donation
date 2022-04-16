<!DOCTYPE html>
<html>
    <head>
                 <title>Medicine/Equipment</title>
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
                        background-image:url("bgr.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                        
                     }
                     .emp-add{
                         padding: 5%;
                         margin-top: 25%;
                         margin-bottom: 25%;
                         border-radius: 0.7rem;
                         background: #fff;
                         margin-left:80%;
                         margin-right: 25%;
                         
                        
                        
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
                     .loginbtn{
                       border-radius: 0.4em;
                       
                     
                     }
                     .center{
                      display: flex;
                       justify-content: center;
                       align-items: center;
                     }
                     button:hover{
                       background-color: skyblue;
                     }
                    td a:hover{
                         text-decoration: none;
                         color:darkblue;
                     }
                     td a{
                        

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
                        <form action="adminmainpage.php">
                            <table>
                               <h1 style="text-align: center;color: blue;">MEDICINE/EQUIPMENT</h1>
                                
                                
                                                             
                                <tr><td><b></b></td><td><td><b></b></td><td><a href="addmedicine.php">ADD MEDICINE+</a></td><td><b></b></td><td><b></b></td><td><b></b></td><td><a href="addequipment.php">ADD EQUIPMENT+</a</td></tr>
                                
                                <br>
                               
                                  
 
                                
                                
                                </div>
                              
                                
                                </div>
                            </table>
                            <br>
                            
                        </form>
                       
                    </td></tr>
            </div>
          
        </table>
        
      
        
    </body>
</html>