<?php 

class ajaxPublications{

    public function searchPublications($text){
        //VARIABLES
        $resultado = null;
        //CONECTION DATA BASE
        $modelo = new conexion();
        $conexion = $modelo -> post_conexion();
        $filtrer = '%'.$text.'%';
        //SQL CODE
        $sql="SELECT Pub.id_publications, Pub.title, Pub.date_publication, Pub.content, 			Pub.url_images, Pub.id_user,Pub.type_publications,
        Us.email, Us.id_user, Us.img_profile
        FROM publications Pub 
        INNER JOIN user Us ON Pub.id_user = Us.id_user WHERE title LIKE :filtrer OR content LIKE :filtrer_last ORDER BY date_publication DESC";
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
    //Publicaciones antiguas
    public function filterSearchDesc(){
            //VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
            $conexion = $modelo -> post_conexion();
            //SQL CODE
            $sql="SELECT Pub.id_publications, Pub.title, Pub.date_publication, Pub.content, 			Pub.url_images, Pub.id_user,Pub.type_publications,
            Us.email, Us.id_user, Us.img_profile
            FROM publications Pub 
            INNER JOIN user Us ON Pub.id_user = Us.id_user 
            ORDER BY Pub.date_publication DESC";
            $result=$conexion->prepare($sql);
			//PDO
			$result->execute();
			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
    }
    //Publicaciones Recientes
    public function filterSearchAsc(){
        //VARIABLES
        $resultado = null;
        //CONECTION DATA BASE
        $modelo = new conexion();
        $conexion = $modelo -> post_conexion();
        //SQL CODE
        $sql="SELECT Pub.id_publications, Pub.title, Pub.date_publication, Pub.content, 			Pub.url_images, Pub.id_user,Pub.type_publications,
        Us.email, Us.id_user, Us.img_profile
        FROM publications Pub 
        INNER JOIN user Us ON Pub.id_user = Us.id_user 
        ORDER BY Pub.date_publication ASC";
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