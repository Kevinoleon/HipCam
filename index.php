<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hipcam</title>
  <meta name="keywords" content="innovation, Hipcam DoorBell, Hipcam Indoor, Hipcam Outdoor Pro, security camera, ipcamera, hipcam, Wificamera, security, home security, smart">
  <meta name="description" content="We ensure that what’s most important to you is safe and secure">

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
  height: 99%;
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
  border-bottom: 5px solid #687e95;
  background-color:#fbfcfe;
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

<script>
  $(document).ready(function() {
  $('#youtubeVideo').on('hidden.bs.modal', function() {
    var $this = $(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });

  $('#html5Video').on('hidden.bs.modal', function() {
    var html5Video = document.getElementById("htmlVideo");
    if (html5Video != null) {
      html5Video.pause();
      html5Video.currentTime = 0;
    }
  });
});
</script>



<!-- Modal -->
<div class="modal fade" id="html5Video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Welcome to Hipcam</h4>
      </div>
      <div class="modal-body">

       <video id="htmlVideo" width="100%" controls>
           <source src="videos/video_hipcam_2.mp4" type="video/mp4">
       </video>

      

      </div>
      
    </div>

  </div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="#myModal" data-toggle="modal" data-target="#html5Video">
        <img src="images/slide1.png" alt="Hipcam" style="width:100%;">
      </a>
      </div>

      <div class="item">
        <img src="images/slide2.png" alt="Hipcam" style="width:100%;">
      </div>

       <div class="item">
        <img src="images/slide3.png" alt="Hipcam" style="width:100%;">
      </div>

       <div class="item">
        <img src="images/slide4.png" alt="Hipcam" style="width:100%;">
      </div>
     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



<div id="contenedorInterno">
<!-- <div style="width:1590px; margin:0 auto;"> -->
  <div class="container-fluid">

   <!-- módulo de 3 bloques -->
  <div class="row" style="padding:50px 0 10px 0;">
    <div class="col-md-4 imgCamPro">
      <a href="indoor.html" class=" ">
        <img src="images/botIndoor1.png" class="img-responsive center-block">
      </a>
    </div>

    <div class="col-md-4 imgCamPro">
      <a href="outdoor.html" class=" ">
      <img src="images/botOutdoor1.png" class="img-responsive center-block">
    </a>
    </div>

    <div class="col-md-4 imgCamPro">
      <a href="doorbell.html" class=" ">
      <img src="images/botDoorbell1.png" class="img-responsive center-block">
    </a>
    </div>
  </div>
  <!-- fin módulo de 3 bloques -->

  <!-- módulo de 2 bloques -->
  <div class="marMod2">
    <div class="row">
      <div class="col-md-6" style="margin-top:30px;">
        <img src="images/img_home_smartecosystem.png" class="img-responsive center-block">
      </div>
      <div class="col-md-6" style="margin-top:30px;">
        <img src="images/img_home_alonboard.png" class="img-responsive center-block">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6" style="margin-top:30px;">
        <img src="images/img_home_easytouse.png" class="img-responsive center-block">
      </div>
      <div class="col-md-6" style="margin-top:30px;">
        <img src="images/img_home_hipcamassist.png" class="img-responsive center-block">
      </div>
    </div>
  </div>
  <!-- fín de módulo de 2 bloques -->

  </div>
</div>



<!-- Module Download the hipcam app -->
<div class="container-fluid">  
    <div class="row imgFondoAppCam">
      <div id="contenedorInterno">
              <div class="col-xs-12 col-md-6" style="text-align: center; margin-top: 17%">    
                  <h1>Download the hipcam app</h1>
                  <h5>The simple,smart security ecosystem</h5>
                  <img src="images/google-play.png"><img src="images/app-apple.png">
              </div>
        
              <div class="col-xs-12 col-md-6">
                  <img src="images/hand-cam.png" class="img-responsive center-block">
              </div>
        </div>
    </div>
</div>
<!-- FIN - Module Download the hipcam app -->

<!-- Module Hipcam Protect -->
<div class="container-fluid">  
    <div class="row imgFondoHipCam" style="background-color: #687e95">
      <div id="contenedorInterno">
              <div class="col-xs-12 col-md-2">
              </div>

              <div class="col-xs-12 col-md-3">
                  <img src="images/camara.png" class="img-responsive center-block" style="padding-top: 30px">
              </div>

              <div class="col-xs-12 col-md-1">
              </div>
 
              <div class="col-xs-12 col-md-3" style="margin-top: 3%">    
                  <img src="images/HipcamProtect.png" class="img-responsive center-block" style="padding: 20px 20px 20px 20px">
                  <a href="hipcamprotect.html"><img src="images/botonSeeMore.png" class="img-responsive center-block" style="padding: 0px 20px 20px 30px"></a>
              </div>
               <div class="col-xs-12 col-md-3">
              </div>
        </div>
    </div>
</div>
<!-- FIN - Module Hipcam Protect -->




<!-- modulo map contact -->
<div id="contenedorInterno" style="">
  <h2 class="text-center colorPrincipal marTitle">Contact Hipcam in your region</h2>
  <div class="container">




    <div class="row no-gutters">

  <div class="col-xs-12 col-sm-4">
           <a href="contact.php?id=1">
          <div class="container1">
            <img src="images/america_1.png" alt="Hipcam América" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/america_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>




    <div class="col-xs-12 col-sm-4">
           <a href="contact.php?id=2">
          <div class="container1">
            <img src="images/latam_1.png" alt="Hipcam Latam" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/latam_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>




 

    

       <div class="col-xs-12 col-sm-4">
      <a href="contact.php?id=3">
          <div class="container1">
            <img src="images/europe_solo_1.png" alt="Hipcam Europe" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/europe_solo_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>

      </div>



 <div class="row no-gutters">


    <div class="col-xs-12 col-sm-4">
          <a href="contact.php?id=4">
          <div class="container1">
            <img src="images/europe_1.png" alt="Hipcam Europe Middle East" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/europe_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>





    <div class="col-xs-12 col-sm-4">
      <a href="contact.php?id=5">
          <div class="container1">
            <img src="images/israel_1.png" alt="Hipcam Isreal" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/israel_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>



        <div class="col-xs-12 col-sm-4">
      <a href="contact.php?id=6">
          <div class="container1">
            <img src="images/asia_1.png" alt="Hipcam Asia" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/asia_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>


    </div>


     <div class="row no-gutters">

      <div class="col-xs-12 col-sm-4">
        </div>

      <div class="col-xs-12 col-sm-4">
      <a href="contact.php?id=7">
          <div class="container1">
            <img src="images/china_1.png" alt="Hipcam China" class="image img-responsive center-block" style="max-width: 100%">
              <div class="overlay">
                <img src="images/china_2.png" style="max-width: 100%"> 
              </div>
          </div>
        </a>
        </div>

         <div class="col-xs-12 col-sm-4">
        </div>


     </div>




  </div>
</div>
<!-- fin map contact -->


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


	
</body>
</html>
