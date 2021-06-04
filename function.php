<?php 

require 'database/DBController.php'; // mysqli Connection
require 'database/Product.php'; // product class


$db = new DBController(); // DBController Object


$product = new Product($db);  // product object
