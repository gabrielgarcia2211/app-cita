<?php


class estudianteDao extends Model{
    
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

    public function addCita($codigo, $title, $descripcion, $color, $text, $start, $end, $servicio){
        $query = $this->db->connect()->prepare("INSERT INTO cita(codigo, title, descripcion, color, textColor, start, end , id_servicio) VALUES (:codigo,:title,:descripcion,:color,:textColor, :start, :end ,:servicio)");
        try {
            $query->execute([
                ':codigo' =>  $codigo ,
                ':title' => $title,
                ':descripcion' => $descripcion ,
                ':color' => $color ,
                ':textColor' => $text,
                ':start' => $start,
                ':end' => $end,
                ':servicio' => $servicio
            ]);
            $resultado = $query->fetchAll();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function editCita($id,$codigo, $title, $descripcion, $color, $text, $start, $end,$servicio){
        try{
            $query = $this->db->connect()->prepare('UPDATE cita SET codigo = :codigo, title=:title , descripcion= :descripcion , color= :color , start= :start , textColor= :textColor, end= :end , id_servicio= :servicio WHERE id=:id');
            $query->execute([
                ':id' =>  $id ,
                ':codigo' =>  $codigo ,
                ':title' => $title,
                ':descripcion' => $descripcion ,
                ':color' => $color ,
                ':textColor' => $text,
                ':start' => $start,
                ':end' => $end,
                ':servicio' => $servicio
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


    public function getServicio(){
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM servicio');
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }


    public function getHorario($horario){
        try{
            $query = $this->db->connect()->prepare("SELECT start FROM cita where start LIKE '$horario%'");
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }




}

?>