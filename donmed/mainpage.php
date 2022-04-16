<!DOCTYPE html>
<html>
  <head>
    
   
    <title>DonMed</title>
                 
                 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
                

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" type="text/css" href="sample.css" />
  <script src="index.js"></script>
  </head>
  <style>
    body{
        background-image:url("map.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                        height:70%;
                        font-family: "Roboto", sans-serif;
    }
    * {
  margin: 0;
  box-sizing: border-box;
}



h2 {
  margin-left:44%;
  margin-top:5%;
  color:black;
  font-size:50px;
}

.container {
  margin-top: 0px;
  padding: 0px;
}

.select-box {
  position: relative;
  display: flex;
  width: 400px;
  flex-direction: column;
  margin-left:30%;
  margin-top:4%;
}

.select-box .options-container {
  background: #2f3640;
  color: #f5f6fa;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;
}

.selected {
  background: #2f3640;
  border-radius: 8px;
  margin-bottom: 8px;
  color: #f5f6fa;
  position: relative;

  order: 0;
}

.selected::after {
  content: "";
  background: url("img/arrow-down.svg");
  background-size: contain;
  background-repeat: no-repeat;

  position: absolute;
  height: 100%;
  width: 32px;
  right: 10px;
  top: 5px;

  transition: all 0.4s;
}

.select-box .options-container.active {
  max-height: 260px;
  opacity: 1;
  overflow-y: scroll;
  margin-top: 54px;
}

.select-box .options-container.active + .selected::after {
  transform: rotateX(180deg);
  top: -6px;
}

.select-box .options-container::-webkit-scrollbar {
  width: 8px;
  background: #0d141f;
  border-radius: 0 8px 8px 0;
}

.select-box .options-container::-webkit-scrollbar-thumb {
  background: #525861;
  border-radius: 0 8px 8px 0;
}

.select-box .option,
.selected {
  padding: 12px 24px;
  cursor: pointer;
}

.select-box .option:hover {
  background: #414b57;
}

.select-box label {
  cursor: pointer;
}

.select-box .option .radio {
  display: none;
}

/* Searchbox */

.search-box input {
  width: 100%;
  padding: 12px 16px;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  position: absolute;
  border-radius: 8px 8px 0 0;
  z-index: 100;
  border: 8px solid #2f3640;

  opacity: 0;
  pointer-events: none;
  transition: all 0.4s;
}

.search-box input:focus {
  outline: none;
}

.select-box .options-container.active ~ .search-box input {
  opacity: 1;
  pointer-events: auto;
}
.center {
  margin-left:50%;
  margin-top:10px;
  height: 20px;
  background-color:skyblue;
  border-radius:2px;
  color:black;
  
  
  
}
.center:hover {
  
  color:black;
  
  
  
}
  </style>
  
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
    <form action="mainpagedb.php" method="POST">
      <div class="container">
      <h2 style="text-color:black;">NGO</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="ngo0"
              name="address"
 value="The Shining Staar Charitable Foundation"/>
            <label for="ngo0">
Ngo Name:The Shining Staar Charitable Foundation
Registration Id:TN/2013/0059191
Type of NGO:Trust
State:Tamil Nadu
City:Dindigul



</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo1" name="address"  value="The Spastics Society Of Tamilnadu"  />
            <label for="ngo1">Ngo Name:The Spastics Society Of Tamilnadu
Registration Id:TN/2009/0021825
Type of NGO:Society
State:Tamil Nadu
City:Chennai
Address:Taramani Road, Taramani
</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo2" name="address"  value="The Trichy Don Bosco Society" />
            <label for="ngo2">Ngo Name:The Trichy Don Bosco Society
Registration Id:TN/2010/0033604
Type of NGO:Society
State:Tamil Nadu
City:Trichy
Address:Don Bosco Provincial House, 65.illuppur Road, Kallukuzhy Trichy 620020</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo3" name="address"  value="Thencoodu Federations Society" />
            <label for="ngo3">Ngo Name:Thencoodu Federations Society
Registration Id:TN/2009/0008002
Type of NGO:Society
State:Tamil Nadu
City:Dharmapuri
Address:The Secretary, Thencoodu Federation Society C/o Don Bosco College, Sogathur By Pass Road, Pappanahalli Village, Sogathur. 636809. Dharmapuri. Tamil Nadu. India</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo4" name="address"  value="Thendral Trust"/>
            <label for="ngo5">Ngo Name:Thendral Trust
Registration Id:TN/2009/0015604
Type of NGO:Trust
State:Tamil Nadu
City:Virudhunagar
Address:Thendral Educational & Charitable Trust 40-periyakinatru Street, Near Kamaraj Memorial House - Tank, Virudhunagar-626001</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo5" name="address"  value="Thendralmo Vement" />
            <label for="ngo5">Ngo Name:Thendralmo Vement
Registration Id:TN/2011/0046694
Type of NGO:Trust Trust
State:Tamil Nadu
City:Walajah
Address:No.7, Anna Salai, Bharathi Nagar, Ranipet 630 403</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo6" name="address"  value="Thewomentr Ust"/>
            <label for="ngo6">Ngo Name:Thewomentr Ust
Registration Id:TN/2009/0004236
Type of NGO:Trust
State:Tamil Nadu
City:Dharmapuri
Address:5/130 Z4, Teachers Colony, Virupatchipuram, Dharmapuri, Tamilnadu-636705</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo7" name="address"  value="Third World Frontier Cross" />
            <label for="ngo7">Ngo Name:Third World Frontier Cross
Registration Id:TN/2013/0068778
Type of NGO:Trust
State:Tamil Nadu
City:Chennai
Address:9176126489</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ngo8" name="address"  value="Thiru Trust" />
            <label for="ngo8">Ngo Name:Thiru Trust
Registration Id:TN/2010/0037211
Type of NGO:Trust
State:Tamil Nadu
City:Madurai
Address:No:808, Dr. Mohana Complex Madurai-trichy Mainroad Melur Taluk Madurai District Pin 625106</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ngo9" name="address"  value="Thirucherai Sudar Academy And Charitable Trust"/>
            <label for="ngo9">Ngo Name:Thirucherai Sudar Academy And Charitable Trust
Registration Id:TN/2013/0069395
Type of NGO:Trust
State:Tamil Nadu
City:Kumbakonam
Address:458, Mariamman Koil Street Thirucherai Po Kumbakonam Tk</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ngo10" name="address"  value="Thuimai Foundation Trust"/>
            <label for="ngo10">Ngo Name:Thuimai Foundation Trust
Registration Id:TN/2009/0007890
Type of NGO:Trust
State:Tamil Nadu
City:Thirumangalam
Address:J.kaja Hameedhullah 112, East Mosquel Street, Thirumangalam - 625 706, Madurai Dt.</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ngo11" name="address"  value="Thulasi Foundation"/>
            <label for="ngo11">Ngo Name:Thulasi Foundation
Registration Id:TN/2011/0046346
Type of NGO:Trust
State:Tamil Nadu
City:Madurai
Address:190/2c, Netaji Main Road, Nehru Nagar, Madurai</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ngo12" name="address"  value="Thuligal Charitable Trust"/>
            <label for="ngo12">Ngo Name:Thuligal Charitable Trust
Registration Id:TN/2009/0011286
Type of NGO:Trust
State:Tamil Nadu
City:Tindivanam
Address:No: 31/2 , Govindhasamy Street Kaveripakkam Tindivanam Villupuram District Tamilnadu</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ngo13" name="address"  value="Time Organization" />
            <label for="ngo13">Ngo Name:Time Organization
Registration Id:TN/2009/0020847
Type of NGO:Society
State:Tamil Nadu
City:Thanjavur
Address:Main Road,budalur,thanjavur Dt Pin 613601</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ngo14" name="address"  value="Tiruchirappalli Multipurose Social Service Society" />
            <label for="ngo14">Ngo Name:Tiruchirappalli Multipurose Social Service Society
Registration Id:TN/2009/0010045
Type of NGO:Society
State:Tamil Nadu
City:Tiruchirappalli
Address:Tiruchirappalli Multipurpose Social Service Society, Post Box: 12, 49k Bharathiar Salai, Tiruchirappalli - 620001.</label>
          </div>
        
        <div class="option">
            <input type="radio" class="radio" id="ngo15" name="address"  value="Tirupathur Female And Child Development Society"/>
            <label for="ngo15">Ngo Name:Tirupathur Female And Child Development Society
Registration Id:TN/2009/0014144
Type of NGO:Society
State:Tamil Nadu
City:Tirupathur
Address:Lakshmipuram-village, Velakkalnatham-post, Patchur-via, Tirupathur-taluk, Pincode: 635 854.
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo16" name="address"  value="Tirupattur Thenkoodu Sangam"/>
            <label for="ngo16">Ngo Name:Tirupattur Thenkoodu Sangam
Registration Id:TN/2009/0008021
Type of NGO:Society
State:Tamil Nadu
City:Tirupattur
Address:The Regional Project Officer, Tirupattur Thenkoodu Sangam, Sacred Heart College Tirupattur. 635601. Vellore District. Tamil Nadu. India.
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo17" name="address"  value="Tirupatur Community Development Society"/>
            <label for="ngo17">Ngo Name:Tirupatur Community Development Society
Registration Id:TN/2009/0016414
Type of NGO:Society
State:Tamil Nadu
City:Chennai
Address:Aampalli Main Road Kandili Village & Post Tiruppatur Tk Velore Dt 635 901
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo18" name="address"  value="Total Trust"/>
            <label for="ngo18">Ngo Name:Total Trust
Registration Id:TN/2009/0021322
Type of NGO:Trust
State:Tamil Nadu
City:Thiruvannamalai
Address:No 15c/185, Bharathi Dasan (street), Vel Nagar, Thiruvannamalai</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo19" name="address"  value="The Shining Staar Charitable Foundation"/>
            <label for="ngo19">Ngo Name:The Shining Staar Charitable Foundation
Registration Id:TN/2013/0059191
Type of NGO:Trust
State:Tamil Nadu
City:Dindigul
Address:The Shining Staar Charitable Foundation</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo20" name="address"  value="The Spastics Society Of Tamilnadu"/>
            <label for="ngo20">Ngo Name:The Spastics Society Of Tamilnadu
Registration Id:TN/2009/0021825
Type of NGO:Society
State:Tamil Nadu
City:Chennai
Address:Taramani Road, Taramani</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo21" name="address"  value="The Trichy Don Bosco Society"/>
            <label for="ngo21">Ngo Name:The Trichy Don Bosco Society
Registration Id:TN/2010/0033604
Type of NGO:Society
State:Tamil Nadu
City:Trichy
Address:Don Bosco Provincial House, 65.illuppur Road, Kallukuzhy Trichy 620020</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo22" name="address"  value="Thencoodu Federations Society"/>
            <label for="ngo22">Ngo Name:Thencoodu Federations Society
Registration Id:TN/2009/0008002
Type of NGO:Society
State:Tamil Nadu
City:Dharmapuri
Address:The Secretary, Thencoodu Federation Society C/o Don Bosco College, Sogathur By Pass Road, Pappanahalli Village, Sogathur. 636809. Dharmapuri. Tamil Nadu. India.
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo23" name="address"  value="Thendral Trust"/>
            <label for="ngo23">Ngo Name:Thendral Trust
Registration Id:TN/2009/0015604
Type of NGO:Trust
State:Tamil Nadu
City:Virudhunagar
Address:Thendral Educational & Charitable Trust 40-periyakinatru Street, Near Kamaraj Memorial House - Tank, Virudhunagar-626001
</label>
          
        </div>
        
        
        <div class="option">
            <input type="radio" class="radio" id="ngo24" name="address"  value="Third World Frontier Cross"/>
            <label for="ngo24">Ngo Name:Third World Frontier Cross
Registration Id:TN/2013/0068778
Type of NGO:Trust
State:Tamil Nadu
City:Chennai
Address:9176126489</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo25" name="address"  value="Thiru Trust"/>
            <label for="ngo25">Ngo Name:Thiru Trust
Registration Id:TN/2010/0037211
Type of NGO:Trust
State:Tamil Nadu
City:Madurai
Address:No:808, Dr. Mohana Complex Madurai-trichy Mainroad Melur Taluk Madurai District Pin 625106</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo26" name="address"  value="Thirucherai Sudar Academy And Charitable Trust"/>
            <label for="ngo26">Ngo Name:Thirucherai Sudar Academy And Charitable Trust
Registration Id:TN/2013/0069395
Type of NGO:Trust
State:Tamil Nadu
City:Kumbakonam
Address:458, Mariamman Koil Street Thirucherai Po Kumbakonam Tk
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo27" name="address"  value="Thiruvalluvar Thavachalai"/>
            <label for="ngo27">Ngo Name:Thiruvalluvar Thavachalai
Registration Id:TN/2010/0033009
Type of NGO:Trust
State:Tamil Nadu
City:Thiruchi
Address:Thiruvalluvar Thavachalai, Allur Post, Thiruchi, 620101.</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo28" name="address"  value="Thuimai Foundation Trust"/>
            <label for="ngo28">Ngo Name:Thuimai Foundation Trust
Registration Id:TN/2009/0007890
Type of NGO:Trust
State:Tamil Nadu
City:Thirumangalam
Address:J.kaja Hameedhullah 112, East Mosquel Street, Thirumangalam - 625 706, Madurai Dt.
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo29" name="address"  value="Thulasi Foundation"/>
            <label for="ngo29">Ngo Name:Thulasi Foundation
Registration Id:TN/2011/0046346
Type of NGO:Trust
State:Tamil Nadu
City:Madurai
Address:190/2c, Netaji Main Road, Nehru Nagar, Madurai</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo30" name="address"  value="Thuligal Charitable Trust"/>
            <label for="ngo30">Ngo Name:Thuligal Charitable Trust
Registration Id:TN/2009/0011286
Type of NGO:Trust
State:Tamil Nadu
City:Tindivanam
Address:No: 31/2 , Govindhasamy Street Kaveripakkam Tindivanam Villupuram District Tamilnadu
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo31" name="address"  value="Time Organization"/>
            <label for="ngo31">Ngo Name:Time Organization
Registration Id:TN/2009/0020847
Type of NGO:Society
State:Tamil Nadu
City:Thanjavur
Address:Main Road,budalur,thanjavur Dt Pin 613601</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo32" name="address"  value="Tiruchirappalli Multipurose Social Service Society"/>
            <label for="ngo32">Ngo Name:Tiruchirappalli Multipurose Social Service Society
Registration Id:TN/2009/0010045
Type of NGO:Society
State:Tamil Nadu
City:Tiruchirappalli
Address:Tiruchirappalli Multipurpose Social Service Society, Post Box: 12, 49k Bharathiar Salai, Tiruchirappalli - 620001.</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo33" name="address"  value="Tirupathur Female And Child Development Society"/>
            <label for="ngo33">Ngo Name:Tirupathur Female And Child Development Society
Registration Id:TN/2009/0014144
Type of NGO:Society
State:Tamil Nadu
City:Tirupathur
Address:Lakshmipuram-village, Velakkalnatham-post, Patchur-via, Tirupathur-taluk, Pincode: 635 854.</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo34" name="address"  value="Tirupattur Thenkoodu Sangam"/>
            <label for="ngo34">Ngo Name:Tirupattur Thenkoodu Sangam
Registration Id:TN/2009/0008021
Type of NGO:Society
State:Tamil Nadu
City:Tirupattur
Address:The Regional Project Officer, Tirupattur Thenkoodu Sangam, Sacred Heart College Tirupattur. 635601. Vellore District. Tamil Nadu. India.</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo35" name="address"  value="Tirupatur Community Development Society"/>
            <label for="ngo35">Ngo Name:Tirupatur Community Development Society
Registration Id:TN/2009/0016414
Type of NGO:Society
State:Tamil Nadu
City:Chennai
Address:Aampalli Main Road Kandili Village & Post Tiruppatur Tk Velore Dt 635 901
</label>
          
        </div>
        
        <div class="option">
            <input type="radio" class="radio" id="ngo36" name="address"  value="Training And Rehabilitation For The Underprivileged Society Through Mutual Enlightenment Trust Me"/>
            <label for="ngo36">Ngo Name:Training And Rehabilitation For The Underprivileged Society Through Mutual Enlightenment Trust Me
Registration Id:TN/2009/0020408
Type of NGO:Society
State:Tamil Nadu
City:Trichy
Address:No.7/2, Om Sakthi Complex, Mela Chinthamani, Tiruchirappalli � 620 002.
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo37" name="address"  value="Tribal And Rural Welfare Awareness Trust"/>
            <label for="ngo37">Ngo Name:Tribal And Rural Welfare Awareness Trust
Registration Id:TN/2012/0050094
Type of NGO:Trust
State:Tamil Nadu
City:Salem
Address:93/1,sivasakthi Nagar,p.mettur Road,mallur, Salem-636203,tamil Nadu,india.</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo38" name="address"  value="Tribals Development Society"/>
            <label for="ngo38">Ngo Name:Tribals Development Society
Registration Id:TN/2009/0020984
Type of NGO:Society
State:Tamil Nadu
City:Chengalpattu
Address:Mamallapuram Road Kothimangalam Thirukazhukundram Kanchipuram District Tamil Nadu South India Pin Code-603 109</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo39" name="address"  value="Tribals Social Educational And Economical Development Trust Vellore"/>
            <label for="ngo39">Ngo Name:Tribals Social Educational And Economical Development Trust Vellore
Registration Id:TN/2013/0067392
Type of NGO:Trust
State:Tamil Nadu
City:Vellore
Address:No.70, Ajath Road, Thorapadi, Vellore- 635002
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo40" name="address"  value="Tribes Welfare Association"/>
            <label for="ngo40">Ngo Name:Tribes Welfare Association
Registration Id:TN/2010/0037096
Type of NGO:Society
State:Tamil Nadu
City:Trichy
Address:Tribes Welfare Association Srvms Building Main Road Uppiliapuram Trichirapalli Dist Tamilnadu South India-621 011
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo41" name="address"  value="Triupattur Female And Child Development Society Tfcd"/>
            <label for="ngo41">Ngo Name:Triupattur Female And Child Development Society Tfcd
Registration Id:TN/2011/0043950
Type of NGO:Society
State:Tamil Nadu
City:
Address:Triupattur Female And Child Development Society Tfcd Lakshmipuram Village , Velakkalnatham Post, Patchur Via, Triupattur Taluk ,vellore District, Tamil Nadu. South India. Pin :635 854.
</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo42" name="address"  value="Trust For Animals Protection"/>
            <label for="ngo42">Ngo Name:Trust For Animals Protection
Registration Id:TN/2013/0061428
Type of NGO:Trust
State:Tamil Nadu
City:Dindigul
Address:Vanathu Chinnaper Kovil, Krishnan Nagar, Nallam Patty Post, Dindigul</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo43" name="address"  value="Trust For Promoting Sustainable Development"/>
            <label for="ngo43">Ngo Name:Trust For Promoting Sustainable Development
Registration Id:TN/2009/0019803
Type of NGO:Trust
State:Tamil Nadu
City:Dindigul
Address:Trust For Promoting Sustainable Development(tpsd) No 12/128, Kavirayapuram, Nilakottai Taluk,dindgul Dist - 624215</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo44" name="address"  value="Trust For Rural Economic And Education Development"/>
            <label for="ngo44">Ngo Name:Trust For Rural Economic And Education Development
Registration Id:TN/2009/0008132
Type of NGO:Trust
State:Tamil Nadu
City:Mannarkudi
Address:Trust For Rural Economic And Educational Development Treed North Street Paravakkottai-614015</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo45" name="address"  value="Trust For Rural Education And Development Action"/>
            <label for="ngo45">Ngo Name:Trust For Rural Education And Development Action
Registration Id:TN/2009/0017135
Type of NGO:Trust
State:Tamil Nadu
City:Thanjavur
Address:Treda Ngo, No-138, Rks Building, Main Road Madukkur, Pattukot, Thanjavur District-614903</label>
          
        </div>
        <div class="option">
            <input type="radio" class="radio" id="ngo46" name="address"  value="Trust For Rural Education Environment And Social Services"/>
            <label for="ngo47">Ngo Name:Trust For Rural Education Environment And Social Services
Registration Id:TN/2011/0046958
Type of NGO:Trust
State:Tamil Nadu
City:Thanjavur
Address:4/545, 10th East Cross Street, Gnanam Nagar</label>
          
        </div>
        

        
</div>
        <div class="selected">
          Search NGO...
        </div>

        <div class="search-box">
          <input type="text" placeholder="Start Typing..." />
        </div>
      </div>
    </div>

    <script src="script.js"></script>
                   
   <input type="submit" value="Submit" name="submit"class="center">                      
                            
</form>

      
  </body>
</html>