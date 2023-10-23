<?php

class CtrlClientes
{
    static public function ctrMostrarClientes()
    {
        $itemName = null;
        $valor = null;
        $tableName = "tbl_clientes";

        $respuesta = modelosClientes::mdlmostrarClientes($tableName, $itemName, $valor);
        return $respuesta;
    }

    static public function ctrCrearCliente()
    {

        if (isset($_POST["txt_nombres"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["txt_nombres"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["txt_apellidos"]) &&
                preg_match('/^[0-9]+$/', $_POST["txt_dni"]) &&
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["txt_correo"]) &&
                preg_match('/^[()\-0-9 ]+$/', $_POST["txt_telef"]) &&
                preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["txt_direcc"])
            ) {

                $tabla = "tbl_clientes";

                $datos = array(
                    "nombre" => $_POST["txt_nombres"],
                    "apellidos" => $_POST["txt_apellidos"],
                    "dni" => $_POST["txt_dni"],
                    "fech_nacimiento" => $_POST["txt_nacimiento"],
                    "ubigeo" => $_POST["txt_ubigeo"],
                    "id_ciudad" => $_POST["selc_ciudad"],
                    "direccion" => $_POST["txt_direcc"],
                    "telefono" => $_POST["txt_telef"],
                    "telefono2" => $_POST["txt_telef"],
                    "correo" => $_POST["txt_correo"],
                    "id_usu" => $_POST["txt_idusu"],
                    "id_sede" => $_POST["txt_idusu"]
                );

                $respuesta = modelosClientes::mdlIngresarCliente($tabla, $datos);
                
                if($respuesta == "ok"){

					echo'<script>

					Swal.fire({
                        icon: "success",
                        title: "Your work has been saved",
                        showConfirmButton: false,
                        timer: 1500
                      }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

                Swal.fire({
                  icon: "error",
                  title: "Oops... /n ocurrio un error al registrar el cliente...",
                  text: "Something went wrong!",
                  confirmButtonText: "Cerrar"
                  
                }).then(function(result){
                                            if (result.value) {
                
                                            window.location = "clientes";
                
                                            }
                                        })
                
                                        </script>';



			}

        }

    }
    
    
    
}
function consultarDNI($dni) {
    $url = "https://dniruc.apisperu.com/api/v1/dni/$dni?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNnenQ5OTlAZ21haWwuY29tIn0.mGhrJdxRALzG1QQasRUzoEAe2gFlblF245ILmwZb0-w";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response; // Devuelve la respuesta JSON sin decodificar
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requestData = json_decode(file_get_contents("php://input"), true);
    
    if (isset($requestData['dni'])) {
        $dni = $requestData['dni'];
        $response = consultarDNI($dni);
        header('Content-Type: application/json');
        echo $response; // Devuelve la respuesta de la API RENIEC tal cual
    } else {
        // Manejar error de datos insuficientes
    }
}
function consultarRUC($ruc) {
    $url = "https://dniruc.apisperu.com/api/v1/ruc/$ruc?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNnenQ5OTlAZ21haWwuY29tIn0.mGhrJdxRALzG1QQasRUzoEAe2gFlblF245ILmwZb0-w";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response; // Devuelve la respuesta JSON sin decodificar
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requestData = json_decode(file_get_contents("php://input"), true);
    
    if (isset($requestData['ruc'])) {
        $ruc = $requestData['ruc'];
        $response = consultarRUC($ruc);
        header('Content-Type: application/json');
        echo $response; // Devuelve la respuesta de la API RENIEC tal cual
    } else {
        // Manejar error de datos insuficientes
    }
}

