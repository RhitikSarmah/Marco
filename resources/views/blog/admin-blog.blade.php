<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

<div class="top-bar">
    <div class="container">
        <div style="display: flex; float: left;">
            1234567890
        </div>
        <div style="display: flex; float: right;">
            Hello
            Hi
            Yo
        </div>
    </div>
</div>

<div class="bg-black">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
    </div>
</div>


  <!-- Page Content -->
<div class="container">

  <div class="row justify-content-center">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <h4>Admin Panel - Blog</h4>
      <!-- Blog Post -->
         @foreach($post as $posts)
               <div class="card mb-4">
                  <img class="card-img-top" src="{{asset($posts->image)}}" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="card-title font-raleway">{{$posts->heading}}</h2>
                    <p class="card-text font-quicksand">{{$posts->description}}</p>
                    <a><button href="#" class="btn btn-read-more" style="background-color: #99cc33; color: white;">Read More &rarr;</button></a>
                    <form method="POST" action="{{route('blog.delete',$posts->id)}}">
                    @csrf
                        <button type="submit" class="btn btn-danger" onclick="return delFunction()">Delete</button>
                    </form>
                  </div>
                  <div class="card-footer">
                    Posted on {{$posts->created_at}}
                  </div>
                </div>
         @endforeach

      

      {{ $post->links() }}
          
    </div>

  </div>

</div>

<section id="footer">
    <div class="container section-top-margin">
        <div class="footer justify-content-center text-center padding-top-twenty">
            <img src="https://i.redd.it/fx2krn0q5l731.jpg" width="70px"> <br>
            <h2 class="text-raleway">Marco Bamboo Essential</h2>
        </div>
        <div class="row justify-content-center">
            <div class="footer-social-media">
                <a href=""><img src="https://i.redd.it/fx2krn0q5l731.jpg" width="20px;"></a>
                <a href=""><img src="https://i.redd.it/fx2krn0q5l731.jpg" width="20px;"></a>
                <a href=""><img src="https://i.redd.it/fx2krn0q5l731.jpg" width="20px;"></a>
            </div>
        </div>
        <div class="row justify-content-center text-center padding-top-twenty">
            <div class="col-md-4">
                <img src="https://i.redd.it/fx2krn0q5l731.jpg" width="60px">
            </div>
            <div class="col-md-4 text-quicksand">
                privacy policy <br>
                terms and conditions
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

<script type="text/javascript">
  function delFunction(){
    if(!confirm("Are You Sure?"))
      event.preventDefault();
  }
</script>

</body>

</html>
