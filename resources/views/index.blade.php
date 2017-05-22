<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Perumahan Pororoland --KLOMPOK 9--</title>
<!--Stylesheet-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/core.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--Jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--[if lt IE 9]>
<link href="css/ie8/ie8.css" type="text/css" rel="stylesheet" />
<![endif]-->
</head>

<body>
<!--Header HTML Starts Here-->
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-4"><a id="logo" href="index.html"><img src="images/logo.png" class="img-responsive" alt="" title="Pororoland"></a> </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
      	<!--<div class="topPhone pull-right"><p>+1-9876543210</p></div>-->
        <div class="clearfix"></div>
        <nav class="navbar marginBottom">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav mainNavigation">
                <li class="active"><a href="#">Home </a></li>
                <li><a href="{{url('/about')}}">About Us </a></li>
                <li><a href="{{('register')}}">Registrasi Pembeli</a></li>
                <li><a href="{{url('/login')}}">Login Admin </a></li>
              </ul>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div><section class="banner"><img src="images/banner_02.jpg" alt="" class="img-responsive">
    <div class="container">
      <div class="bannerText">
        <div class="row">
  
          <div class="col-lg-12">
            <h2>Selamat Datang</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>
<!--Header HTML Ends Here--> 

<!-- Content HTML Starts Here-->

<nav class="navbar navbar-default navbar-fixed-bottom">
  <footer class="container" >
   <ul class="nav navbar-nav navbar-right">
   <p class="copyright text-muted small">Copyright &copy; Kelompok 9 2015. All Rights Reserved</p>  
   </ul>
  </footer>
</nav>
    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
    $(function(){
        $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
<!-- Footer HTML Ends Here-->
</body>
</html>
