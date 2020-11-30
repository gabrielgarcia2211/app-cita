<?php
   

  class loginControl extends Controller{
      
        

        function __construct(){
          parent::__construct();
        
        }
                    
        function render($ubicacion = null){
          $constr = "login";
          if(isset($ubicacion[0])){
          $this->view->render($constr , $ubicacion[0]);
          }else{
           $this->view->render($constr, 'index');}
        }

        function validarDatos($param){
            if($param==null)return;
            $valor = array();
            $codigo = $param[0];
            $_SESSION["codigo"] = $codigo;
            $documento = $param[1];
            $contrasena = $param[2];

            $valor[0] = $this->model->traerRol($_SESSION["codigo"]);
            $valor[1] = $this->model->verificarUser($codigo, $documento, $contrasena);
            echo json_encode($valor);
        }

      function cerrarSesionEstudiante(){
          unset($_SESSION['codigo']);
          session_destroy();
          header('Location: ' . constant('URL'). 'loginControl');
      }




  }
?>