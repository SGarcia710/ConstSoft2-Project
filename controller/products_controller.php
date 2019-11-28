<?php
include("../model/products_model.php");
$products = new products_model();
$productsMatrix = $products->get_products();
