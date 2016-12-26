<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Alumni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144- .png">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link rel="icon" sizes="192x192" href="images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/carousel.css">  
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.lime-indigo.min.css" /> 
  
<style type="text/css">
.customnav {
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
    border-radius: 0px;
    padding: 10px;
   background: url('assets/img/contents.jpg')center / cover;
}

.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
}

.navbar-inverse .navbar-nav>li>a:hover {
    background-color: black;
    border-radius: 5px;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar customnav navbar-inverse navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="assets/img/logo.png" width = "80"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
	      <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
	      <li><a href="#">Page 2</a></li>
	      <li><a href="#">Page 3</a></li>		
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#validate-id" data-toggle="modal"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
	      <li><a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	</div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!--  Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/img/img3.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
           <h3>...</h3>
            <p>...</p>
        </div>
    </div>

    <div class="item">
      <img src="assets/img/slide01.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
           <h3>...</h3>
            <p>...</p>
        </div>        
    </div>
  
    <div class="item">  
      <img src="assets/img/img3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
           <h3>...</h3>
            <p>...</p>
        </div>
    </div>

    <div class="item">
      <img src="assets/img/slide01.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
           <h3>...</h3>
            <p>...</p>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


   