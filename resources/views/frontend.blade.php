<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lawride Lawyer - Home</title>
  <link rel="icon" href="{{asset('img/Fevicon.png')}}" type="image/png">
​
  <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/Magnific-Popup/magnific-popup.css')}}">
​
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <!--================ Header Top Area Start =================-->
  <section class="header-top d-none d-sm-block">
    <div class="container">
      <div class="d-sm-flex justify-content-between">
        <ul class="header-top__info mb-2 mb-sm-0">
          <li><a href="tel:+01432152323"><span class="align-middle"><i class="ti-mobile"></i></span>+014 321 523 23</a></li>
          <li><a href="mailto:info@example.com"><span class="align-middle"><i class="ti-email"></i></span>Info@example.com</a></li>
        </ul>
        <ul class="header-top__social">
          <li><a href="#"><i class="ti-facebook"></i></a></li>
          <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li><a href="#"><i class="ti-instagram"></i></a></li>
          <li><a href="#"><i class="ti-skype"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================ Header Top Area end =================-->
​
  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
​
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="services.html">Services</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
 
  <section class="section-margin">
    <div class="container">
      
      <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <img class="card-img rounded-0" style="width: 200px;" src="/images/{{$post->picture}}" alt="">
            <div class="card-blog__body">
              <h3><a href="#">{{$post->description}}</a></h3>
              <ul class="card-blog__info">
                <li><a href="#"><i class="ti-notepad"></i>Feb 25 2018</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>1 Comment</a></li>
              </ul>
              <p>Varius conubia a mauris litora lacus. Cubilia proin on  ornare et nunc dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
            </div>
            <div class="card-blog__footer">
              <a href="#">Read More<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
        @endforeach
​
       
       
      </div>

      <div class="row">
        <h3>Student List</h3>
      </div>

    </div>
  </section>  
​
​

  <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendors/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>