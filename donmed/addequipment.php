<!DOCTYPE html>
<html>
    <head>
                 <title>Add Equipment</title>
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
    function Successmsg(){
     
     
     if( document.myForm.eqpname.value == "" ) {
alert( "Please provide Equipment name!" );
document.myForm.eqpname.focus() ;
return false;
}
if( document.myForm.mmdate.value == "" ) {
alert( "Please provide Manufactured date!" );
document.myForm.mmdate.focus() ;
return false;
}
if( document.myForm.warranty.value == "" ) {
alert( "Please provide warranty!" );
document.myForm.warranty.focus() ;
return false;
}

if( document.myForm.detail.value == "" ) {
alert( "Please provide Description!" );
document.myForm.detail.focus() ;
return false;
}
if( document.myForm.imgupload.value == "" ) {
alert( "Please upload Image!" );
document.myForm.imgupload.focus() ;
return false;
}

}
    </script>
                 <style>

                  
                     
                     body{
                        background-image:url("back_medi.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                     }
                     .emp-add{
                         padding: 5%;
                         margin-top: 3%;
                         margin-bottom: 1%;
                         border-radius: 0.7rem;
                         background: #fff;
                         margin-left:75%;
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
                     button:hover{
                       background-color: skyblue;
                     }
                     .addbtn
                     {
                       border-radius: 0.4em;
                     }
                     .resetbtn{
                       border-radius: 0.4em;
                     }
                     .align{
                       text-align: right;
                     }
                     .text_danger
                     {
                         color: red;
                     }
                 </style>
                  

    </head>
    
    <body>
        <header id="header">
            <div class="container d-flex align-items-center">
        
              <div class="logo me-auto">
                <h1><a href="index.html">Online Medicine and Equipment Donation</a></h1>
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
                        <form action="equipment.php" name="myForm" method="POST" onsubmit="return(Successmsg());">
                            <table>
                               <h1 style="text-align: center;color: blue;">ADD MEDICAL EQUIPMENT</h1>
                              
                                <tr><td style="width: 25%;"><b>Equipment Name</b></td><td><input type="text" name="eqpname" class="eqpname" placeholder="Enter Medical Equipment Name" ></td></tr>
                                
                                
                                <tr><td><b>Manufactured Date</b></td><td><input type="date" name="mmdate" class="mmdate"  ></td></tr>
                                <tr><td><b>Warranty</b></td><td><input type="text" name="warranty" class="warranty" ></td></tr>
                                
                                <tr><td><b>Description</b></td><td><textarea name="detail" rows="5" cols="30" class="detail" placeholder="Enter Medical Equipment Details" ></textarea></td></tr>
                                
                                <br>
                                <tr><td><b>Select image to upload:</b></td><td><input type="file" name="imgupload" class="imgupload"><small class='text_danger'>*This Picture will be used for verification</small></td></tr><br>
                               
                                
                                
                                
                              
                                
                                
                                </div>
                            </table>
                            <br>
                            <table>
                              
                              <tr><td><b></b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><button type="submit" class="addbtn" >ADD</button></td><td><b></b></td><td><button type="reset" class="resetbtn">RESET</button></td></tr>

                            </table>
                            <div class="align">
                              <a href="viewequip.php">VIEW</a>
                            </div>
                            
                        </form>
                       
                    </td></tr>
            </div>
          
        </table>
        
      
        
    </body>
</html>