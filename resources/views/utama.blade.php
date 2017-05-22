<html>
<head>
	<title>PORORO LAND | Be an you're Partner</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sb-admin.css')}}">
	
	
	

</head>
<body ="white">
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Menu Admin</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<li class="dropdown">
						<a href="{{ url('login')}}"><i class="fa fa-fw fa-power-off"></i> Log Out </a>
					</li>
				</ul>
				<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
				<div class="collapse navbar-collapse navbar-ex1-collapse" >
					<ul class="nav navbar-nav side-nav">

						<li><a href="{{url('') }}"><i class="fa fa-fw fa-dashboard"></i> Beranda</a></li>
		
						<li><a href="{{ url('rumah') }}"><i class="fa fa-fw fa-home"></i> Data Unit Perumahan </a></li>
						
						<li><a href="#"><i class="fa fa-fw fa-money"></i> Tipe Pembayaran</a>
                            <ul>
                            <li><a href="{{url('cash')}}"> Cash</a></li>
                            <li><a href="{{url('kredit')}}"> Kredit</a></li>
                            </ul>
                            </li>


						<li><a href="{{ url('komplek_perumahan') }}"><i class="fa fa-fw fa-flag"></i> Komplek Perumahan</a></li>

						<li><a href="{{ url('kategori') }}"><i class="fa fa-fw fa-home"></i> Tipe Rumah</a></li>

						<li><a href="{{url('pembeli')}}"><i class="fa fa-fw fa-cogs"></i> Pengaturan data Pembeli</a>
					
                         <li><a href="{{ url('myadmin') }}"><i class="fa fa-fw fa-user"></i> Kelola Admin</a></li>
                      
                       
				</div>
				<!-- /.navbar-collapse -->
		</nav>

	</li>
	</ul>
    <br>
    <div class="container-sm">
        @if (Session::has('informasi'))
        <div class="alert alert-info">
            <strong>Informasi: </strong>{{Session::get('informasi')}}
        </div>
        @endif  
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
    @endif 
</div>
<br>
				@yield('container')

			</div>
		</div>
	</div>
</body>
</html>