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
                <li><a href="{{url('/')}}">Home </a></li>
              <li><a href="{{url('/about')}}">About Us </a></li>
                 <li class="active"><a href="javascript:void(0)">Registrasi Pembeli</a></li>
                <li><a href="{{url('login')}}">Login Admin </a></li>
              </ul>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div><section class="banner"><img src="images/third.jpg" alt="" class="img-responsive">
    <div class="container">
     <br>
   <br>
   
      <div class="bannerText">
        <div class="row">
   <div class="col-lg-12">

            <h2>Silahkan Registrasi untuk Membeli</h2>
     @if (count($errors) > 0)
                <div align="center" class="animated wobble">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
      <div class="panel-heading">
    </div>
    {!!
    Form::open(['url'=>'simpan','calss'=>'form-horizontal']) !!}
    @include('pembeli.form')
      <div style="width: 100%; text-align: right;">
        <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
        <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
      </div>
    {!! Form::close() !!}
    </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>
<!--Header HTML Ends Here--> 
</body>
</html>
