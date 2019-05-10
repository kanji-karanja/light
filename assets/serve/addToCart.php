<?php
session_start();
$itemToAdd = $_GET['itemToAdd'];
$itemQuantity = $_GET['itemQuantity'];
array_push($_SESSION['cart'], array("$itemToAdd","$itemQuantity"));
echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Item has been added to your cart.
</div>';
/*
for ($row = 0; $row <count($_SESSION['cart']) ; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 2; $col++) {
        echo "<li>".$_SESSION['cart'][$row][$col]."</li>";
    }
    echo "</ul>";
}
*/
?>