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

      function getCita(){
          $resp = $this->model->getCita();
          echo json_encode($resp);

      }

      function addCita($param = null){
          if($param==null)return;

          $codigo = '1151654';
          $title  = $param[0];
          $start = $param[1];
          $end = $param[1];
          $descripcion = $param[2];
          $color  = "#".$param[3];
          $text  = "#".$param[4];
          $resp = $this->model->addCita($codigo,$title,$descripcion,$color,$text,$start,$end);
          echo $resp;
      }

      function editCita($param = null){
          if($param==null)return;
          $id = $param[0];
          $codigo = '1151654';
          $title  = $param[1];
          $start = $param[2];
          $end = $param[2];
          $descripcion = $param[3];
          $color  = "#".$param[4];
          $text  = "#".$param[5];
          $resp = $this->model->editCita($id, $codigo,$title,$descripcion,$color,$text,$start,$end);
          echo $resp;
      }

      function deleteCita($param = null){
          if($param==null)return;
          $id = $param[0];
          $resp = $this->model->deleteCita($id);
          echo $resp;
      }




  }
?>