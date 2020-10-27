<?php 
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/ajax/user.php');
require_once('../../../model/query/admin/queryUser.php');
require_once('../../translation/translation-User.php');
require_once('../../translation/roles.php');

function searchUsers(){
      $text = $_POST['select'];
      $repositorios = null;

      if(strtolower($text) === 'asc'){
        $queries = new queryAjax();
        //Genera consulta para buscar lo que el usuario escribio en el input
        $result=$queries->filterSearchAs();
      }else if(strtolower($text) === 'desc'){
        $queries = new queryAjax();
        //Genera consulta para buscar lo que el usuario escribio en el input
        $result=$queries->filterSearchDes();
      }

      if (!isset($result)) {
        //En caso de haya un error en la variable resultado
        $repositorios = '<div class="w-100 p-0 m-0 d-flex">
                            <h2 class="m-auto text-primary p-5 font-bold">UPSS.. No hay resultados</h2>
                        </div>';
      }else{
        foreach ($result as $f){
            $repositorios .= '<div class="row w-100 m-0 p-0 pt-5">
                            <div class="col-12 p-0">
                                <main class="cont-card-user shadow">
                                    <div class="mask d-flex">
                                        <header class="img-cont">
                                            <a title="Ver más" onclick="viewRepositorio(this)" id="'.$f["id_user"].'"><img src="../../img/'.$f['img_profile'].'" alt="" class="avatar"></a>
                                        </header>
                                        <div class="text-center title-card-rep" id="myDIV">
                                            <a title="Ver más" onclick="viewRepositorio(this)" id="'.$f["id_user"].'" class="m-auto"><i onclick="viewRepositorio(this)" id="'.$f["id_user"].'" class="fas fa-plus hov fa-2x"></i></a>
                                            <h3>'.strtoupper($f['name']).' '.strtoupper($f['last_name']).'</h3>
                                            <span>'.translationRole($f["role"]).'</span>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>';
        }//end foreach
    };
    return $repositorios;
}

echo searchUsers();
?>