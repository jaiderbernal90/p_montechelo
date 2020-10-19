<?php  
   require_once('../../controller/modales/modal.php');

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
				modalAlertLogin('Error','../../index.php','error',2);
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
							modalAlertLogin('BIENVENIDO ADMINISTRADOR', '../../view/admin/home.php','success',2);
						}
						if($f['role'] == 2){
							modalAlertLogin('BIENVENIDO LÍDER', '../../view/lider/home.php','success',2);
                        }
                        if($f['role'] == 3){
							modalAlertLogin('BIENVENIDO COLABORADOR', '../../view/colaborador/home.php','success',2);
						}
					}else{
						modalAlertLogin('USUARIO INACTIVO','../../index.php','warning',2);
					}
				}else{
					modalAlertLogin('CONTRASEÑA INCORRECTA','../../index.php','error',2);
				}
			}else{
				modalAlertLogin('USUARIO NO REGISTRADO','../../index.php','error',2);
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
			//MODAL AND REDIRECTION
			modalAlertLogin('SESIÓN TERMINADA','../../index.php','success',2);
		}
	}
	
?>