<?php
class Usuario
{
    private $email;
    private $pwd;
    private $nombre;
    private $apellidos;

    public function __construct($email, $pwd, $nombre, $apellidos)
    {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    function insertar($link)
    {
        try {
            $stmt = "INSERT INTO usuarios (email, pwd, nombre, apellidos) VALUES(:email, :pwd, :nombre, :apellidos)";
            $result = $link->prepare($stmt);
            $email = $this->email;
            $nombre = $this->nombre;
            $apellidos = $this->apellidos;
            $pwd = password_hash($this->pwd, PASSWORD_DEFAULT);
            $result->bindParam(':email', $email);
            $result->bindParam(':pwd', $pwd);
            $result->bindParam(':nombre', $nombre);
            $result->bindParam(':apellidos', $apellidos);
            $result->execute();
            return $result;
        } catch (PDOException $e) {
            $dato = "¡Error!: " . $e->getMessage() . "<br/>";
            require "../vistas/mensaje.php";
            die();
        }
    }
}
