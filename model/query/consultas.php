<?php  
	class consultas{
		public function email(){
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT DISTINCT email FROM usuarios WHERE email = :email";
			//PDO
			$result = $conexion -> prepare($sql);
			$result -> bindParam(":email", $_SESSION['email']);
			//QUERY RESULT
			if($result){
				$result -> execute();
				//SAVE RESULTS 
				while ($f = $result -> fetch()){
					$resultado[] = $f;
				}
				//RETURN RESULTS
				return $resultado;
			}else{
				echo "<script>alert('Error')</script>";
			}
		}
	}
?>