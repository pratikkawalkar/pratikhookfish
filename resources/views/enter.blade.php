<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hookfish | entry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="{{asset('font/css/font-awesome.css')}}" rel="stylesheet">
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
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container-fluid" style="padding-top: 45px;">
    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
         @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h3 class="dark-grey">Registration</h3>
        <form action="{{route('postEntry')}}" method="post">
           {{csrf_field()}}
        <div class="form-group col-lg-6">
          <label>First Name</label>
          <input type="text" name="fname"  class="form-control" id="" value="">
        </div>
        <div class="form-group col-lg-6">
          <label>Last Name</label>
          <input type="text" name="lname" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Email</label>
          <input type="email" name="email" value="{{$request['email']}}" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Phone No</label>
          <input type="text" name="phone" value="{{$request['phone']}}" class="form-control" id="" value="">
        </div>
                
        <div class="form-group col-lg-6">
          <label>Location</label>
          <select class="form-control" id="sel1" name="location">
        
        <option>  Mumbai</option>
        <option>Pune</option>
        <option>Thane</option>
      </select>
        </div>
        
        <div class="form-group col-lg-6">
          <label>Sub-Location</label>
          <select class="form-control" id="sel1" name="subloc">
     
        <option>Andheri</option>
        <option>Palghar</option>
        <option>Borivali</option>
      </select>
        </div>      
          <div class="form-group col-lg-6">
          <label>Budget</label>
          <input type="text" name="budget" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Configuration</label>
          <select class="form-control" id="sel1" name="config">
        <option>1 BHK</option>
        <option>2 BHK</option>
        <option>2.5 BHK</option>
        <option>3+ BHK</option>
      </select>
        </div>  
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
        </div>        
      </form>
      </div>
    
      <div class="col-md-6">
        <h3 class="dark-grey">Terms and Conditions</h3>
        <p>
          By clicking on "Register" you agree to The Company's' Terms and Conditions
        </p>
        <p>
          While rare, prices are subject to change based on exchange rate fluctuations - 
          should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. 
        </p>
        <p>
          Should there be an error in the description or pricing of a product, we will provide you with a full refund
        </p>
        <p>
          Acceptance of an order by us is dependent on our suppliers ability to provide the product. 
        </p>
        
        
      </div>
    </div>
  </section>
</div>
</body>
</html>