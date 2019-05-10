<?php
session_start();
if(count($_SESSION['cart'])==0){
    $itemCount=0;
}
else{
    $itemCount=count($_SESSION['cart']);
}
$amount = 0;
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
  <a class="navbar-brand text-primary" href="#" >O&amp;U Lighting</a>
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
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">

            <li class="nav-item active">
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
    <?php
    if($itemCount==0){
        echo '<h1>Cart</h1>
<div class="card text-white bg-warning mb-3">
  <div class="card-header">Nothing to check out.</div>
  <div class="card-body">
    <h4 class="card-title">Your cart is empty!</h4>
    <p class="card-text">There is nothing in your cart. Try some shopping around in our site to add items here, then try again checking out the items</p>
  </div>
</div>
</div>';
    }
    else{

        require './assets/serve/credentials.php';
        echo '
<div class="container">
    <h3 style="float: right;"><i class="fa fa-trash text-danger" onclick="removeItems()"></i></h3>
  <h1>Cart</h1>
    <div id="deleteallItemAlert"></div>
  <ul class="list-group bg-primary">';
        for ($row = 0; $row < count($_SESSION['cart']); $row++) {
                //$sqlitem = new mysqli("localhost","root","","light");
                $objitem=$_SESSION['cart'][$row][0];
                $objnum = $_SESSION['cart'][$row][1];
                $sqlitem = "SELECT * FROM products where id = '$objitem'";
                $resultitem =$conn->query($sqlitem);
                if($resultitem->num_rows>0){
                 while ($rowitem = $resultitem->fetch_assoc()){
                     echo '<li class="list-group-item d-flex justify-content-between align-items-center">
    '.$rowitem["name"].' '.$rowitem["model"].'<span class="badge badge-primary">KES. '.$rowitem["price"].'</span>
    <span class="badge badge-success badge-pill">'.$objnum.'</span><i class="fa fa-trash text-danger"></i>
  </li>';
                     $amount = $amount +($objnum*$rowitem["price"]);
                 }
                }
        }
        echo'
</ul>
<div class="row">
  <div class="col-sm-4">
    
  </div>
  <div class="col-sm-4">
    
  </div>
  <div class="col-sm-4">
    <br>
    <h2>Total:</h2>
    <hr>
    <p class="lead">KES '.$amount.'</p>
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    
  </div>
  <div class="col-sm-4">
    
  </div>
  <div class="col-sm-4">
    <br>
    <button type="button" class="btn btn-primary">Check Out items</button>
    <a href="products.php"><button type="button" class="btn btn-secondary">Continue Shopping</button></a>
  </div>
  
</div>
</div>
';
    }
    ?>
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
              <li><a href="">Facebook</a></li>
              <li><a href="">Twitter</a></li>
            </ul>
            <p>&copy; <?php echo date('Y');?> Onwards and Upwards Lighting | Web by: <a href="http://www.cryosoft.co.ke">Cryosoft Corporation</a></p>
          </div>
        </div>

      </footer>
</div>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <script>
        function removeItems() {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("deleteallItemAlert").innerHTML=xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET.html","./assets/serve/delall.php",true);
            xmlhttp.send();
            document.location.href='cart.php';
        }
    </script>
</body>
</html>
