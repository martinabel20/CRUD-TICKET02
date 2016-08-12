<?php 
require "Brands.php";

$_post = $_POST;


$brand = new Brands();

$result = $brand->edit_brands($_post);

if ($result) 
	header("location:index.php");
else
	echo "<h1>Error</h1>";




 ?>