<?php
use LDAP\Result;

require_once 'conectorDB.php';
class modelosUsuarios
{
    static public function mdlmostrarUsuario($tableName, $itemName, $valor)
    {
        $COONECT = new Conectar();
        $db = $COONECT->conexion();
        if ($itemName != null) {
            $stmt = $db->prepare("SELECT * FROM $tableName WHERE $itemName = '$valor'");
            //$stmt = $db->prepare("SELECT * FROM $tableName WHERE $itemName = :$itemName");
            $stmt -> bindParam(":".$itemName, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = $db->prepare("SELECT * FROM $tableName");

            $stmt->execute();

            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;

    }
    static public function mdlIngresarUsuario($tabla, $datos){
        $COONECT = new Conectar();
        $db = $COONECT->conexion();

		$stmt = $db->prepare("INSERT INTO $tabla(`nombres`, `apellidos`, `correo`, `telefono`, `id_rol`, `usuario`, `password`, `foto`, `estado`) VALUES (:nombres, :apellidos, :correo, :telefono, :id_rol, :usuario, :password, :foto, 1)");

		$stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":id_rol", $datos["id_rol"], PDO::PARAM_INT);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}
}