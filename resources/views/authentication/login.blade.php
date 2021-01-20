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
<body class="badge-dark">
 <div class="container mt-5">
   <div class="row float-top" >
    <div class="col-lg-12">
     <a href="{{route('register')}}" class="btn btn-warning float-right">Register</a>
   </div>
   </div>
 </div>
<div class="container  text-center"  style="width: 500px;margin-top:100px; float:none;margin-bottom: 30px;">

<form method="post" action="{{route('loginPage')}}">
@csrf
 
    <div class="form-group col-md-12  col-lg-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">

  </div>

    <div class="form-group col-md-12 col-lg-12">
      <label for="inputPassword4">Password</label>
      <input type="text" class="form-control" name="password" id="inputPassword4" placeholder="Password">
    </div>
 
  
 
  <button type="submit" class="btn btn-primary">Login</button>



</form>
</div>


</body>
</html>