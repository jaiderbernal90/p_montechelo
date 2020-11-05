<?php 

    class queryAjax{
		//BUSCADOR
        public function userSearch($text){
           //VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
            $conexion = $modelo -> post_conexion();
            $filtrer = '%'.$text.'%';
            //SQL CODE
            $sql="SELECT * FROM user WHERE name LIKE :filtrer OR last_name LIKE :filtrer_last" ;
            $result=$conexion->prepare($sql);
            $result->bindParam(":filtrer",$filtrer);
			$result->bindParam(":filtrer_last",$filtrer);
			//PDO
			$result->execute();
			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//ASCENDENTES
        public function filterSearchAs(){
            //VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
            $conexion = $modelo -> post_conexion();
            //SQL CODE
            $sql="SELECT * FROM user ORDER BY name ASC" ;
            $result=$conexion->prepare($sql);
			//PDO
			$result->execute();
			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//DESCENDENTES 
        public function filterSearchDes(){
            //VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
            $conexion = $modelo -> post_conexion();
            //SQL CODE
            $sql="SELECT * FROM user ORDER BY name DESC" ;
            $result=$conexion->prepare($sql);
			//PDO
			$result->execute();
			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//ANTIGUOS 
		public function filterSearchRes(){
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//SQL CODE
			$sql="SELECT * FROM user ORDER BY fech_register DESC";
			$result=$conexion->prepare($sql);
			//PDO
			$result->execute();
			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}
		//RECIENTES 
		public function filterSearchAnt(){
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//SQL CODE
			$sql="SELECT * FROM user ORDER BY fech_register ASC" ;
			$result=$conexion->prepare($sql);
			//PDO
			$result->execute();
			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
    }


?>