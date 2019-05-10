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
	<title>About | O&amp;U Lighting</title>
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
                <a class="dropdown-item" href="products.php#chandeliers">Chandeliers</a>
                <a class="dropdown-item" href="products.php">Flood Lights</a>
                <a class="dropdown-item" href="products.php">Ceiling Lights</a>
                <a class="dropdown-item" href="products.php">Panel Lights</a>
                <a class="dropdown-item" href="products.php">Bulbs and Tubes</a>
                <a class="dropdown-item" href="products.php">Street Light</a>
                <a class="dropdown-item" href="products.php">Wall Lights</a>
                <a class="dropdown-item" href="products.php">Zoom Lights</a>
                <a class="dropdown-item" href="products.php">Pool Lights</a>
                <a class="dropdown-item" href="products.php">Garden Lights</a>
                <a class="dropdown-item" href="products.php">Track Light</a>
                <a class="dropdown-item" href="products.php">Zoom Light</a>
                <a class="dropdown-item" href="products.php">Down Light</a>
                <a class="dropdown-item" href="products.php">Spot Lights</a>
                <a class="dropdown-item" href="products.php">COB series</a>
                <a class="dropdown-item" href="products.php">Led Strips</a>
              </div>
            </li>
      <li class="nav-item active">
        <a class="nav-link">About</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="stories.php">Our Stories</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
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
