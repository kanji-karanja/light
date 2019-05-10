<?php
session_start();
if($_SESSION['cart']==null) {
    $_SESSION['cart'] = array();
}
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
    <title>Products | O&amp;U Lighting</title>
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding: 20px;">
    <div class="container">
        <a class="navbar-brand text-primary"href="#">O&amp;U Lighting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home </a>
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
<div class="container-fluid">
    <aside class="float-icons">
        <button type="button" class="btn btn-primary"><i class="fa fa-facebook-f" style="padding-right: 5px;"></i></button><br>
        <button type="button" class="btn btn-primary" style="margin-top: 5px;"><i class="fa fa-twitter"></i></button>
    </aside>
    <center>
    <div class="owl-carousel">
        <?php
        $i = 10;
        while($i>0){
            $j=rand(1,28);
            echo '<div style="height:580px;z-index: -1;"><img src="assets/img/'.$j.'.jpg"><div style="position:absolute;left:0%;top:50%;width:100%;"><h1 style="font-size:18px; font-size: 50px; font-weight: 500; color:white">Item Description</h1> <br><a href="products.php"><button type="button" class="btn btn-primary btn-lg">Order Now</button></a></div></div>';
            $i--;
        }
        ?>
    </div>
    </center>
</div>
<div class="container" style="margin-bottom: 100px;">
    <center>
    <h1 class="text-primary">
        Lighting your home and the world one dream at a time.
    </h1>
    <h3>We have all solutions for your home and business.</h3>
    </center>
</div>
<div class="container">
    <center><h1>Hottest Products of the day</h1></center><br>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">View Details</a>
                    <a href="#" class="card-link"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">View Details</a>
                    <a href="#" class="card-link"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">View Details</a>
                    <a href="#" class="card-link"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    <center><a href="products.php"><button type="button" class="btn btn-primary btn-lg">View more products</button></a></center>
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
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
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
            <form  method="post" action="">
            <div class="modal-body" id="signUp">
                <div id="signDetails"></div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Full name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input required type="text" name="phonenumber" class="form-control" placeholder="Phone Number">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input required type="password" name="password" id = "password" class="form-control" placeholder="Password">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label>Retype password:</label>
                        <input required type="password" name="retypepassword" id="retypePassword" class="form-control" placeholder="Retype password">
                        <div class="invalid-feedback"></div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" type="submit" class="btn btn-primary" onclick="signUser()">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
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
<script type="text/javascript" src="./assets/js/sign-up.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            autoplay:true,
            autoplayTimeout:8000,
            lazyLoad:true,
            items:1,
            loop:true,
            center:true,
            margin:10
        });
    });
</script>
</body>
</html>