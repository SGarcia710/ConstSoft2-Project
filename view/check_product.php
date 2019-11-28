<?php
$productName = $_POST['productName'];
$productBrand = $_POST['productBrand'];
$productQuantity = $_POST['productQuantity'];
$productDescription = $_POST['productDescription'];

function checkEmpty($productName, $productBrand, $productQuantity, $productDescription)
{
  $emptySpace = false;
  if ($productName == null || $productName == '') {
    $emptySpace = true;
  }
  if ($productBrand == null || $productBrand == '') {
    $emptySpace = true;
  }
  if ($productQuantity == null || $productQuantity == '') {
    $emptySpace = true;
  }
  if ($productDescription == null || $productDescription == '') {
    $emptySpace = true;
  }
  return $emptySpace;
}

if (checkEmpty($productName, $productBrand, $productQuantity, $productDescription) == false) {
  require_once("../model/create_products_model.php");
  header("Location: ./products.php");
} else {
  echo '<script type="text/javascript">
          alert("Todos los campos deben ser llenados.");
          window.location.href="./addProducts.php";
        </script>';
}
