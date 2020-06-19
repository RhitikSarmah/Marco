<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Our Products</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">
<script src="{{asset('owlcarousel/jquery.min.js')}}"></script>
<script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
</head>
<body>


<div class="top-bar">
    <div class="container">
        <div class="top-bar-left" style="display: flex; float: left;">
           <img src="{{asset('images/phone.png')}}" width="18px;" height="20px;">
            <p>1234567890</p>
        </div>
        <div class="top-bar-right" style="display: flex; float: right;">
            <a href=""><img src="{{asset('images/fb.png')}}" width="14px;" height="18px;"></a>
            <a href=""><img src="{{asset('images/linkedin.png')}}" width="14px;" height="18px;"></a>
            <a href=""><img src="{{asset('images/insta.png')}}" width="14px;" height="18px;"></a> 
            <a href=""><img src="{{asset('images/whatsapp.png')}}" width="14px;" height="18px;"></a>
        </div>
    </div>
</div>

<div class="bg-black">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{asset(route('index'))}}" style="margin-left: -100px;"><img src="{{asset('images/logo2.png')}}" width="140px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img class="nav-toggler" src="{{asset('images/nav.png')}}" width="40px"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{asset(route('index'))}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset(route('about.us'))}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset(route('blog.view'))}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Products</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
</div>

<div class="product-top">
	<h5> <span>Hello</span> <br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</h5>
</div>

@yield('content')


<section id="footer">
    <div class="container footer-top-margin">
        <div class="footer justify-content-center text-center padding-top-twenty">
            <img src="{{asset('images/logo2.png')}}" width="70px"> <br>
            <h3 class="text-raleway">Marco Bamboo Essential</h3>
        </div>
        <div class="row justify-content-center">
            <div class="footer-social-media">
                <a href=""><img src="{{asset('images/fb.png')}}" width="14px;" height="18px;"></a>
                <a href=""><img src="{{asset('images/linkedin.png')}}" width="14px;" height="18px;"></a>
                <a href=""><img src="{{asset('images/insta.png')}}" width="14px;" height="18px;"></a> 
                <a href=""><img src="{{asset('images/whatsapp.png')}}" width="14px;" height="18px;"></a>
            </div>
        </div>
        <div class="row justify-content-center text-center padding-top-twenty">
            <div class="col-lg-4">
                <img src="{{asset('images/keshari.png')}}" width="100px">
            </div>
            <div class="col-lg-4 text-quicksand policies">
                <a>privacy policy</a> <br>
                <a>terms and conditions</a> <br>
                terms and conditions
            </div>
        </div>
        <hr>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 text-quicksand">
                Copyright Marco. all rights reserved
            </div>
            <div class="col-lg-4 footer-cp-link">
                <span class="text-quicksand" style="color: #99CC33;">Developed by:</span> <a href="https://coloursandpatterns.in" class="text-quicksand">Colours and Patterns</a>
            </div>
        </div>
    </div>
</section>


</body>

<script type="text/javascript">
  var owl = $('.owl-products');
  owl.owlCarousel({
    singleItem: true,
    loop:true,
    margin:5,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    dots: false,
    nav: false,
    responsiveClass: true,
    responsive : {
        0 : {
            items: 2
        },
        768 : {
            items: 4
        }
     }
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>