<?php

// Call model
require_once "models/productsModel.php";
$products = Product::getAllProducts();

// Call the view
require_once "views/productsView.php";





