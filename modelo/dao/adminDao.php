<?php


class adminDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }
    public function getCita(){
            try{
                $query = $this->db->connect()->prepare('SELECT * FROM cita');
                $query->execute();
                $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                return $e->getMessage();
            }
    }

    public function addCita($codigo, $title, $descripcion, $color, $text, $start, $end){
        $query = $this->db->connect()->prepare("INSERT INTO cita(codigo, title, descripcion, color, textColor, start, end) VALUES (:codigo,:title,:descripcion,:color,:textColor, :start, :end )");
        try {
            $query->execute([
                ':codigo' =>  $codigo ,
                ':title' => $title,
                ':descripcion' => $descripcion ,
                ':color' => $color ,
                ':textColor' => $text,
                ':start' => $start,
                ':end' => $end
            ]);
            $resultado = $query->fetchAll();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function editCita($id,$codigo, $title, $descripcion, $color, $text, $start, $end){
        try{
            $query = $this->db->connect()->prepare('UPDATE cita SET codigo = :codigo, title=:title , descripcion= :descripcion , color= :color , start= :start , textColor= :textColor, end= :end WHERE id=:id');
            $query->execute([
                ':id' =>  $id ,
                ':codigo' =>  $codigo ,
                ':title' => $title,
                ':descripcion' => $descripcion ,
                ':color' => $color ,
                ':textColor' => $text,
                ':start' => $start,
                ':end' => $end
            ]);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }


    }

    public function deleteCita($id){
        try{
            $query = $this->db->connect()->prepare('DELETE FROM cita WHERE id=:id');
            $query->execute([
                ':id' =>  $id ,
            ]);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }


    }




}

?>