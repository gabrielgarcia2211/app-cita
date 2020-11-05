<?php


class loginDao extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function verificarUser($codigo, $documento, $contraseña){
        try{
            $statement = $this->db->connect()->prepare("SELECT codigo, documento, contraseña FROM users WHERE  codigo = :codigo AND documento = :documento AND contraseña = :contrasena ");
            $statement->execute(array(
                ':codigo' => $codigo,
                ':documento' => $documento,
                ':contrasena' => $contraseña
            ));
            $resultado = $statement->fetch();
            if(empty($resultado)){
                return false;
            }else{
                return true;
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

}
