<html>
<head>
    <title>Login</title>
        {!! HTML::style('css/bootstrap.min.css') !!}
        {!! HTML::style('css/animate.css') !!}
        {!! HTML::style('css/sb-admin.css') !!}
        {!! HTML::style('component/font-awesome/css/font-awesome.min.css') !!}
</head>
<body class="warna">
    <div></div>
 <div class="col-md-4 col-md-offset-4 login-boxs">
 
        @if (count($errors) > 0)
                <div align="center" class="animated wobble">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li> <h4>{{ $error }}</h4></li>
                        @endforeach
                    </ul>
                </div>
            @endif
      <br>
      <br>

    {!! Form::open([ 'method' => 'post', 'class' =>'animated bounceIn']) !!}
    <h4 align="center" >Login</h4>
        <hr>
        

            
                <div class="form-group">
                    {!! Form::label('username', 'Username') !!}
                    {!! Form::text('username', null, ['class' =>'form-control'] ) !!}
                   
                </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password',['class' =>'form-control']) !!}
               
            </div>
             <a class="navbar-brand"  href="{{url('')}}"><i class="fa fa-home">Beranda</i></a><br>

            <div class="pull-right">
                 
                <button type="reset" class="btn btn-success"><i class="fa fa-undo"></i> Ulangi</button>
                 <button type="submit" class="btn btn-success"><i class="fa fa-lock"></i> Masuk</button>
            </div>
            <div class="clearfix"></div>
            
        
    {!! Form::close() !!}
          </div>
</body>
</html>

