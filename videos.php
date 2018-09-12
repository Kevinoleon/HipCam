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
  background-color: #687e95;
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

/*
.container {
  max-width: 960px;
}

*/

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
    background-color: #687e95;
    color:#fff;
  }

  #botGold {
    background-color: #EDC04B;
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
}


 /* Estilos David*/

.imgFondoAppCam {
    background-image: url("images/fondoModule04.png");
    background-color: #cccccc;
    background-position: center center;
    background-repeat:  no-repeat;
    background-attachment: fixed;
    background-size:  cover;
}

.imgFondoHipCam {
    background-image: url("images/fondoFotoCeleste.png");
    background-position: center center;
    background-repeat:  no-repeat;
    background-size:  cover;
}

.marMod2 {
    padding: 80px 0;
}

.marTitle {
    padding: 40px 0;
}

/* No Gutters */
.row.no-gutters {
   margin-right: 0;
   margin-left: 0;
}

.row.no-gutters > [class^="col-"],
.row.no-gutters > [class*=" col-"] {
   padding-right: 0;
   padding-left: 0;
}

/* Underline From Left */
.imgCamPro img{ 
  border-bottom: 5px solid #ffffff;
} 

.imgCamPro img:hover { 
  border-bottom: 5px solid #007893;
    -webkit-transition: border-bottom 0.5s; /* For Safari 3.1 to 6.0 */
    transition: border-bottom 0.5s;
} 


/* agregado */

#toTop{
  position: fixed;
  bottom: 30px;
  right: 90px;
  cursor: pointer;
  display: none;
  background-color:#687e95;
  border:1px solid #687e95;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.carousel-control {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 5%;
    font-size: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    background-color: rgba(0,0,0,0);
    filter: alpha(opacity=50);
    opacity: .5;
}

.colorRojo {
  color:red;
}

/*  If the browser window is 600px or smaller*/
@media only screen and (max-width: 600px) { 
#sinMapa {
display: none;
cursor: text;
}

@media only screen and (min-width: 601px) { 
#sinMapa {
display: block;
cursor: text;
}


 </style>

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
   <h1 class="titulos"><img src="images/hipcam_videos.png"></h1>
   </div>


 
  </div>
     



     <div class="row" style="margin-top:25px;">





 

  
  <!-- col 2 -->
  <div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
       <video id="htmlVideo" width="100%" controls>
           <source src="videos/video_hipcam_productos.mp4" type="video/mp4">
       </video>
    </div>
  </div>

  <!-- col 2 -->
  <div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
       <video id="htmlVideo" width="100%" controls>
           <source src="videos/hipcam_poster_situacion1.mp4" type="video/mp4">
       </video>
    </div>
  </div>


  <!-- col 4 -->
  <div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
       <video id="htmlVideo" width="100%" controls>
           <source src="videos/hipcam_poster_situacion2.mp4" type="video/mp4">
       </video>
    </div>
  </div>


  <!-- col 4 -->
  <div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
       <video id="htmlVideo" width="100%" controls>
           <source src="videos/hipcam_poster_situacion4_final1.mp4" type="video/mp4">
       </video>
    </div>
  </div>


  <!-- col 1 -->
  <div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
       <video id="htmlVideo" width="100%" controls>
           <source src="videos/video_hipcam_2.mp4" type="video/mp4">
       </video>
    </div>
  </div>




  </div>
</div>




<!-- SUBIR ACÁ TU PARTE DAVID -->

<!-- FIN PARTE DAVID -->









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

	
</body>
</html>