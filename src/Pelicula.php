<?php

namespace Kawschool;

class Pelicula
{

    private $config;
    private $cn = null;

    public function __construct()
    {
        session_start();
        $this->config = parse_ini_file(__DIR__ . '/../config.ini');

        $this->cn = new \PDO($this->config['dns'], $this->config['usuario'], $this->config['clave'], array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
    }

    public function registrar($_params)
    {
        $sql = "INSERT INTO `peliculas`(`Titulo`, `Genero`, `Descripcion`,`Puntuacion`, `Trailer`, `Imagen`) 
        VALUES (:Titulo,:Genero,:Descripcion,:Puntuacion,:Trailer,:Imagen)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":Titulo" => $_params['Titulo'],
            ":Genero" => $_params['Genero'],
            ":Descripcion" => $_params['Descripcion'],
            ":Puntuacion" => $_params['Puntuacion'],
            ":Trailer" => $_params['Trailer'],
            ":Imagen" => $_params['Imagen'],
        );

        if ($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params)
    {
        $sql = "UPDATE `peliculas` SET `Titulo`=:Titulo,`Genero`=:Genero,`Descripcion`=:Descripcion,`Puntuacion`=:Puntuacion,`Trailer`=:Trailer,`Imagen`=:Imagen  WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":Titulo" => $_params['Titulo'],
            ":Genero" => $_params['Genero'],
            ":Descripcion" => $_params['Descripcion'],
            ":Puntuacion" => $_params['Puntuacion'],
            ":Trailer" => $_params['Trailer'],
            ":Imagen" => $_params['Imagen'],
            ":id" =>  $_params['id']
        );

        if ($resultado->execute($_array))
            return true;

        return false;
    }


    public function eliminar($id)
    {
        $sql = "DELETE FROM `peliculas` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":id" =>  $id
        );

        if ($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar()
    {
        $sql = "SELECT peliculas.id, Titulo, Genero,Descripcion,Puntuacion,Trailer,Imagen FROM peliculas 
        
        ORDER BY peliculas.id DESC
        ";

        $resultado = $this->cn->prepare($sql);

        if ($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }

    public function mostrarPorId($id)
    {

        $sql = "SELECT * FROM `peliculas` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if ($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }

    public function Buscar($buscar)
    {
        $buscar = $_POST['buscar'];
        $sql = "SELECT * FROM peliculas WHERE Titulo LIKE '%{$buscar}%' OR Descripcion LIKE '%{$buscar}%' OR Puntuacion LIKE '%{$buscar}%' OR Genero LIKE '%{$buscar}%' order by id desc";
        $resultado = $this->cn->prepare($sql);

        if ($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }
}
