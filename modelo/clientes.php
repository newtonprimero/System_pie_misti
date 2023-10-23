<?php
use LDAP\Result;
require_once 'conectorDB.php';
class modelosClientes
{
    static public function mdlmostrarClientes($tableName,$itemName,$valor)
    {
        $COONECT = new Conectar();
        $db = $COONECT->conexion();
        if ($itemName != null) {
            $stmt = $db->prepare("SELECT * FROM $tableName WHERE $itemName = '$valor'");
            //$stmt = $db->prepare("SELECT * FROM $tableName WHERE $itemName = :$itemName");
            //$stmt -> bindParam(":".$itemName, $valor, PDO::PARAM_STR);
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
    static public function mdlIngresarCliente($tabla, $datos){

		$COONECT = new Conectar();
        $db = $COONECT->conexion();

		$stmt = $db->prepare("INSERT INTO $tabla(`nombre`, `apellidos`, `dni`, `fech_nacimiento`, `ubigeo`, `id_ciudad`, 
		`direccion`, `telefono`, `telefono2`, `correo`, `id_usu`, `id_sede`, `estado`, `estado_eli`) 
		VALUES (:nombre, :apellidos, :dni, :fech_nacimiento, :ubigeo, :id_ciudad, :direccion, :telefono, 
		:telefono2, :correo, :id_usu , :id_sede,  '1', '1')");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
		$stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_INT);
        $stmt->bindParam(":fech_nacimiento", $datos["fech_nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":ubigeo", $datos["ubigeo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_ciudad", $datos["id_ciudad"], PDO::PARAM_INT);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono2", $datos["telefono2"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":id_usu", $datos["id_usu"], PDO::PARAM_INT);
		$stmt->bindParam(":id_sede", $datos["id_sede"], PDO::PARAM_INT);
		echo var_dump($datos);
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
    static public function mdlEditarCliente($tabla, $datos){

		$stmt = Conectar::conexion()->prepare("UPDATE $tabla SET nombre = :nombre, documento = :documento, email = :email, telefono = :telefono, direccion = :direccion, fecha_nacimiento = :fecha_nacimiento WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
}

