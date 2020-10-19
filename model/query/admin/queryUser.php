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
		//Funcion para consultar usuarios
		public function showUsers(){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT * FROM user"; 
			$result=$conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//Cierre mirar usuarios

		//Funcion para añadir usuarios
		public function registerUser($name,$last_name,$type_id,$document,$estate,$gender,$email,$date_birth,$num_cel,$tel,$role,$charge,$salary,$deparment,$city,$address,$type_contract){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="INSERT INTO user(name,last_name,type_id,document,estate,gender,email,date_birth,num_cel,tel,role,charge,salary,deparment,city,address,type_contract) VALUES(:name,:last_name,:type_id,:document,:estate,:gender,:email,:date_birth,:num_cel,:tel,:role,:charge,:salary,:deparment,:city,:address,:type_contract)";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":name",$name);
			$result->bindParam(":last_name",$last_name);
			$result->bindParam(":type_id",$type_id);
			$result->bindParam(":document",$document);
			$result->bindParam(":estate",$estate);
			$result->bindParam(":gender",$gender);
			$result->bindParam(":email",$email);
			$result->bindParam(":date_birth",$date_birth);
			$result->bindParam(":num_cel",$num_cel);
			$result->bindParam(":tel",$tel);
			$result->bindParam(":role",$role);
			$result->bindParam(":charge",$charge);
			$result->bindParam(":salary",$salary);
			$result->bindParam(":deparment",$deparment);
			$result->bindParam(":city",$city);
			$result->bindParam(":address",$address);
			$result->bindParam(":type_contract",$type_contract);
			

			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL REGISTRAR','../../../view/admin/addUser.php','error',3);
			}else {		
				$result->execute();
				modalAlert('USUARIO REGISTRADO','../../../view/admin/users.php','success',3);
        	}
	  }
	  //Cierra insertarUsuarios
	}
?>