<?php


class loginDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }
    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO PERSONA (usuario, nombre, correo, contrasenia) VALUES (:usuario, :nombre, :correo, :contrasenia)');
        try{
            $query->execute([
                'usuario' => $person->getUsuario(),
                'nombre' => $person->getNombre(),
                'correo' => $person->getCorreo(),
                'contrasenia' => $person->getContrasenia()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
    }

    


}

?>