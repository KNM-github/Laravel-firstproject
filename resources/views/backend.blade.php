<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.min.css')}}">


</head>
<body>
<style>
</style>
</head>
<body class="bg-secondary">
 <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">Mbridge</a>
  <div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
 </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active my-auto" href="#"><i class="fas fa-bell text-success"></i></a>
      <a class="nav-item nav-link active " href="#"><i class="fas fa-user-circle fa-2x"></i></a>
      <li class="nav-item dropdown mt-2">
        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <a class="nav-item nav-link active text-white my-auto" href="#">Home <span class="sr-only">(current)</span></a>
      
    </div>
  </div>
</nav>

<div id="mySidebar" class="sidebar" style="margin-top: 68px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="{{route('act.index')}}">Activity</a>
 </div>
@yield('content')
<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/angular/angular.js')}}"></script>
<script src="{{asset('backend/angular/app.js')}}"></script>
<script src="{{asset('backend/angular/controller.js')}}"></script>
<script src="{{asset('backend/angular/service.js')}}"></script>
<script src="{{asset('bootstrap/js/nav.js')}}"></script>
</body>
</html> 
</div>
</body>
</html>