<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hookfish | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="{{asset('font/css/font-awesome.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Hookfish.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Buy in Mumbai</a></li>
      </ul>
        <form class="navbar-form navbar-left">
      <div class="input-group" style="padding-left: 300px;">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>      
    </form>
      <ul class="nav navbar-nav navbar-right">
      <li ><a href="#"><i class="fa fa-heart-o"></i> Recommented</a></li>
        <li><a href="#"><i class="fa fa-heart-o"></i>Favourites</a></li>
        <li><a href="{{route('getAdmin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 head1"  > 
            <strong>
                <h1><p>Save 15<sub>%</sub>  to 25<sub>%</sub></p>
                <p class="on"> <small class="sm" >on</small>  Property</p></h1>
                <hr>
            </strong>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="container" style="width: 51%;">
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
    <div class="row form-group">

    
        <div class="col-sm-3"></div>
        <form action= "{{route('getEntry')}}" method="get">
        <div class="col-sm-3 form-group">
   
      <input type="text" class="form-control " id="in1"  name="email"  placeholder=" E-mail"></div>
        <div class="col-sm-3 form-group">
            <input type="text" class="form-control" id="in2" name="phone" style="" placeholder="   Phone No">
            <p  style="margin-top: 3%;"> <a href="#" class="sign">Sign in</a>
              <a href=""  style="margin-left: 1%;float: right;" > <button type="submit" class="btn btn-primary" >Enter site</button></a></p> 
      <!-- <div class="pull-right" style="padding-top: 25px;">
        <a href="">Sign In</a>
        <a href="" style="margin-left: 1%;" class="btn btn-info">Enter site</a>
      
      </div> -->
        </div>
        </form>
        <div class="col-sm-3"></div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h3> <p style="padding-left:10px;">Sell & Earn</p></h3>
            <h5><p style="padding-left:10px;">refer your friend and Earn reward for same <a href=""> <u> <strong> INVITE NOW </strong></u></a> <strong> !</strong> </p> </h5>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>   

</body>
</html>