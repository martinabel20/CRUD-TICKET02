<?php 

require "config.php";

class Brands 
{
	protected $data;
	
	function __construct()
	{
		$this->data=array();
		
	}

    public function getBrands(){
			$query = "SELECT * FROM `usuarios`LIMIT 50;";
			$result = mysql_query($query) ;
			while ($rows=mysql_fetch_object($result)) {
				$this->data[]=$rows;
			}
			return $this->data;

    }


     public function getBrandsById($id){
			$query = "SELECT * FROM `usuarios` WHERE idticket =$id  ;";
			$result = mysql_query($query) ;
			return mysql_fetch_object($result);
				
			
		 

    }
    
     public function add_brands($_post){
        
		$name = $_post['name'];

		$des = $_post['description'];

        $nivel = $_post['nivel'];



     	$query = "INSERT INTO usuarios(nombre,descripcion,nivel) values('$name','$des', '$nivel')";

     	if (mysql_query($query)) 
     		return true;
     	return false;
     }

    
     public function edit_brands($_post){
     	$id = $_post ['id'];
		$name = $_post ['name'];
		$desc = $_post ['description'];

        $nivel = $_post['nivel'];

     	$query = "UPDATE usuarios SET nombre='$name', descripcion='$desc', nivel='$nivel' WHERE idticket = $id";
      
     	if (mysql_query($query)) 
     		return true;
     	return false;
     }

     public function delete_brands($id){
 

     	$query = "DELETE FROM usuarios  WHERE idticket = $id";
      	echo $query;
     	if (mysql_query($query)) 
     		return true;
     	return false;
     }

 

}