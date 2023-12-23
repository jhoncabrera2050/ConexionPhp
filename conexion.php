<?php

class Conexion {
    public static function ConexionBD() {
        $host = 'DESKTOP-DKU7QGM\SQLEXPRESS';
        $dbname = 'Neptuno';
        $username = 'jhon';
        $password = '123456';
        $puerto = 1433;

        try {
            $com = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $password);
            echo "Se conectó correctamente a la base de datos";
        } catch (PDOException $exp) {
            echo "No se logró conectar correctamente con la base de datos: $dbname, error: " . $exp->getMessage();
        }

        return $com;
    }
}

?>
