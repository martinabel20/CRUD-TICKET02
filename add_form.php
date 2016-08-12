
<?php 

include "header.php";

 ?>

<div class="container">
 
 <form id="frm-add-brand" action="action_add.php" method="POST" role="form">
 	<legend>Agregar usuario</legend>
 
 	<div class="form-group">
 		<label for="">Nombre</label>
 		<input type="text"   class="form-control" name="name" id="name" placeholder="Nombre">
 	</div>
		
 	<div class="form-group">
 		<label for="">Descripcion</label>
		<textarea   name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
 	</div>
  <div class="form-group">
    <label for="nivel">Nivel de Importancia</label>
  <select name="nivel" id="nivel" class="form-control">
  <option value="urgente">Urgente</option>
        <option value="medio">Medio</option>
        <option value="bajo">Bajo</option>
  </select>
  </div> 	
 
 	<button type="submit" id="btn-add-brand" class="btn btn-primary">Registrar</button><br>
  <a href="index.php"><h1>Volver</h1></a>
 </form>
</div>



<script type="text/javascript">
  
  $(function(){
   
  	$("#btn-add-brand").on("click",function(){
       
       var _form = $("#frm-add-brand");
       

       if (_form.find("#name").val()==='') {

       	  alert("Por favor ingresa el nombre");
       	  return false;
       };
     
  	})


  })


</script>


<?php require "footer.php" ?>