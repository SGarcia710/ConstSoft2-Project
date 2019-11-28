<?php
include("connect.php");
$base = connect::connection();

try {
  $sql = "INSERT INTO products VALUES (null, :name_prd, :brand_prd, :qty_prd, :desc_prd)";
  $result = $base->prepare($sql);
  $result->execute(array(":name_prd" => $productName, ":brand_prd" => $productBrand, ":qty_prd" => $productQuantity, ":desc_prd" => $productDescription));
} catch (Exception $e) {
  if ($e->getcode() == 23000) {
    echo '<script type="text/javascript">
    				alert("El producto ya existe.");
    				window.location.href="../view/addProducts.php";
    			</script>';
  }
}
