<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../model/query/admin/queryUser.php');
    require_once('../../model/conection/conexion.php');

    function loadUsers(){ //función para cargar usuarios
		//Invocamos una clase para realizar consultas del administrador
		$queries = new consultas();
		//Genera consulta en la tabla user para obtener los usuarios
		$result=$queries->showUsers();


		if (!isset($result)) {//En caso de haya un error en la variable resultado
			echo '<script>alert("NO HAY NADA");</script>';
			echo '<h2> NO HAY USUARIOS PARA MOSTRAR</h2>';
		}else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los usuarios
            echo    '<thead class="header-table">
                        <tr class="text-center">
                            <th class="th-sm">DOCUMENTO</th>
                            <th class="th-sm">NOMBRE</th>
                            <th class="th-sm">EMAIL</th>
                            <th class="th-sm">ROL</th>
                            <th class="th-sm">ACTIVO</th>
                            <th class="th-sm">VER</th>
                        </tr>
                    </thead>
                    <tbody>';
                
            foreach ($result as $f){
                echo    '<tr>
                                <td class="colum1">'.$f["document"].'</td>
                                <td class="colum2">'.ucfirst($f['name']).' '.ucfirst($f['last_name']).'</td>
                                <td class="colum3">'.$f["email"].'</td>
                                <td class="colum4">'.translationRole($f["role"]).'</td>
                                <td class="colum5">'.ucfirst($f["estate"]).'</td>
                                <td class="colum6 text-center"><a href="infoUser.php"><i class="fas fa-eye" title="Ver más"></i></a></td>
                            </tr>';
            }//end foreach
            echo '</tbody>';
		};//end if
	};//cierre función para cargar usuarios
?>