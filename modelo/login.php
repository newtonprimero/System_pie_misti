<?php
use LDAP\Result;
require_once 'conectorDB.php';
class modelosLogin{
    
    static public function mdllogin($tableName, $itemName, $valor){
        $COONECT = new Conectar();
        $db =$COONECT->conexion();
        if ($itemName != null) {
            $stmt = $db->prepare("SELECT * FROM $tableName WHERE $itemName = '$valor'");
            //$stmt = $db->prepare("SELECT * FROM $tableName WHERE $itemName = :$itemName");
			//$stmt -> bindParam(":".$itemName, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
        } else {
            $stmt = $db->prepare("SELECT * FROM $tableName");

			$stmt -> execute();

			return $stmt -> fetch();
        }
        $stmt->close();
        $stmt = null;
        
    }
    static public function mdlActualizarUsuarioLogin($tabla, $item1, $valor1, $item2, $valor2){
        $COONECT = new Conectar();
        $db = $COONECT->conexion();
		$stmt = $db->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}
		$stmt -> close();

		$stmt = null;

	}
}

//Comprobamos que el valor no venga vacío
//$funcion = ($_POST['funcion']);
//En función del parámetro que nos llegue ejecutamos una función u otra
/*switch ($funcion) {
    case 'funcion1':
        modeloLogin();
        break;
}
function modeloLogin()
{

    try {
        $nick = $_POST['nick'];
        #$pass = $_POST['pass'];
        $COONECT = new Conectar();
        $db = $COONECT->conexion();
        //$sql="SELECT id_rol,id_sede,correo,nickname,pass,estado FROM usuario WHERE nickname = '$nick'"

        #$stmt = $db->prepare("SELECT * FROM usuario ");
        $stmt = $db->prepare("SELECT id_rol,id_sede,correo,nickname,pass,estado FROM usuario WHERE nickname = '$nick'");
        $stmt->execute();
        //$stmt = json_encode($stmt);
        $resultSet = $stmt->get_result();
        $result = $resultSet->fetch_all();
        echo (json_encode($result));
        //var_dump($result);
        //$rec = count($result);
        /*if ($rec != null) {
            header('Location: ' . "../views/cliente/clientes.php");
        } else {
            header('Location: ' . "../views/cliente/clientes.php");
        }*/
        //$db->close();
        //return $stmt;

    /*} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        echo "error";
    }
}*/