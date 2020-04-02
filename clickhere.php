<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
 .leftcolumn {   
  float: left;
  width: 70%;
  padding-left:15px;
  }

  .rightcolumn {
  float: right;
  width: 30%; 
  }

  
.bottom{
    padding-top: 30px;
}

.fa {
  padding: 5px;
  font-size: 20px;
  width: 30px;
  background:#C3073F;
  color:white;
  text-align: center;
  
}


.fa:hover {
  opacity: 0.8;
}
.bg
{
	background-color: #1A1A1D;
	color: #C3073F;
}

  .jumbotron{
    opacity: 70%;
    background-color: #1A1A1E;
    font-weight:700;
    
  }
  /* Modify the backgorund color */ 
.navbar-custom { 
  background-color: #C3073F;
 
} 
/* Modify brand and text color */ 
 
nav{color:whitesmoke}

.btn-custom{ background-color: #C3073F; color:white;}

</style>


<body class=bg>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#c3073f;" >
      <a class="navbar-brand" href="bootindex.php"><b>Yes!+</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php"><b>Home</b></a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="overview.php"><b>Over View</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="co.php"><b>Co-Ordinators</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="images.php"><b>Images</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonal.php"><b>Testimonials</b></a>
          </li>
        </ul>
         
      </div>
    </nav>   
      
      <br>

      <style>
        marquee
        {
          font-size: 18px;
          font-weight: 250;
          color: whitesmoke;
          font-family: sans-serif;
        }
      </style>
      <marquee>"Faith is realising that you always get what you need.-Sri Sri"</marquee>
      <br>

  <div class="leftcolumn">
   <div id="carouselExampleInterval" style="width:500px;" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="2000">
        <img src="s4.jpeg" class="d-block w-100" alt="Sri Sri" height="400" width="800">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="s2.jpeg" class="d-block w-100" alt="Sri sri" height="400" width="800">
      </div>
      <div class="carousel-item data-interval="2000">
        <img src="s6.jpeg" class="d-block w-100" alt="Sri Sri" height="400" width="800">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
   </div>
  </div>
  <br>
  <br>
 
  <div class="rightcolumn">
  <div class="jumbotron jumbotron-fluid">
<div class="container"> 
  <h2><font color="white">SIGN IN!!!</font></h2>
  <form action="info_insert.php" method="POST">
    
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1"><font color="whitesmoke">Check me out</font></label>
    </div>
    <button type="submit" class="btn btn-custom">SignUp</button><br>
    
  </form>
  </div>
  </div>
  </div>
  
  <br><br><br><br><br><br>
  <br><br><br><br><br><br>
  <br><br><br><br>       
      
 <div class="leftcolumn">
   <a href="https://m.facebook.com/Yes-Bangalore-Institute-Of-Technology-456852608160486/?refsrc=https%3A%2F%2Fm.facebook.com%2F456852608160486%2F&_rdr" class="fa fa-facebook"></a>
   <a href="#" class="fa fa-google"></a>
   <a href="http://instagram.com/bityesplus" class="fa fa-instagram"></a>
  </div>    
       
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>