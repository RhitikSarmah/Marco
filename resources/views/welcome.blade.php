<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Bamboo</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
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
          <a class="navbar-brand" href="{{asset(route('index'))}}"><img src="{{asset('images/logo2.png')}}" width="140px"></a>
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
                <a class="nav-link" href="{{asset(route('blog.main.view'))}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Products</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
</div>


<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Bamboo Essentials</h1>
      <h2>100% Natural, Eco-Friendly Bamboo Products</h2>
      <a href="" class="btn-get-started scrollto">About Us</a>
    </div>
</section>


<section id="about">
      <div class="container justify-content-center section-top-margin">
           <div class="container">
                <div class="row">
                      <div class="col-md-6 about-image">
                            <img src="https://images.unsplash.com/photo-1525124480298-565f20ea00ae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" width="100%">
                      </div>
                      <div class="col-md-6 margin-top-ten">
                            <p class="section-text-top">ABOUT US</p>
                            <h5 class="margin-top-ten text-raleway margin-bottom-five">Marco Bamboo Essentials</h5>
                            <p class="text-quicksand">100% organic, eco-friendly and bamboo products made specifically for you and your special ones. Wide variety of strong and sustainable products. Conceived multitudinous ideas and working on innovating and developing them constantly. 0% wastage and rigorously quality checked products.</p>
                            <div class="row margin-top-thirty">
                                <div class="col-md-1">
                                    <img src="{{asset('images/believe.png')}}" width="30px">
                                </div>
                                <div class="col-md-11">
                                    <h6 class="text-raleway">We Believe</h6> <br>
                                    <p class="text-quicksand">Making products that stands out from the market products, while maintaining international quality benchmarks. <br><br>
                                    Make in India to bring the exorbitant smile back on the face of Indian domestic good makers. (Aatma Nirbhar, Vocal for Local) <br> <br>
                                    Sustainable development <br> <br>
                                    Single use plastic nation
                                    </p>
                                </div>
                            </div>
                            <div class="row margin-top-thirty">
                                <div class="col-md-1">
                                    <img src="{{asset('images/mission.png')}}" width="30px">
                                </div>
                                <div class="col-md-11">
                                    <h6 class="text-raleway">Our Mission Is</h6> <br>
                                    <p class="text-quicksand">Make in India and Atmanirbhar Bharat- we support and appreciate Mr Prime Minister’s Atmanirbhar Bharat and Make in India initiatives. Products are manufactured by human labours moreover than machines, thus boosting the employment sector. <br> <br>
                                    Employment generation in home country- Our mission is to empower our youth by employing them. We want our rural sector to develop on its peak. <br> <br>
                                    Independent India- we believe in the metamorphosis of china bounded India into maverick India. We are the brawny pillar of the independent India. It looks bijou but it is more like a swaraj cold war. <br> <br>
                                    Preserve our heritage and blue planet- our mission is to preserve the auspicious beauty of our planet and to safeguard our heritage. Bamboo falls under the category of grass, so, we are working in against of deforestation. India is having adverse economic conditions, so by products like ours, we will attain sustainable development. Also, we want India to be free from single use plastics.
                                    <br>
                                    
                                    <button class="btn btn-sm about-button">Know More</button>
                           </p>
                                </div>
                            </div>
                      </div>
                  </div>
           </div>
      </div>
</section>

<section id="why_us">
    <div class="container">
        <div class="row section-top-margin">
        <div class="col">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <p class="section-text-top">WHY US</p>
                </div>
            </div>
            <div class="row justify-content-center text-center margin-top-ten">
                <div class="col-md-10">
                    <h5 class="text-raleway margin-bottom-five">Why You Should <span style="color: #99CC33;">Choose Us?</span></h5>
                    <p class="text-quicksand margin-top-ten">Macro bamboo products are 100% natural, non-toxic, kid-friendly, biodegradable, eco-friendly and is made up from high grade bamboo. We are the segment leading brand as we have high standards for quality and proper hygiene while making a product. So, it’s better to ask for an Indian brand like Marco rather than powering up the Chinese market.</p>
                </div>
            </div>
            <div class="row justify-content-center text-center margin-top-twenty">
                <div class="col-md-3">
                    <div class="card" width="100%" >
                      <div class="card-body">
                        <h4 class="text-raleway">01</h4>
                        <h5 class="card-title text-raleway">Rural Sector <span class="text-green">Development</span></h5>
                        <p class="card-text text-quicksand">Do you know, the Chinese market is
                        not only eating our domestic market,
                        but our culture and heritage as well. <br><br></p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" width="100%">
                      <div class="card-body">
                        <h4 class="text-raleway">02</h4>
                        <h5 class="card-title text-raleway">Employment <span class="text-green">Generation</span></h5>
                        <p class="card-text text-quicksand">all machines are human operated and use of very less automated machines allow us to be the key of employment generation.</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" width="100%">
                      <div class="card-body">
                        <h4 class="text-raleway">03</h4>
                        <h5 class="card-title text-raleway">Best quality <span class="text-green">Products</span></h5>
                        <p class="card-text text-quicksand">100% organic, non-polished and affordable products. Products that stand out in Indian market and quality that surpasses other international level products. <br><br> </p>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" width="100%">
                      <div class="card-body">
                        <h4 class="text-raleway">04</h4>
                        <h5 class="card-title text-raleway">Boycott Chinese <span>Products</span></h5>
                        <p class="card-text text-quicksand">100% India made products to boycott china and it’s pseudo products. <br><br></p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="call_us">
    <div class="parallex section-top-margin">
            <h3 class="text-raleway">CONTACT US</h3>
            <p class="text-quicksand">We are just a call away for any queries. You can also contact us
             at different platforms and share your queries with just one click.</p>
            <button>Contact Us</button>
    </div>
</section>

<section id="product">
    <div class="container">
        <div class="row section-top-margin">
        <div class="col">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <p class="section-text-top">PRODUCTS</p>
                </div>
            </div>
            <div class="row justify-content-center text-center margin-top-ten">
                <div class="col-md-4">
                    <h5 class="text-raleway margin-bottom-five">Our 100% Natural <span style="color: #99CC33;">Product</span></h5>
                    <p class="text-quicksand margin-top-ten">Bamboo products are being used in every household and restaurants
                    in our everyday life for centuries without even realising it. <br> <span style="color: #99CC33;"> Click on the product for more details </span></p>
                </div>
            </div>
            <div class="row justify-content-center text-center margin-top-twenty">
                        <div class="col-md-3">
                            <div class="card" width="100%">
                              <div class="card-body">
                                <img src="https://cdn.britannica.com/94/13194-004-B3F5ECB5/Bamboo.jpg"  width="60%">
                                <h5 class="card-title product-card-margin-in text-raleway">Round Sticks</h5>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" width="100%">
                              <div class="card-body">
                                <img src="https://cdn.britannica.com/94/13194-004-B3F5ECB5/Bamboo.jpg"  width="60%">
                                <h5 class="card-title product-card-margin-in text-raleway">Round Sticks</h5>
                              </div>
                            </div>
                        </div>                          
                </div>
                 <div class="row justify-content-center text-center product-margin">
                        <div class="col-md-3">
                            <div class="card" width="100%">
                              <div class="card-body">
                                <img src="https://cdn.britannica.com/94/13194-004-B3F5ECB5/Bamboo.jpg"  width="60%">
                                <h5 class="card-title product-card-margin-in text-raleway">Round Sticks</h5>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" width="100%">
                              <div class="card-body">
                                <img src="https://cdn.britannica.com/94/13194-004-B3F5ECB5/Bamboo.jpg"  width="60%">
                                <h5 class="card-title product-card-margin-in text-raleway">Round Sticks</h5>
                              </div>
                            </div>
                        </div>                          
                  </div>
        </div>
    </div>
    </div>
</section>


<section id="faq">
    <div class="faq-div">
        <div class="container">
                <div class="row section-top-margin">
                    <div class="col">
                        <div class="row justify-content-center text-center">
                            <div class="col">
                                <p class="section-text-top padding-top-thirty">FAQ</p>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center margin-top-ten">
                            <div class="col-md-4">
                                <h5 class="text-raleway margin-bottom-five">Frequently Asked Questions</h5>
                                <p class="text-quicksand margin-top-ten">F.A.Q is a list of frequently asked questions and answers on a particular topic. Here is the list of oftenly asked questions and queries. </p>
                            </div>
                        </div>
                        <div class="row justify-content-center faq-top margin-top-twenty">
                            <div class="col-md-6 faq-question">
                                <div class="faq-questions" onclick="faq1()">
                                    <p class="text-quicksand">How many products do you serve?
                                    <img src="{{asset('images/fb.png')}}" height="18px" width="14px" style="display: flex; float: right; padding-right: 5px;"></p>
                                </div>
                                <div class="faq-ans" id="faq-ans-1">
                                        <p class="text-quicksand">We deal in products like: <br> i)  Reusable Bamboo straw <br> ii) Bamboo stirrer <br> iii) Bamboo Round sticks <br> iv) Bamboo chopsticks</p>
                                  </div>
                            </div>
                        </div>
                        <div class="row justify-content-center faq-top">
                            <div class="col-md-6 faq-question">
                                <div class="faq-questions"  onclick="faq2()">
                                    <p class="text-quicksand">What are the sizes of the product in which you deal?
                                      <img src="{{asset('images/fb.png')}}" height="18px" width="14px" style="display: flex; float: right; padding-right: 5px;"> </p>          
                                </div>
                                <div class="faq-ans" id="faq-ans-2">
                                        <p class="text-quicksand">For straws we deal in sizes varying from thickness of 10 mm to 30 mm and more. <br>
                                        For Skewers, the sizes are available from 2.5mm to 5mm and the length starts from 6 inches to 30 inches. <br>
                                        For stirrer, the sizes are available from 4 inches to 8 inches. <br>
                                        And all the products can be customized according to your choice  . But there are some conditions applied for this- you have to order the products in bulk quantity.
                                        </p>
                                    </div>
                            </div>
                        </div>
                        <div class="row justify-content-center faq-top">
                            <div class="col-md-6 faq-question">
                                <div class="faq-questions"  onclick="faq3()">
                                    <p class="text-quicksand">Are the products available every time?
                                    <img src="{{asset('images/fb.png')}}" height="18px" width="14px" style="display: flex; float: right; padding-right: 5px;"></p>
                                    <div class="faq-ans" id="faq-ans-3">
                                        <p class="text-quicksand">The listed products will be available  every time, and for those products which aren’t listed and varies in size , for that you will have to order in bulk separately.
                                          </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center faq-top">
                            <div class="col-md-6 faq-question">
                                <div class="faq-questions"  onclick="faq4()">
                                    <p class="text-quicksand">How are the products packed?
                                    <img src="{{asset('images/fb.png')}}" height="18px" width="14px" style="display: flex; float: right; padding-right: 5px;"></p>
                                    <div class="faq-ans" id="faq-ans-4">
                                        <p class="text-quicksand">We pack the materials in air proof bags. Additionally, we use pp plastics to control the moisture.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center faq-top padding-bottom-thirty">
                            <div class="col-md-6 faq-question">
                                <div class="faq-questions"  onclick="faq5()">
                                    <p class="text-quicksand">What is the payment procedure?
                                    <img src="{{asset('images/fb.png')}}" height="18px" width="14px" style="display: flex; float: right; padding-right: 5px;"></p>
                                    <div class="faq-ans" id="faq-ans-5">
                                        <p class="text-quicksand">For small orders, one can directly buy the products from the amazon listed link. <br>
                                        And For bulk orders: the customers are required to pay 70%  at the time of final order and the rest 30% has to be paid before the materials are out from the factory.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row section-top-margin">
        <div class="col">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <p class="section-text-top">CONTACT</p>
                </div>
            </div>
            <div class="row justify-content-center text-center margin-top-ten">
                <div class="col-md-8">
                    <h5 class="text-raleway margin-bottom-five">Contact us for more details</h5>
                    <p class="text-quicksand">Want to hear from us about it? You can contact us below to clear any of your query / questions and get the appropriate information you want to know. We are available in almost all social media platforms by the name MARCO BAMBOO ESSENTIALS</span></p>
                </div>
            </div>
            <div class="container margin-top-thirty">
                <div class="row justify-content-center text-center">
                    <div class="col-sm-6">
                        <h4 class="text-raleway">Location</h4>
                        <a href="{{asset(route('index'))}}}" style="text-decoration: none; color: black;"><p class="text-quicksand">EPIP, AIDC Complex, Amingaon,</p>
                        <p class="text-quicksand">North Guwahati - 31</p></a>
                        <br>
                        <h4 class="text-raleway">Email</h4>
                        <a href="{{asset(route('index'))}}}" style="text-decoration: none; color: black;"><p class="text-quicksand">k.udyogghy@gmail.com</p></a>
                        <br>
                        <h4 class="text-raleway">Call Us</h4>
                        <a href="{{asset(route('index'))}}}" style="text-decoration: none; color: black;"><p class="text-quicksand">EPIP, AIDC Complex, Amingaon,</p>
                        <p class="text-quicksand">North Guwahati - 31</p></a>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <form action="{{asset(route('form.submit'))}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" name="name" placeholder="name">
                            <small>{{$errors->first('name')}}</small>
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control form-control-sm" name="email" placeholder="email">
                            <small>{{$errors->first('email')}}</small>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" name="phone" placeholder="phone number">
                            <small>{{$errors->first('phone')}}</small>
                          </div>
                           <div class="form-group">
                            <textarea class="form-control" rows="3" name="enquiry" placeholder="enquiry"></textarea>
                            <small>{{$errors->first('enquiry')}}</small>
                          </div>
                          <button type="submit" class="btn btn-contact btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="footer">
    <div class="container section-top-margin">
        <div class="footer justify-content-center text-center padding-top-fourty">
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
        <div class="row justify-content-center text-center padding-top-fifty">
            <div class="col-md-4">
                <img src="{{asset('images/keshari.png')}}" width="100px">
            </div>
            <div class="col-md-4 text-quicksand policies">
                <a>privacy policy</a> <br>
                <a>terms and conditions</a> <br>
                
            </div>
        </div>
        <hr>
        <div class="row justify-content-center text-center">
            <div class="col-md-4 text-quicksand">
                Copyright Marco. all rights reserved
            </div>
            <div class="col-md-4 footer-cp-link">
                <span class="text-quicksand" style="color: #99CC33;">Developed by:</span> <a href="https://coloursandpatterns.in" class="text-quicksand">Colours and Patterns</a>
            </div>
        </div>
    </div>
</section>


<script src="owlcarousel/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    var owl = $('.owl-team');
          owl.owlCarousel({
            items:1,
            stagePadding: 0,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true
        });
     function faq1() {
          var x = document.getElementById("faq-ans-1");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        };
        function faq2() {
          var x = document.getElementById("faq-ans-2");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        };
        function faq3() {
          var x = document.getElementById("faq-ans-3");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        };
        function faq4() {
          var x = document.getElementById("faq-ans-4");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        };
        function faq5() {
          var x = document.getElementById("faq-ans-5");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        };
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
