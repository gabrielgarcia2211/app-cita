<?php
   

  class adminControl extends Controller{
      
        

        function __construct(){
          parent::__construct();
        
        }
                    
        function render($ubicacion = null){
          $constr = "dashboard";
          if(isset($ubicacion[0])){
          $this->view->render($constr , $ubicacion[0]);
          }else{
          $this->view->render($constr, 'index');}
        }

    

      }
?>