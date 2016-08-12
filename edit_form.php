<?php 

include "header.php";

 ?>

<?php 
 require 'Brands.php';

$_id = $_GET['id'];


$brand = new Brands();

$result = $brand->getBrandsById($_id);
 


?>

<div class="container">
 
 <form action="action_edit.php" method="POST" role="form">
 	<legend>Actualizar Usuario</legend>
 	<input  type="hidden" name ="id" id="id" value ="<?php echo $result->idticket ?>">
 	<div class="form-group">
 		<label for="">Nombre</label>
 		<input type="text" class="form-control" name="name" id="name" value ="<?php  echo $result->nombre ?>" placeholder="Nombre">
 	</div>
		
 	<div class="form-group">
 		<label for="">Descripcion</label>
		<textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php  echo $result->descripcion ?></textarea>
 	</div> 	
 	<div class="form-group">
    <label for="nivel">Nivel de Importancia</label>
  <select name="nivel" id="nivel" class="form-control">
  <option value="urgente">Urgente</option>
        <option value="medio">Medio</option>
        <option value="bajo">Bajo</option>
  </select>
  </div>  	
 
 	<button type="submit" class="btn btn-primary">Registrar</button><br/>
 	<a href="index.php"><h1>Volver</h1></a>
 </form>

</div>



<?php require "footer.php" ?>