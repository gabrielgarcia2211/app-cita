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

        function validarDatos($data){
          echo $data[0];
          return;
        }

      }
?>