<?php 


require "Brands.php";


$brand = new Brands();


$_post = $_POST;

$result = $brand->add_brands($_post);

if ($result) {
	  header("location:index.php");
}else{
	  echo "<h2>Error al registrar</h2>";
}
 

 ?>