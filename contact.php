<?php
session_start();
if(count($_SESSION['cart'])==0){
    $itemCount=0;
}
else{
    $itemCount=count($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact | O&amp;U Lighting</title>
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.min.css">
</head>
<body id="bodyOthers">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding:20px">
    <div class="container">
        <a class="navbar-brand text-primary" href="#">O&amp;U Lighting</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes" aria-expanded="false">Products <span class="sr-only">(current)</span> <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                  <a class="dropdown-item" href="products.php#chandelier">Chandeliers</a>
                  <a class="dropdown-item" href="products.php#flights">Flood Lights</a>
                  <a class="dropdown-item" href="products.php#clights">Ceiling Lights</a>
                  <a class="dropdown-item" href="products.php#plights">Panel Lights</a>
                  <a class="dropdown-item" href="products.php#bandt">Bulbs and Tubes</a>
                  <a class="dropdown-item" href="products.php#slights">Street Light</a>
                  <a class="dropdown-item" href="products.php#wlights">Wall Lights</a>
                  <a class="dropdown-item" href="products.php#zlights">Zoom Lights</a>
                  <a class="dropdown-item" href="products.php#plights">Pool Lights</a>
                  <a class="dropdown-item" href="products.php#glights">Garden Lights</a>
                  <a class="dropdown-item" href="products.php#tlights">Track Light</a>
                  <a class="dropdown-item" href="products.php#zlights">Zoom Light</a>
                  <a class="dropdown-item" href="products.php#dlights">Down Light</a>
                  <a class="dropdown-item" href="products.php#slights">Spot Lights</a>
                  <a class="dropdown-item" href="products.php#cob">COB series</a>
                  <a class="dropdown-item" href="products.php#led">Led Strips</a>
              </div>
            </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="stories.php">Our Stories</a>
        </li>
      <li class="nav-item active">
        <a class="nav-link">Contact us</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-primary"><?php echo $itemCount;?></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false"><i class="fa fa-user mr-2"></i> Account <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#login" data-backdrop="static">Login</a>
                <a class="dropdown-item" href="">Sign Up</a>
              </div>
            </li>
          </ul>
  </div>
</div>
</nav>
<div class="container">
    <aside class="float-icons">
        <button type="button" class="btn btn-primary"><i class="fa fa-facebook-f" style="padding-right: 5px;"></i></button><br>
        <button type="button" class="btn btn-primary" style="margin-top: 5px;"><i class="fa fa-twitter"></i></button>
    </aside>
    <div class="row">
        <div class="col-sm-6">
        <h1>Howdy there!</h1>
            <p>We would love to hear what you have to say. It may be a question, a feedback or a complaint. It all matters to us.</p><br>
            <i class="fa fa-envelope text-primary">&nbsp;</i><a href="mailto:info@onul.co.ke">info@onul.co.ke</a><br>
            <i class="fa fa-phone text-primary"></i>&nbsp;<a href="tel:+254707112347">+254 707 112 347</a>
        </div>
        <div class="col-sm-6">
            <form method="post" action="">
                <div class="form-group row">
                    <div class="col-sm-6"><input class="form-control" type="text" placeholder="Full Name" required></div>
                    <div class="col-sm-6"><input class="form-control" type="text" placeholder="Email" required></div>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Message title" required>
                </div>
                <div class="form-group">
                    <textarea rows="10" placeholder="Message Body" class="form-control" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
<!--Login Modal-->
<div class="modal" id="login">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
        <div class="form-group">
          <label class="text-primary">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
          <label class="text-primary">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <footer id="footer">
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="float-lg-right"><a href="#top">Back to top</a></li>
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
            </ul>
            <p>&copy; <?php echo date('Y');?> Onwards and Upwards Lighting | Web by: <a href="http://www.cryosoft.co.ke">Cryosoft Corporation</a></p>
          </div>
        </div>

      </footer>
</div>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
