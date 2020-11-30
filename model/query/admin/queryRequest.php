<?php  
    class request{
        //Funcion para añadir solicitud
        public function registerSolicitud($type, $date_request, $state, $content, $id_user){
            //CONECTION DATA BASE
            $modelo=new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL		
            $sql="INSERT INTO request(type, date_request, state, content, id_user) VALUES(:type, :date_request, :state, :content, :id_user)";
            
            // PDO
            $result = $conexion->prepare($sql);
            $result->bindParam(":type",$type);
            $result->bindParam(":date_request",$date_request);
            $result->bindParam(":state",$state);
            $result->bindParam(":content",$content);
            $result->bindParam(":id_user",$id_user);		
                
            //QUERY RESULT
            if (!$result){
                modalAlert('ERROR AL SOLICITAR','../../../view/admin/addSolicitud.php','error',3);
            }else {		
                $result->execute();
                modalAlert('SOLICITUD EXITOSA','../../../view/admin/solicitudes.php','success',3);
            }
        }
        //Cierra añadir Solicitud

        //Funcion para consultar solicitudes
        public function showSolicitudes($id){
            //Toma el resultado de la consulta
            $resultado=null;
            //CONECTION DATA BASE
            $modelo= new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL
            $sql="SELECT Re.id_request, Re.type, Re.date_request, Re.state, Re.content, Re.id_user,
                Us.email, Us.id_user, Us.img_profile
            FROM request Re
            INNER JOIN user Us ON Re.id_user = Us.id_user WHERE Re.id_user = :id ORDER BY date_request DESC "; 
            $result=$conexion->prepare($sql);
            //PDO
            $result->bindParam(":id",$id);		
            $result->execute();

            //Cargar el resultado a la variable resultado
            while ($f=$result->fetch()) {
                $resultado[]=$f;
            }

            return $resultado;
        }
        //Cierre ver solicitudes

        //Funcion para consultar solicitudes
        public function showSolicitudesAll(){
            //Toma el resultado de la consulta
            $resultado=null;
            //CONECTION DATA BASE
            $modelo= new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL
            $sql="SELECT Re.id_request, Re.type, Re.date_request, Re.state, Re.content, Re.id_user,Re.id_user_response,
                Us.email, Us.id_user, Us.img_profile
            FROM request Re
            INNER JOIN user Us ON Re.id_user = Us.id_user ORDER BY date_request DESC"; 
            $result=$conexion->prepare($sql);
            //PDO
            $result->bindParam(":id",$id);		
            $result->execute();

            //Cargar el resultado a la variable resultado
            while ($f=$result->fetch()) {
                $resultado[]=$f;
            }

            return $resultado;
        }
        //Cierre ver solicitudes

        public function solicitudInfo($id){
            //VARIABLES
            $resultado = null;
            //CONECTION DATA BASE
            $modelo = new conexion();
            $conexion = $modelo -> post_conexion();
            //QUERY SQL
            $sql = "SELECT Re.id_request, Re.type, Re.date_request, Re.state, Re.content, Re.id_user, Re.id_user_response, Re.response,
            Us.email, Us.id_user
            FROM request Re
            INNER JOIN user Us ON Re.id_user = Us.id_user WHERE id_request = :id";
            //PDO
            $result = $conexion -> prepare($sql);
            $result->bindParam(':id',$id);
            $result -> execute();

            while ($f=$result->fetch()) {
                $resultado[]=$f;
            }
            return $resultado;
        }
        public function userResponse($id){
            //VARIABLES
            $resultado = null;
            //CONECTION DATA BASE
            $modelo = new conexion();
            $conexion = $modelo -> post_conexion();
            //QUERY SQL
            $sql = "SELECT email FROM user WHERE id_user = :id";
            //PDO
            $result = $conexion -> prepare($sql);
            $result->bindParam(':id',$id);
            $result -> execute();

            while ($f=$result->fetch()) {
                $resultado[]=$f;
            }
            return $resultado;
        }

        public function updateSolicitud($id_request, $type, $date_request, $state, $content, $id_user){
            //CONECTION DATA BASE
            $modelo=new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL		
            $sql="UPDATE request SET type=:type, date_request=:date_request, state=:state, content=:content, id_user=:id_user WHERE id_request=:id_request";
            
            // PDO
            $result = $conexion->prepare($sql);
            $result->bindParam(":id_request",$id_request);
            $result->bindParam(":type",$type);
            $result->bindParam(":date_request",$date_request);
            $result->bindParam(":state",$state);
            $result->bindParam(":content",$content);
            $result->bindParam(":id_user",$id_user);		
                
            //QUERY RESULT
            if (!$result){
                modalAlert('ERROR AL ACTUALIZACION','../../../view/admin/addSolicitud.php','error',3);
            }else {		
                $result->execute();
                    modalAlert('ACTUALIZACION EXITOSA','../../../view/admin/solicitudes.php','success',3);
            }
        }

        public function responseSolicitud($id_request, $date_request, $state, $response, $id_user_response){
            //CONECTION DATA BASE
            $modelo=new conexion();
            $conexion=$modelo->post_conexion();
            //QUERY SQL		
            $sql="UPDATE request SET date_request=:date_request, state=:state, response=:response, id_user_response=:id_user_response WHERE id_request=:id_request";
            
            // PDO
            $result = $conexion->prepare($sql);
            $result->bindParam(":id_request",$id_request);
            $result->bindParam(":date_request",$date_request);
            $result->bindParam(":state",$state);
            $result->bindParam(":response",$response);
            $result->bindParam(":id_user_response",$id_user_response);		
                
            //QUERY RESULT
            if (!$result){
                modalAlert('ERROR AL RESPONDER','../../../view/admin/addSolicitud.php','error',3);
            }else {		
                $result->execute();
                modalAlert('RESPUESTA EXITOSA','../../../view/admin/solicitudesAdmin.php','success',3);
            }
        }

    }
?>