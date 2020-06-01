<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
<a href="" class="navbar-brand">
  <img src="images/logo.jpg" width="50px" height="50px">
</a>

<button class="navbar-toggler" data-toggle="collapse" data-target="#sn"><span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-center" id="sn">
<ul class="navbar-nav">
<li class="nav-item"><a href="/homepage" class="nav-link">Home</a></li>
<li class="nav-item"><a href="/AboutUs" class="nav-link">About Us</a></li>
<li class="nav-item"><a href="/Gallery" class="nav-link">Gallery</a></li>
<li class="nav-item"><a href="/ContactUs" class="nav-link">Contact Us</a></li>
<!--<li class="nav-item"><a href="/Feedback" class="nav-link">Feedback</a></li>-->
</ul>
<div class="orderbtn">
<a href=" /login" class="btn btn-outline-light btn-lg"  >ORDER</a>
<div>
</div>
</div>
</nav>



<!--<div class="header-img"></div>-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/28.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Your Design We Deliver</h1>
    <h3>Come & Join With Us</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Customize Your True Personalization</h1>
    <h3>Come & Join With Us</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Your Design We Deliver</h1>
    <h3>Come & Join With Us</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/26.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Customize Your True Personalization</h1>
    <h3>Come & Join With Us</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/1a.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Your Design We Deliver</h1>
    <h3>Come & Join With Us</h3>
  </div>
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

<div class="caption text-center">
      <h1>Aradhana Tailors</h1>
      <!--<h3>Customize Your True Personalization</h3>-->
      <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg" >LOGIN</a>
      <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg" >REGISTER</a>
 </div>



</header>

<!--<div class="modal" tabindex=-1 role="dialog" id="Modal1">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-titile">Login</h5>
<button type="button" class="close" data-dismiss="modal" area-label="close">
  <span area-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
  <form action="">
    <div class="form-group">
      <label for="exampleInputEmail">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail" aria-describeby="emailHelp" placeholder="Enter Email"> 
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
<label for="inputEmail">password</label>
  <input type="password" class="form-control" id="inputEmail" placeholder="password">
</div>
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">Check me out</label>
</div>
<a href=" ">Forget your password</a>
</div>
  </form>
</div>
</div>
<div class="modal-footer">
<div class="left">
    For an account
    <button type="button" class="btn" style="background-color:#df9c0b" href="#" data-toggle="modal" data-target="#Modal2" data-dismiss="modal1">Register</button>
</div>
  <button type="submit" class="btn" style="background-color:#df9c0b">Login</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>



<div class="modal" tabindex=-1 role="dialog" id="Modal2">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-titile">Register</h5>
<button type="button" class="close" data-dismiss="modal" area-label="close">
  <span area-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
  <form action="">
    <div class="form-group">
      <label for="exampleInputEmail">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail" aria-describeby="emailHelp" placeholder="Enter Email" required> 
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
<div class="form-group">
<label for="inputEmail">password</label>
  <input type="password" class="form-control" id="inputEmail" placeholder="password" required>
</div>
<div class="form-group">
<label for="inputEmail">repeat password</label>
  <input type="password" class="form-control" id="inputEmail" placeholder=" repeat password" required>
</div>
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">Check me out</label>
</div>
</div>
  </form>
  
</div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn" style="background-color:#df9c0b">Register</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>-->






@yield('content')
</body>


</html>