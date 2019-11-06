<?php
session_start();
if(count($_SESSION['cart'])==0){
    $itemCount=0;
}
else{
    $itemCount=count($_SESSION['cart']);
}
require './assets/serve/productSource.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products | O&amp;U Lighting</title>
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.min.css">
</head>
<body id="bodyOthers">
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding: 20px;">
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
      <li class="nav-item dropdown active">
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
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#signup" data-backdrop="static">Sign Up</a>
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
    <div id="chandelier">
	<h1>Chandeliers</h1>
	<div class="row">
        <?php getData('chandelier');?>
	</div>
        
    </div>
    <div id="clights">
	<h1>Ceiling Lights</h1>
    <div class="row">
        <?php getData('clights');?>
    </div>
	
    </div>
	<div id="flights"><h1>Flood Lights</h1>
    <div class="row">
        <?php getData('flights');?>
    </div>

	</div>
	<div id="bandt"><h1>Bulbs And Tubes</h1>
    <div class="row">
        <?php getData('bandt');?>
    </div>
	</div>
	<div id="zlights"><h1>Zoom Lights</h1>
    <div class="row">
        <?php getData('zlights');?>
    </div>

	</div>
	<div id="tlights"><h1>Track Lights</h1>
    <div class="row">
        <?php getData('tlights');?>
    </div>
    </div>
	<div id="slights"><h1>Spot Lights</h1>
    <div class="row">
        <?php getData('slights');?>
    </div>

	</div>
	<div id="strlights"><h1>Street Lights</h1>
    <div class="row">
        <?php getData('strlights');?>
    </div>

	</div>
	<div id="plights"><h1>Pool Lights</h1>
    <div class="row">
        <?php getData('plights');?>
    </div>

	</div>
	<div id="cob"><h1>COB Series</h1>
    <div class="row">
        <?php getData('cob');?>
    </div>

	</div>
	<div id="pnlights"><h1>Panel Lights</h1>
    <div class="row">
        <?php getData('pnlights');?>
    </div>
	</div>
	<div id="wlights"><h1>Wall Lights</h1>
    <div class="row">
        <?php getData('wlights');?>
    </div>
	</div>
	<div id="glights"><h1>Garden Lights</h1>
    <div class="row">
        <?php getData('glights');?>
    </div>
	</div>
	<div id="dlights"><h1>Down Lights</h1>
    <div class="row">
        <?php getData('dlights');?>
    </div>
	</div>
	<div id="leds"><h1>Led Strips</h1>
	<div class="row">
        <?php getData('leds');?>
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
<!--Login Modal-->
<div class="modal" id="signup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       	<div class="form-group">
       		<label>Full Name</label>
       		<input type="text" name="username" class="form-control" placeholder="Full name">
       		<div class="invalid-feedback"></div>
       	</div>
       	<div class="form-group">
       		<label>Email</label>
       		<input type="email" name="username" class="form-control" placeholder="Email">
       		<div class="invalid-feedback"></div>
       	</div>
       	<div class="form-group">
       		<label>Phone Number</label>
       		<input type="text" name="username" class="form-control" placeholder="Phone Number">
       		<div class="invalid-feedback"></div>
       	</div>
       	<div class="form-group">
       		<label>Username</label>
       		<input type="text" name="username" class="form-control" placeholder="Username">
       		<div class="invalid-feedback"></div>
       	</div>
       	<div class="form-group">
       		<label>Password</label>
       		<input type="password" name="password" class="form-control" placeholder="Password">
       		<div class="invalid-feedback"></div>
       	</div>
       	<div class="form-group">
       		<label>Retype password:</label>
       		<input type="password" name="password" class="form-control" placeholder="Retype password">
       		<div class="invalid-feedback"></div>
       	</div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" type="submit" class="btn btn-primary">Sign Up</button>
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