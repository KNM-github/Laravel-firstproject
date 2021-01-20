<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/bootstrap/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/fontawesome/css/all.min.css')}}">
	<script type="text/javascript" src="{{asset('frontendTemplate/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontendTemplate/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body style="background-color: brown;">
<div class="container mt-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <a class="navbar-brand" href="#">Mbridge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    	
      <i class="fas fa-search searchIcon"></i>
    </form>
  </div>
</nav>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontendTemplate/image/banner-2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontendTemplate/image/banner-1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontendTemplate/image/banner-3.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-5 mb-5">
<div class="card-deck">
  @foreach($posts as $post)
  <div class="card">
    <img src="/images/{{$post->picture}}"  class="card-img-top w-100 h-50"  alt="...">
    <div class="card-body " style="max-height: 50px;">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">{{$post->description}}</p>
    </div>
  </div>
  @endforeach
  
</div>
</div>

</body>
</html>