<!DOCTYPE html>
<html lang="en">
<title>Contact</title>
<head>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Medicine and Equipment Donation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">

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
    
  <!-- Template Main CSS File -->
  <link href="mainstyle.css" rel="stylesheet">
 
</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
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
  </header>
    
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-12">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-5 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>DONMED OFFICE ADDRESS:</h4>
                  <p>Online Medicine and Equipment Donation,<br>SALEM - 636007</p>
                </div>

                <div class="col-lg-4 info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email ID:</h4>
                  <p>onlinedonmed@gmail.com</p>
                </div>

                <div class="col-lg-3 info">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+91-8667780159</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form  method="post" role="form" class="php-email-form" id="contact-form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="state" id="state" placeholder="State" required>
              </div>
              <div class="form-group mt-3">
                <!--<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>-->
                <select class="form-select" style="font-size:15px" name="type">
                    <option value="none" selected disabled hidden>Select Subject</option>
                    <option value="Volunteer">Volunteer</option>    
                    <option value="Health Care Center">Health Care Center</option>    
                    <option value="Technical issue">Technical issue</option>    
                    <option value="Franchise">Franchise</option>    
                    <option value="Other">Other</option>    
                </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              
              <div class="text-center"><button type="submit" name="ok" style="font-size:16px">Send Message</button></div>

            </form>
            <?php
            if(isset($_POST['ok'])){
              include_once 'function.php';
              $obj= new contact();
              $res=$obj->contact($_POST);
              if($res==true){
                echo "<script>alert('Query successfully Submitted.Thank you')</script>";
            }else{
                echo "<script>alert('Something Went wrong!!')</script>";
            }
        }

            
            ?>
          </div>
        </div>
      </div>
    </section>
    <div class="footer-dark">
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-3 item">
                      <h3>DONMED ADDRESS</h3>
                      <p style='font-size:13px;'>ONLINE MEDICINE AND EQUIPMENT DONATION  <br>Salem district, <br>Tamil Nadu <br><br>
            <strong>Phone:+91-8667780159</strong> <br>
            <strong>Email:onlinedonmed@gmail.com</strong> <br></p>
                  </div>
                  <div class="col-sm-6 col-md-3 item">
                      <h3>Quick Link</h3>
                      <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="about.php">About</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="userlogin.php">User</a></li>
                     
                      <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="admin.php">Admin</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="ngo.php">NGO</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6 item text">
                      <h3>ONLINE MEDICINE AND EQUIPMENT DONATION</h3>
                      <p>At Online Medicine and Equipment Donation(DonMed), we are focused on providing high quality & primary care to the small villages, towns & tehsil level city.  
                        Our ONLINE DONATION project, make primary medical care accessible, affordable and available to the rural and urban under-served communities across the state.
                        To meet the increasing demand for improvements in the health care facilities & services we can utilize the power of internet technology & its wide network, by which people can help each other with just one click from their phone. The Medicine Donation system proposed here aims at providing an online platform for donating medicines or unused medicines to needy people.</p>
                  </div>
                  <!-- <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div> -->
              </div>
              <p class="copyright">Copyright © 2021 DonMed</p>
          </div>
      </footer>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    
      
    </body>
</html>