<?php

require 'modelo/dto/personaDto.php';
require 'modelo/dto/userDto.php';
class adminDao extends Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function listCita(){
        try{
            $query = $this->db->connect()->prepare('SELECT u.codigo, u.correo_institucional, p.nombre, p.apellido, c.title, c.start, s.descripcion FROM users u INNER JOIN personas p ON u.documento=p.documento INNER JOIN cita c ON c.codigo=u.codigo INNER JOIN servicio s ON c.id_servicio=s.id');
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    function getData($codigo){
        try{
            $query = $this->db->connect()->prepare("SELECT * FROM users INNER JOIN personas ON users.documento = personas.documento where users.codigo=$codigo");
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    function addIngeniero($nombre,$apellido,$cedula,$codigo,$correo_institucional,$correo_personal,$telefono, $contrasenia){
        $ing = new personaDto($nombre, $apellido, $cedula, $correo_personal, $telefono);
        $user = new userDto($codigo, $cedula, $correo_institucional, $contrasenia);

        $query = $this->db->connect()->prepare("INSERT INTO personas(nombre, apellido, documento, correo, telefono) VALUES (:nombre, :apellido, :documento, :correo, :telefono)");
        $queryUser = $this->db->connect()->prepare("INSERT INTO users(codigo, correo_institucional, documento, contrasenia, rol) VALUES (:codigo, :correo_institucional, :documento, :contrasenia, :rol)");
        try {
            $query->execute([
                ':nombre' =>  $ing->getNombre() ,
                ':apellido' => $ing->getApellido(),
                ':documento' => $ing->getCedula() ,
                ':correo' => $ing->getCorreoPersonal() ,
                ':telefono' => $ing->getTelefono()
            ]);
            $queryUser->execute([
                ':codigo' =>  $user->getCodigo() ,
                ':correo_institucional' => $user->getCorreoInstitucional(),
                ':documento' => $user->getCedula() ,
                ':contrasenia' => $user->getContraseña() ,
                ':rol' => 2
            ]);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    function getIngeniero(){
        try{
            $query = $this->db->connect()->prepare("SELECT * FROM users INNER JOIN personas ON users.documento = personas.documento WHERE users.rol=2");
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteIngeniero($codigo){
        try{
            $query = $this->db->connect()->prepare('DELETE personas.*  FROM users INNER JOIN personas ON users.documento=personas.documento WHERE users.codigo=:codigo');
            $query->execute([
                ':codigo' =>  $codigo ,
            ]);
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }


    }

}