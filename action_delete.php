<?php 
 
require "Brands.php";

$_id = $_GET['id'];

$brand = new Brands();

$result = $brand->delete_brands($_id);
 
if ($result) {
	header("location:index.php");
}else{
	echo "<h1>ERROR</H1>";
}


 