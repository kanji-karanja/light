<?php
/**
 * Created by PhpStorm.
 * User: Karim K. Kanji
 * Date: 09/05/2018
 * Time: 22:06
 */
session_start();
$_SESSION['cart']= array();
echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Your cart has been emptied!
</div>';
?>