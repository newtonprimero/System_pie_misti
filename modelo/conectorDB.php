<?php
class Conectar{
    private $driver;
    private $host, $user, $pass, $database, $charset;
   
    public function __construct() {
        $db_cfg = require_once 'config/database.php';
        $this->driver=$db_cfg["driver"];
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->pass=$db_cfg["pass"];
        $this->database=$db_cfg["database"];
        $this->charset=$db_cfg["charset"];
    }
     
    static public function conexion(){
        $con = new PDO("mysql:host=localhost;dbname=pdm_db",
			            "root",
			            "");

		$con->exec("set names utf8");

		return $con;
        /*
        if($this->driver=="mysql" || $this->driver==null){
            $con=new PDO($this->host, $this->user, $this->pass);
            $con->exec("SET NAMES '".$this->charset."'");
        }else{
            echo "error de conexion";
        }
         
        return $con;*/
    }
}
?>