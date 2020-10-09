<?php  
	class validarSesion{
		//FUNCTION LOGIN
		public function iniciarSesion($email, $password){
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//SQL QUERY
			$sql = "SELECT * FROM user WHERE email = :email";
			//PDO
			$result = $conexion -> prepare($sql);
			$result -> bindParam(":email", $email);
			//QUERY RESULT
			if($result){
				$result -> execute();
			}else{
				echo "<script>alert('Error')</script>";
			}
			//VALIDATION USER
			if($f = $result -> fetch()){
				if($password == $f['password']){
					session_start();

					$_SESSION['email'] = $f['email'];
					$_SESSION['name'] = $f['name'];
					$_SESSION['last_name'] = $f['last_name'];
					$_SESSION['password'] = $f['password'];
					$_SESSION['role'] = $f['role'];
					$_SESSION['estate'] = $f['estate'];

					$_SESSION['autenticado'] = "Activo";

					if($f['estate'] == "activo"){
						//REDIRECTION HOME
						if($f['role'] == 1){
							echo "<script>alert('BIENVENID@ ADMINISTRADOR')</script>";
							echo "<script>location.href='../../view/admin/home.php'</script>";
						}
						if($f['role'] == 2){
							echo "<script>alert('BIENVENID@ LIDER')</script>";
							echo "<script>location.href='../../view/lider/home.php'</script>";
                        }
                        if($f['role'] == 3){
							echo "<script>alert('BIENVENID@ COLABORADOR')</script>";
							echo "<script>location.href='../../view/colaborador/home.php'</script>";
						}
					}else{
						echo "<script>alert('USUARIO INACTIVO')</script>";
						echo "<script>location.href='../../index.php'</script>";
					}
				}else{
					echo "<script>alert('CONTRASEÑA INCORRECTA')</script>";
					echo "<script>location.href='../../index.php'</script>";
				}
			}else{
				echo "<script>alert('USUARIO NO REGISTRADO')</script>";
				echo "<script>location.href='../../index.php'</script>";
			}
		}
		//FUNCTION LOGOUT
		public function cerrarSesion(){
			//CONECTION DATABASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//EXIT THE SESSION 
			session_start();
			session_destroy();
			//MESSAGE AND REDIRECTION
			echo "<script>alert('SESION TERMINADA')</script>";
			echo "<script>location.href='../../index.php'</script>";
		}
	}
	
?>