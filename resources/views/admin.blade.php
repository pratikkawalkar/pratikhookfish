<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hookfish | Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <link href="{{asset('css/admin.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</head>
<body>
   <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
                <div  class="navbar-brand">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                        <i class="fa fa-bars"></i>
                    </a>
            <a href="#">Hookfish</a>
                </div>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <nav id="spy">
            <ul class="sidebar-nav nav">
                <li class="sidebar-brand">
                    <a href="{{route('getHome')}}"><span class="fa fa-home solo">Home</span></a>
                </li>
                
            </ul>
        </nav>
    </div>
    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10" style="" >
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Location</th>
                <th>Sub-location</th>
                <th>Budget</th>
                <th>Configuration</th>

 </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Location</th>
                <th>Sub-location</th>
                <th>Budget</th>
                <th>Configuration</th>
                
            </tr>
        </tfoot>
       @foreach($en as $e)
        <tbody>
            <tr>
                <td>{{$e->f_name}}</td>
                <td>{{$e->l_name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->phone}}</td>
                <td>{{$e->location}}</td>
                <td>{{$e->subloacation}}</td>
                <td>{{$e->budget}}</td>
                <td>{{$e->config}}</td>
                
                
            </tr>
            
        </tbody>
       @endforeach
    </table>
                  </div>
                     <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
       $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        
    });
    </script>
</div>
</body>
</html>