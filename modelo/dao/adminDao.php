<?php


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
}