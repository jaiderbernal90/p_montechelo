<?php 
    class publications{
		//Funcion para consultar publicaciones
		public function showPublications(){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT Pub.id_publications, Pub.title, Pub.date_publication, Pub.content, 			Pub.url_images, Pub.id_user,Pub.type_publications,
				Us.email, Us.id_user, Us.img_profile
			FROM publications Pub 
			INNER JOIN user Us ON Pub.id_user = Us.id_user  ORDER BY date_publication DESC "; 
			$result=$conexion->prepare($sql);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//Cierre ver publications

        //Funcion para añadir noticias
		public function registerNotice($type_publications,$title,$date_publication,$content,$id_user,$level_importance,$state,$url_images,$id_area){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
            $sql="INSERT INTO publications(type_publications,title,date_publication,content,id_user,level_importance,state,id_area,url_images) VALUES(:type_publications,:title,:date_publication,:content,:id_user,:level_importance,:state,:id_area,:url_images)";
            
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":type_publications",$type_publications);
			$result->bindParam(":title",$title);
			$result->bindParam(":date_publication",$date_publication);
			$result->bindParam(":content",$content);
			$result->bindParam(":id_user",$id_user);
			$result->bindParam(":level_importance",$level_importance);
			$result->bindParam(":state",$state);
			$result->bindParam(":id_area",$id_area);
            $result->bindParam(":url_images",$url_images);		
            	
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL PUBLICAR','../../../view/admin/addNotice.php','error',3);
			}else {		
				$result->execute();
				modalAlert('PUBLICACION EXITOSA','../../../view/admin/publicaciones.php','success',3);
        	}
	  	}
		  //Cierra insertarPublication
		  //Funcion para añadir anuncio
		public function registerAnuncio($type_publications,$title,$date_publication,$content,$id_user,$level_importance,$state,$url_images,$id_area){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
            $sql="INSERT INTO publications(type_publications,title,date_publication,content,id_user,level_importance,state,id_area,url_images) VALUES(:type_publications,:title,:date_publication,:content,:id_user,:level_importance,:state,:id_area,:url_images)";
            
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":type_publications",$type_publications);
			$result->bindParam(":title",$title);
			$result->bindParam(":date_publication",$date_publication);
			$result->bindParam(":content",$content);
			$result->bindParam(":id_user",$id_user);
			$result->bindParam(":level_importance",$level_importance);
			$result->bindParam(":state",$state);
			$result->bindParam(":id_area",$id_area);
            $result->bindParam(":url_images",$url_images);		
            	
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL PUBLICAR','../../../view/admin/addAnuncio.php','error',3);
			}else {		
				$result->execute();
				modalAlert('PUBLICACION EXITOSA','../../../view/admin/anuncios.php','success',3);
        	}
	  	}
	  	//Cierra insertarPublication
    }
?>