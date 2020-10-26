<?php  
	class consultas{
		public function userInfo($id){
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM user WHERE id_user = :id";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':id',$id);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}
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
	  public function updateUser($name,$last_name,$type_id,$document,$estate,$gender,$email,$date_birth,$num_cel,$tel,$role,$charge,$salary,$deparment,$city,$address,$type_contract){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE user SET name=:name, last_name=:last_name, type_id=:type_id, document=:document, estate=:estate, gender=:gender, email=:email, date_birth=:date_birth, num_cel=:num_cel, tel=:tel, role=:role, charge=:charge, salary=:salary, deparment=:deparment, city=:city, address=:address, type_contract=:type_contract WHERE document=:document";

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
				
				echo "<script>alert('ERROR AL MODIFICAR')</script>";
				echo "<script>location.href='../../../view/admin/addUser.php'</script>";
			}else {
				
				$result->execute();
				echo "<script>alert('ACTUALIZACION EXITOSA')</script>";
				echo "<script>location.href='../../../view/admin/users.php'</script>";
			}
		}//Cierra insertarUsuarios
		//Ver pefil
		public function user($email){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql = "SELECT * FROM user WHERE email = :email"; 
			$result=$conexion->prepare($sql);
			$result->bindParam(":email",$email);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//./ver perfil
		public function updateInfo($email,$num_cel,$gender,$city,$deparment,$address,$charge){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE user SET email=:email, num_cel=:num_cel, gender=:gender, city=:city, deparment=:deparment, address=:address, charge=:charge WHERE email=:email";

			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":email",$email);
			$result->bindParam(":num_cel",$num_cel);
			$result->bindParam(":gender",$gender);
			$result->bindParam(":city",$city);
			$result->bindParam(":deparment",$deparment);
			$result->bindParam(":address",$address);
			$result->bindParam(":charge",$charge);

			//QUERY RESULT
			if (!$result){
				
				modalAlert('ERROR AL MODIFICAR' , '../../../view/admin/perfil.php' , 'warning' , '3');
			}else {
				
				$result->execute();
				modalAlert('ACTUALIZACION EXITOSA' , '../../../view/admin/perfil.php' , 'success' , '3');

			}
		}//Cierra insertarUsuarios
		
		public function updatePass($password,$email){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="UPDATE user SET password=:password WHERE email=:email";
	
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":password",$password);
			$result->bindParam(":email",$email);
			
	
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL MODIFICAR','../../../view/admin/updatePass.php','error',3);
			}else {
				
				$result->execute();
				session_destroy();
				modalAlert('CONTRASEÑA MODIFICADA EXITOSAMENTE. INICIE SESION NUEVAMENTE','../../../index.php','success',3);
			}
		}//Cierra actualizar contraseña
	}
?>