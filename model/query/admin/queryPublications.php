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
			INNER JOIN user Us ON Pub.id_user = Us.id_user ORDER BY date_publication DESC "; 
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
		//Funcion para consultar publicaciones
		public function showPublicationsHome(){
			//Toma el resultado de la consulta
			$resultado=null;
			$type=1;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT * FROM publications WHERE type_publications = :type_pub  ORDER BY date_publication DESC LIMIT 3 "; 
			$result=$conexion->prepare($sql);
			$result->bindParam(":type_pub",$type);
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}

			return $resultado;
		}
		//Cierre ver publications
		//Funcion para consultar anucios
		public function showAnunciosHome(){
			//Toma el resultado de la consulta
			$resultado=null;
			$type=2;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT * FROM publications WHERE type_publications = :type_pub  ORDER BY date_publication DESC LIMIT 5"; 
			$result=$conexion->prepare($sql);
			$result->bindParam(":type_pub",$type);
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
		//Funcion para consultar Likes
		public function showLikes($id_publications){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT * FROM publications INNER JOIN likes ON publications.id_publications = likes.id_publications WHERE likes.id_publications = :id_publications"; 
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_publications",$id_publications);	
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			if($result){
				$resultado = $result->rowCount();
			}

			return $resultado;
		}
		//Cierre
		//Funcion para consultar Likes
		public function showComments($id_publications){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT * FROM publications INNER JOIN comments ON publications.id_publications = comments.id_publications WHERE comments.id_publications = :id_publications"; 
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_publications",$id_publications);	
			//PDO
			$result->execute();

			//Cargar el resultado a la variable resultado
			if($result){
				$resultado = $result->rowCount();
			}

			return $resultado;
		}
		//Muestra comentarios de una publicacion en especifico
		public function searchComments($id){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT Com.id ,Com.id_publications, Com.id_user,Com.date, Com.content, Us.id_user,Us.name,Us.last_name,Us.email,Us.img_profile FROM comments Com INNER JOIN user Us ON Com.id_user = Us.id_user WHERE id_publications = :id_publications"; 
			$result=$conexion->prepare($sql);
			//PDO
			$result->bindParam(":id_publications",$id);
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}
		//Funcion para consultar likes de una publicacion
		public function showAllLikes($id){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT Lik.id_user, Lik.id_publications,Lik.date, Pub.id_publications,Us.id_user,Us.name,Us.last_name,Us.img_profile FROM likes Lik INNER JOIN user Us ON Us.id_user = Lik.id_user INNER JOIN publications Pub ON Pub.id_publications = Lik.id_publications WHERE Lik.id_publications = :id_publications"; 
			$result=$conexion->prepare($sql);
			//PDO
			$result->bindParam(":id_publications",$id);
			$result->execute();

			//Cargar el resultado a la variable resultado
			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}
		//Cierre ver publications

		//Funcion para añadir likes
		public function searchLike($id_user,$id_publications){
			$resultado = null;
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
			$sql="SELECT * FROM `likes` WHERE id_user = :id_user AND id_publications = :id_publications";
			
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_user",$id_user);
			$result->bindParam(":id_publications",$id_publications);
			
			$result->execute();
			//QUERY RESULT
			if ($result){	
				$resultado = $result->rowCount();
			}
			return $resultado;
		}

		//Funcion para añadir likes
		public function addLike($id_user,$id_publications, $date){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
			$sql="INSERT INTO likes (id_user,id_publications,date) VALUES(:id_user,:id_publications,:date)";
			
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_user",$id_user);
			$result->bindParam(":id_publications",$id_publications);
			$result->bindParam(":date",$date);
				
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL DAR LIKE','../../../view/admin/anuncios.php','error',3);
			}else {		
				$result->execute();
			}
		}
		//Funcion para borrar likes
		public function deleteLike($id_user,$id_publications){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
			$sql="DELETE FROM likes WHERE id_publications = :id_publications AND id_user = :id_user";
			
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_user",$id_user);
			$result->bindParam(":id_publications",$id_publications);
				
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL DAR LIKE','../../../view/admin/anuncios.php','error',3);
			}else {		
				$result->execute();
			}
		}
		public function noticeInfo($id){
			//VARIABLES
			$resultado = null;
			//CONECTION DATA BASE
			$modelo = new conexion();
			$conexion = $modelo -> post_conexion();
			//QUERY SQL
			$sql = "SELECT Pub.id_publications, Pub.title, Pub.date_publication, Pub.content,Pub.url_images, Pub.id_user,Pub.type_publications,Pub.level_importance,Pub.state ,Us.email, Us.id_user, Us.img_profile FROM publications Pub INNER JOIN user Us ON Pub.id_user = Us.id_user WHERE Pub.id_publications = :id";
			//PDO
			$result = $conexion -> prepare($sql);
			$result->bindParam(':id',$id);
			$result -> execute();

			while ($f=$result->fetch()) {
				$resultado[]=$f;
			}
			return $resultado;
		}
		//Funcion para consultar usuarios
		public function numPub(){
			//Toma el resultado de la consulta
			$resultado=null;
			//CONECTION DATA BASE
			$modelo= new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL
			$sql="SELECT * FROM publications"; 
			$result=$conexion->prepare($sql);
			//PDO
			$result->execute();

			if($result){
				$resultado = $result->rowCount();
			}

			return $resultado;
		}
		//UPDATE NOTICE
		public function updateNotice($id_publications,$type_publications,$title,$content,$id_user,$level_importance,$state,$url_images,$id_area,$url){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
            $sql="UPDATE publications SET type_publications=:type_publications, title=:title, content=:content, id_user=:id_user, level_importance=:level_importance, state=:state, id_area=:id_area, url_images=:url_images WHERE id_publications=:id_publications";
            
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_publications",$id_publications);
			$result->bindParam(":type_publications",$type_publications);
			$result->bindParam(":title",$title);
			$result->bindParam(":content",$content);
			$result->bindParam(":id_user",$id_user);
			$result->bindParam(":level_importance",$level_importance);
			$result->bindParam(":state",$state);
			$result->bindParam(":id_area",$id_area);
            $result->bindParam(":url_images",$url_images);		
            	
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL ACTUALIZACION','../../../view/admin/addNotice.php','error',3);
			}else {		
				$result->execute();
				modalAlert('ACTUALIZACION EXITOSA','../../../view/admin/'.$url.'','success',3);
        	}
		  }
		  
		//add COMMENT
		public function addCommentary($text,$id_publications,$user,$date){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
			$sql="INSERT INTO comments (id_user,id_publications,date,content) VALUES(:id_user,:id_publications,:date,:content)";
			
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id_user",$user);
			$result->bindParam(":id_publications",$id_publications);
			$result->bindParam(":date",$date);
			$result->bindParam(":content",$text);

				
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL INSERTAR EL COMENTARIO','../../../view/admin/anuncios.php','error',3);
			}else {		
				$result->execute();
			}
		}
		//DELETE COMMENT
		public function deleteComments($id){
			//CONECTION DATA BASE
			$modelo=new conexion();
			$conexion=$modelo->post_conexion();
			//QUERY SQL		
			$sql="DELETE FROM comments WHERE id=:id";	
			// PDO
			$result = $conexion->prepare($sql);
			$result->bindParam(":id",$id);
			//QUERY RESULT
			if (!$result){
				modalAlert('ERROR AL BORRAR COMENTARIO','../../../view/admin/anuncios.php','error',3);
			}else {		
				$result->execute();
			}
	
		}
    }
?>