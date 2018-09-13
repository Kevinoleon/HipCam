<?php
$id =$_GET["id"];

if($id<1 or $id>8 or $id =="") {
  header("location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hipcam</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/faviHipcam.png" sizes="64x64" />

  
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="css/custom.css">

   <style type="text/css">
     #botContacto {
  background-color:#687e95;
  color:white;
  border-radius:25px;
  padding-left:35px;
  padding-right:35px;
}

.navbar-nav a {
  font-size:18px;
}

.fa {
  font-size: 25px;
  text-align: center;
  text-decoration: none;
  /*  */
  color:#687e95;
  margin-left:15px;
  margin-top:12px;
}

.fa:hover {
    opacity: 0.7;
    text-decoration: none;
    color:#5e5e5e;
}


.container1 {
  position: relative;
  /* width: 100%; */
  cursor:pointer;
  text-align: center;
}

.container1 .image {
  display: block;
  /* width: 100%; */
  height: auto;
  text-align: center;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  /* background-color: #008CBA; */
  text-align: center;
}

.overlay .image {
  width:100%;
  height:auto;
  text-align: center;

}

.container1:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


.colorPrincipal {
  color: #687e95;
}

.contenedorContacto {
  width:1195px;
  height:auto;
}


.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border:0px;
}


.titulos {
  letter-spacing: 10px;
  color: #687e95;
  margin-top:50px;
  margin-bottom:50px;
}


.switch {
  position: relative;
  /* display: inline-block; */
  width: 60px;
  height: 34px;
  
}

.switch input {display:none;}

.slider1 {
  position: absolute;
  cursor: pointer;
  top: 0px;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider1:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider1 {
  background-color: #007794;
}

input:focus + .slider1 {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider1:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider1.round {
  border-radius: 34px;
}

.slider1.round:before {
  border-radius: 50%;
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}

.text-center {
    text-align: center!important;
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}


.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);

  }


  .precioGrande {
    font-size:45px;
  }

  .precioChico {
    font-size:20px;
  }

  #botSilver {
    background-color: #007794;
    color:#fff;
  }

  .colorSecundario {
    color:#00b7ff;
  }

  #precios  {
    list-style: none;
  }

  #precios li {
    font-size:19px;
    margin-bottom: 20px;
  }

  #precios li span {
    padding-left:10px;
  }
#toTop{
  position: fixed;
  bottom: 30px;
  right: 90px;
  cursor: pointer;
  display: none;
  background-color:#687e95;
  border:1px solid #687e95;
}

#iconos .fa {
margin:0;
color:white;
}

#submit .fa {
  margin:0;
color:white;
}



 </style>

 <link rel="stylesheet" href="csscontact/contact-form.css" type="text/css"> 

 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


	
</head>
<body>



  <nav class="navbar navbar-default">

  <div id="contenedorInterno">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="index.php">
    <img src="images/logo_hipcam_true.png" alt="">
  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="indoor.html">Indoor</a></li>
          <li><a href="outdoor.html">Outdoor</a></li>
          <li><a href="doorbell.html">Doorbell</a></li>
          <li><a href="hipcamprotect.html">Hipcam protect</a></li>
          <li><a href="videos.php">Videos</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
  <!--   <li><a href="b2bpaltform.html">B2B Paltform</a></li> -->
      <li><a href="contact.php?id=8" id="botContacto">Contact us</a></li>
    </ul>

    </div>

  </div>

  </div>
</nav>



<div id="contenedorInterno">








<!-- <div style="width:1590px; margin:0 auto;"> -->
<div class="container-fluid" style="margin:0 auto;">





  

  <div class="row center-block">
     <div class="col-md-12 text-center" style="">

   <h1 style="margin-bottom:35px;"><?php
   if ($id ==1) {
   $estado = "HIPCAM AMERICA"; 
   ?>
<img src="images/contact_hipcam_america.png">
    <?php
   } elseif ($id ==2) { 
     $estado = "HIPCAM ALATAM"; 
    ?>

    <img src="images/contact_hipcam_latam.png">


<?php
   } elseif ($id==3) { 

    $estado = "HIPCAM EUROPE"; 
    ?>

    <img src="images/contact_hipcam_europe.png">

 

<?php
} elseif($id==4) { 

  $estado = "HIPCAM EUROPE EAST"; 

  ?>

  <img src="images/contact_hipcam_europe_east.png">

  <?php
} elseif($id==5) { 

  $estado = "HIPCAM ISRAEL"; 

  ?>
<img src="images/contact_hipcam_israel.png">
  <?php
} elseif($id==6) { 

  $estado = "HIPCAM ASIA"; 
  ?>


   <img src="images/contact_hipcam_asia.png">

  

  <?php
} elseif($id==7) {

  $estado = "HIPCAM CHINA"; 

  ?>

  <img src="images/contact_hipcam_china.png">

  <?php
} elseif($id==8) {
  $estado = "HIPCAM";
 ?>

<img src="images/contact_hipcam.png">

  <?php
}
?>



</h1>
    </div>  
  </div>


  <div class="row">
     <div class="col-md-9">
   <form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
                        <div class="row">
                          <div id="msgContactSubmit" class="hidden"></div>
                          <div id="msgExito" class="text-center center-block"></div>
                          
                          <div class="form-group col-sm-6">
                            <div class="help-block with-errors"></div>
                            <input name="fname" id="fname" placeholder="Your name*" class="form-control" type="text" required data-error="The field is required."> 
                            <div class="input-group-icon" id="iconos"><i class="fa fa-user"></i></div>
                          </div><!-- end form-group -->



                          <div class="form-group col-sm-6">
                            <div class="help-block with-errors"></div>
                            <input name="email" id="email" placeholder="Your E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Please check, the e-mail address entered is invalid.">
                            <div class="input-group-icon" id="iconos"><i class="fa fa-envelope"></i></div>
                          </div><!-- end form-group -->



                          <div class="form-group col-sm-6">
                            <div class="help-block with-errors"></div>
                            <input name="phone" id="phone" placeholder="Your Phone number*" class="form-control" type="text" required data-error="The field is required.">
                            <div class="input-group-icon" id="iconos"><i class="fa fa-phone"></i></div> 
                          </div><!-- end form-group -->


                          <div class="form-group col-sm-6">
                            <div class="help-block with-errors"></div>
                            <input name="subject" id="subject" placeholder="Subject*" class="form-control" type="text" required data-error="The field is required.">
                            <div class="input-group-icon" id="iconos"><i class="fa fa-book"></i></div> 
                          </div><!-- end form-group -->


                          <div class="form-group col-sm-6">
                            <div class="help-block with-errors"></div>
                            

<select name="state" class="form-control" id="state_id" required data-error="The field is required."><option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antarctica">Antarctica</option><option value="French Southern Territories">French Southern Territories</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bhutan">Bhutan</option><option value="Bouvet Island">Bouvet Island</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Cameroon">Cameroon</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Christmas Island">Christmas Island</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Western Sahara">Western Sahara</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="France">France</option><option value="Faroe Islands">Faroe Islands</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Guernsey">Guernsey</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guinea">Guinea</option><option value="Guadeloupe">Guadeloupe</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Greenland">Greenland</option><option value="Guatemala">Guatemala</option><option value="French Guiana">French Guiana</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="Isle of Man">Isle of Man</option><option value="India">India</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Ireland">Ireland</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Macao">Macao</option><option value="Saint Martin (French part)">Saint Martin (French part)</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Montserrat">Montserrat</option><option value="Martinique">Martinique</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Mayotte">Mayotte</option><option value="Namibia">Namibia</option><option value="New Caledonia">New Caledonia</option><option value="Niger">Niger</option><option value="Norfolk Island">Norfolk Island</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Niue">Niue</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Pitcairn">Pitcairn</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine, State of">Palestine, State of</option><option value="French Polynesia">French Polynesia</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Serbia">Serbia</option><option value="South Sudan">South Sudan</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option value="Seychelles">Seychelles</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Tokelau">Tokelau</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Viet Nam">Viet Nam</option><option value="Vanuatu">Vanuatu</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                            
                            <div class="input-group-icon" id="iconos"><i class="fa fa-map-marker"></i></div> 
 </div><!-- end form-group -->



 <div class="form-group col-sm-6">
                            <div class="help-block with-errors"></div>
                            <input name="cameras" id="cameras" placeholder="Number of cameras*" class="form-control" type="number" min="1" required data-error="The field is required.">
                            <div class="input-group-icon" id="iconos"><i class="fa fa-video-camera"></i></div> 
                          </div><!-- end form-group -->




<div class="form-group col-sm-12">

  <div class="help-block with-errors"></div>

  <p><b>Interested In</b></p>

  <label class="checkbox-inline">
      <input type="checkbox" value="Indoor camera" name="interested[]">Indoor camera 
    </label>

    <label class="checkbox-inline">
      <input type="checkbox" value="Outdoor camera" name="interested[]">Outdoor camera
    </label>

    <label class="checkbox-inline">
      <input type="checkbox" value="Doorbell camera" name="interested[]">Doorbell camera
    </label>

    <label class="checkbox-inline">
      <input type="checkbox" value="Sensors" name="interested[]">Sensors
    </label>

    <label class="checkbox-inline">
      <input type="checkbox" value="Cloud Storage" name="interested[]">Cloud Storage
    </label>



</div>


<div class="form-group col-sm-12">

  <div class="help-block with-errors"></div>

  <p><b>Customer Type (required)</b></p>


  <label class="radio-inline">
      <input type="radio" name="customer" value="Residential" required>Residential
    </label>
    <label class="radio-inline">
      <input type="radio" name="customer" value=SME">SME
    </label>
    <label class="radio-inline">
      <input type="radio" name="customer" value="Enterprise">Enterprise
    </label>


</div>











                          <div class="form-group col-sm-12">
                            <div class="help-block with-errors"></div>
                            <textarea rows="6" name="message1" id="message1" placeholder="Your Message*" class="form-control" required data-error="The field is required."></textarea>
                            <div class="textarea input-group-icon" id="iconos"><i class="fa fa-pencil"></i></div>
                          </div><!-- end form-group -->
                          
                          <div class="form-group last col-sm-12">
                            <input type="hidden" name="estado" value="<?php echo $estado; ?>">
                            <button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Send</button>
                          </div><!-- end form-group --> 
                      
                         
                          <div class="clearfix"></div>
                        </div><!-- end row -->
                      </form><!-- end form -->
                    </div>


           <div class="col-md-3 text-center">

             <h2 style="color:#687e95;">ADDRESS</h2>




              <div class="thumbnail" style="margin-right: 15px !important;
    margin-left: 15px !important;
    padding-top: 10px !important;
    padding-bottom: 20px !important;
    background-color: #687e95 !important;
    border-radius: 20px !important;
}">


      <?php
       if($id==1) { ?>
      <h4 style="text-align: center;"><span style="color: #ffffff;">29 S Central Ave</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Valley Stream. NY 10153</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"> United States</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +1 (833) -516-4335<br>
       <i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +1 (646) 798-6464
      </span></h4>
<<<<<<< HEAD
=======
	/* kevin */
>>>>>>> 18f91e536a3c813761bdc0569565c1794ddba0bd




      
      <?php
    } elseif ($id==2) {  ?>

      <h4 style="text-align: center;"><span style="color: #ffffff;">Av. Libertador 5590 Of. 906</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">CP 1428 – Buenos Aires</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"> Argentina</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +5411 5219-3326</span></h4>
      
      <?php
    } elseif($id==3) { ?>
 

      <h4 style="text-align: center;"><span style="color: #ffffff;">Calle Cam Pobla num 4-6</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Polígono Industrial Can Roqueta</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Sabadell, Barcelona España</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +34 937-37-0175</span></h4>

      <?php
    } elseif($id==4) { ?>





      <h4 style="text-align: center;"><span style="color: #ffffff;">Prague</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Czech Republic</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +420 255-719-089<br>
      <i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +420-255-729-454<br>
      <i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +420-255-729-087</span></h4>

      
     


      <?php
    } elseif($id==5) { ?>
    


      <h4 style="text-align: center;"><span style="color: #ffffff;">Gush Etzion 11</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Givat Shmuel</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Israel</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +972 3-374-1040</span></h4>

      


    <?php
  } elseif($id==6) { ?>
  

      <h4 style="text-align: center;"><span style="color: #ffffff;">Rm 07, 1/F, Chevalier House</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Chatham Road South</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Tsim Sha Tsui, Hong Kong</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +852-5801-4281</span></h4>

  <?php
} elseif($id==7) { ?>




      <h4 style="text-align: center;"><span style="color: #ffffff;">Room 2603, 26/F</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Hong Kong Plaza, Huahai Zhonglu</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Shanghai – China</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +852-5801-4281</span></h4>

      <?php
    }  elseif($id==8) { ?>
      <h4 style="text-align: center;"><span style="color: #ffffff;">29 S Central Ave</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;">Valley Stream. NY 10153</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"> United States</span></h4>
      <h4 style="text-align: center;"><span style="color: #ffffff;"><i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +1 (833) -516-4335<br>
       <i class="fa fa-mobile" aria-hidden="true" style="color:white;"></i> +1 (646) 798-6464
      </span></h4>
      <?php
    }
    ?>

           </div>

            <figure class="wpb_wrapper vc_figure">
      <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="images/img_contact.png" width="100" height="182" alt="camara 2" title="camara 2"></div>
    </figure>



  </div>
     


</div>




<!-- SUBIR ACÁ TU PARTE DAVID -->

<!-- FIN PARTE DAVID -->




<!-- modulo map contact -->
<div id="contenedorInterno">


  

<div style="width:100%; height:185px; clear:both;"></div>

<!-- Footer -->
<div id="contenedorInterno">

<script>(function(v,p){
var s=document.createElement('script');
s.src='https://app.toky.co/resources/widgets/toky-widget.min.js?v='+v;
s.onload=function(){Toky.load(p);};
document.head.appendChild(s);
})('04416eff', {"$show_option":true,"$username":"Hipcam","$bubble":false,"$position":"left","$text":"Call us for free!"})
</script>

  
    <div class="col-md-6 col-xs-6" style="">
       <img src="images/logo_hipcam_true.png" alt="">
    </div>

    <div class="col-md-6 col-xs-6 text-right">
      <a href="https://twitter.com/HipCamSmartHome" target="_blank" class="fa fa-twitter"></a>
      <a href="https://www.facebook.com/HipcamSmartHome/" target="_blank" class="fa fa-facebook"></a>
      <a href="https://www.linkedin.com/company/hipcam/" target="_blank" class="fa fa-linkedin"></a>
      <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
    </div>


 </div>
 <!-- fin footer -->

 <div style="width:100%; height:140px; clear:both;"></div>

 
<!-- agregado -->

<script>
 $(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
      $(window).scroll(function () {
      if ($(this).scrollTop() != 0) {
        $('#toTop').fadeIn();
      } else {
        $('#toTop').fadeOut();
      }
    }); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

</script>


<script>
  window.intercomSettings = {
    app_id: "gg13kwwy"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/gg13kwwy';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

  <!-- jQuery Library -->
  <!-- <script src="jscontact/jquery-3.2.1.min.js"></script>   -->

	<!-- Popper js -->
  <script src="jscontact/popper.min.js"></script>
  <!-- Bootstrap Js -->
  <script src="jscontact/bootstrap.min.js"></script>
  <!-- Form Validator -->
  <script src="jscontact/validator.min.js"></script>
  <!-- Contact Form Js -->
  <script src="jscontact/contact-form.js"></script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 18f91e536a3c813761bdc0569565c1794ddba0bd
