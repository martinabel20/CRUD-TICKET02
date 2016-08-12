<h1 class="text-info text-center">Sistema de Gestión de Tickets</h1>


<a href="add_form.php" id="btn-new" class="btn btn-danger">Agregar Registro</a>
<br>
<br>

	<table id="mytable" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Description</th>
				<th>Nivel de Importancia</th>
				<th>Fecha</th>
				<th>Mantenimiento</th>
			</tr>
		</thead>
		<tbody>

			<?php 
			
			require "Brands.php";

			$brands = new Brands();

			$rows = $brands->getBrands();

			for ($i=0; $i <count($rows) ; $i++) { 
				
			?>
			<tr>
				<td><?php echo $rows[$i]->idticket ?></td>
				<td><?php echo $rows[$i]->nombre ?></td>
				<td><?php echo $rows[$i]->descripcion ?></td>
				<td><?php echo $rows[$i]->nivel ?></td>
				<td><?php echo $rows[$i]->fecha ?></td>
				
				<td>
					<a href="" id="<?php echo $rows[$i]->idticket ?>"  class="btn btn-danger btn-delete">Eliminar</a>
					<a href="edit_form.php?id=<?php echo $rows[$i]->idticket ?>" class="btn btn-success">Editar</a>
				
				</td>
			</tr>
			<?php 
		}
			?>
		</tbody>
	</table>

<script src="public/js/datatable/jquery.dataTables.min.js"></script>
<script src="public/js/datatable/dataTables.bootstrap.js"></script>

<script>
	
 $(function(){

 	  $('#mytable').dataTable(
 	  		{
            "language": {
                "url": "public/js/datatable/datatables.spanish.json"
            }
        }
 	  	);

 	  $(".btn-delete").on("click",function(){
        var _id =$(this).attr("id");
        console.log(_id)
 	  	if (confirm("Deseas eliminar este registro?")) {

 	  		window.location="action_delete.php?id="+_id;
 	  	};
 	  	return false;
 	  })

 	
 });

</script>