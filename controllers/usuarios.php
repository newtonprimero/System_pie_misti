<?php

class CtrladorUsuarios
{
    static public function ctrMostrarUsuarios($itemName, $valor)
    {
        $tableName = "tbl_usuarios";

        $respuesta = modelosUsuarios::mdlmostrarUsuario($tableName, $itemName, $valor);
        return $respuesta;
    }
    static public function ctrCrearUsuario()
    {

        if (isset($_POST["txt_usuario"])) {

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["txt_nombres"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["txt_apellidos"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["txt_usuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["txt_password"])
            ) {

                /*=============================================
                VALIDAR IMAGEN
                =============================================*/

                $ruta = "";

                if (isset($_FILES["file_foto"]["tmp_name"])) {

                    list($ancho, $alto) = getimagesize($_FILES["file_foto"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                    /*=============================================
                    CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
                    =============================================*/

                    $directorio = "images/img/usuarios/" . $_POST["txt_usuario"];

                    mkdir($directorio, 0755);

                    /*=============================================
                    DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
                    =============================================*/

                    if ($_FILES["file_foto"]["type"] == "image/jpeg") {

                        /*=============================================
                        GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                        =============================================*/

                        $aleatorio = mt_rand(100, 999);

                        $ruta = "images/img/usuarios/" . $_POST["txt_usuario"] . "/" . $aleatorio . ".jpg";

                        $origen = imagecreatefromjpeg($_FILES["file_foto"]["tmp_name"]);

                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                        imagejpeg($destino, $ruta);

                    } else

                        if ($_FILES["file_foto"]["type"] == "image/png") {

                            /*=============================================
                            GUARDAMOS LA IMAGEN EN EL DIRECTORIO
                            =============================================*/

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "images/img/usuarios/" . $_POST["txt_usuario"] . "/" . $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["file_foto"]["tmp_name"]);

                            $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                            imagepng($destino, $ruta);

                        } else {
                            $foto = $_FILES["file_foto"];
                            $tmp_name = $foto['tmp_name'];
                            $tipe_name = $foto['name'];
                            $directorio = "images/img/usuarios/" . $_POST["txt_usuario"];
                            $ruta = "images/img/usuarios/" . $_POST["txt_usuario"];
                            $aleatorio = mt_rand(100, 999);
                            $ruta = $directorio . "/" . $tipe_name;
                            move_uploaded_file($tmp_name, $ruta);
                        }

                }

                $tabla = "tbl_usuarios";

                $encriptar = crypt($_POST["txt_password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datos = array(
                    "nombres" => $_POST["txt_nombres"],
                    "apellidos" => $_POST["txt_apellidos"],
                    "correo" => $_POST["txt_correo"],
                    "telefono" => $_POST["txt_telefono"],
                    "id_rol" => $_POST["txt_rol"],
                    "usuario" => $_POST["txt_usuario"],
                    "password" => $encriptar,
                    "foto" => $ruta
                );

                $respuesta = modelosUsuarios::mdlIngresarUsuario($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

					Swal.fire({
                        icon: "success",
						title: "¡El usuario ha sido guardado correctamente!",
                        showConfirmButton: false,
                        timer: 2000

					}).then(function(result){

						if(result.value){
						
							window.location = "usuario";

						}

					});
				

					</script>';


                }


            } else {

                echo '<script>

                Swal.fire({
                        icon: "error",
						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "usuarios";

						}

					});
				

				</script>';

            }


        }


    }
    /*controlador para editar usuarios*/
    static public function ctrEditarUsuario(){

		if(isset($_POST["editarUsuario"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActual"];

				if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActual"])){

						unlink($_POST["fotoActual"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "usuarios";

				if($_POST["editarPassword"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result) {
										if (result.value) {

										window.location = "usuarios";

										}
									})

						  	</script>';

						  	return;

					}

				}else{

					$encriptar = $_POST["passwordActual"];

				}

				$datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "password" => $encriptar,
							   "perfil" => $_POST["editarPerfil"],
							   "foto" => $ruta);

				$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

			}

		}

	}
}