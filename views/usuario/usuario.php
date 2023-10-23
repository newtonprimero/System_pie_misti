<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>USUARIO</h4>
                    <span class="ml-1">Tabla de Usuarios</span>
                </div>
            </div>

            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <a href="../cliente/registrarCliente.php"><button type="button" class="btn btn-outline-primary"
                        style="width: 100px;">Nuevo rol</button></a>
                <button type="button" data-toggle="modal" data-target="#modalGrid" class="btn btn-outline-primary">Nuevo
                    Usuario</button>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div>
                        </form>
                        <h5 class="col-md-12" style="margin-left: 5%; text-align: center;">Flitros</h5>
                        <div class="col-md-12" style="display: flex; justify-content: center;">
                            <div class="col-md-2">
                                <label for="">Rol</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Administrador</option>
                                    <option value="">Soporte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Sede</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Jerusalen</option>
                                    <option value="">Merced</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Correo:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-primary"
                                    style="margin-top:28px; width: 110%;">Filtrar</button>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px;">
                                <thead>
                                    <tr>
                                        <th style="width:10px">#</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Foto</th>
                                        <th>Perfil</th>
                                        <th>Estado</th>
                                        <th>Último login</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody style="color: #454545;">
                                    <?php

                                    $usuarios = CtrladorUsuarios::ctrMostrarUsuarios();
                                    foreach ($usuarios as $key => $value) {

                                        echo ' <tr>
                                                <td>' . ($key + 1) . '</td>
                                                <td>' . $value["nombres"] . '</td>
                                                <td>' . $value["usuario"] . '</td>';

                                        if ($value["foto"] != "") {

                                            echo '<td><img src="' . $value["foto"] . '" class="img-thumbnail" width="40px"></td>';

                                        } else {

                                            echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                                        }

                                        echo '<td>' . $value["perfil"] . '</td>';

                                        if ($value["estado"] != 0) {

                                            echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="' . $value["id"] . '" estadoUsuario="0">Activado</button></td>';

                                        } else {

                                            echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="' . $value["id"] . '" estadoUsuario="1">Desactivado</button></td>';

                                        }

                                        echo '<td>' . $value["ultimo_login"] . '</td>
                                        <td>

                                            <div class="btn-group">
                                                
                                            <button class="btn btn-warning btnEditarUsuario" idUsuario="' . $value["id"] . '" data-toggle="modal" data-target="#modalGrid2"><i class="fa fa-pencil"></i></button>

                                            <button class="btn btn-danger btnEliminarUsuario" idUsuario="' . $value["id"] . '" fotoUsuario="' . $value["foto"] . '" usuario="' . $value["usuario"] . '"><i class="fa fa-times"></i></button>

                                            </div>  

                                        </td>

                                        </tr>';
                                    }


                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="modalGrid">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ingresar Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form role="form" method="post" enctype="multipart/form-data">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Nombres</strong></label>
                                                        <input type="text" id="txt_nombres" name="txt_nombres"
                                                            class="form-control" placeholder="Nombres">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Apellidos</strong></label>
                                                        <input type="text" id="txt_apellidos" name="txt_apellidos"
                                                            class="form-control" placeholder="Apellidos">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Rol</strong></label>
                                                        <select class="form-control" name="txt_rol" id="txt_rol">
                                                            <option value="0">Seleccione una opción</option>
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Soporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Sede</strong></label>
                                                        <select class="form-control" name="txt_sede" id="txt_sede">
                                                            <option value="0">Seleccione una opción</option>
                                                            <option value="1">Jerusalen</option>
                                                            <option value="2">San Lazaro</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label><strong>Correo</strong></label>
                                                        <input type="email" id="txt_correo" name="txt_correo"
                                                            class="form-control" placeholder="ejemplo@ejemplo.com">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label><strong>Nickname</strong></label>
                                                        <input type="text" id="txt_usuario" name="txt_usuario"
                                                            class="form-control" placeholder="lopez">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Contraseña</strong></label>
                                                        <input type="password" id="txt_password" name="txt_password"
                                                            class="form-control" placeholder="lopez123">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Confirme contraseña</strong></label>
                                                        <input type="password" id="txt_confirpass" name="txt_confirpass"
                                                            class="form-control" placeholder="lopez123">
                                                    </div>
                                                    <!--<div class="form-group col-md-6">
                                                        <label><strong>Telefono</strong></label>
                                                        <input type="number" id="txt_telefono" name="txt_telefono"
                                                            class="form-control" placeholder="957...">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modalGrid" class="btn btn-dark"
                                                            style="display: block; float: right; width: 100px; margin-top: 26px; border-radius: 50%;">Generar</button>
                                                    </div>-->
                                                    <div class="form-group col-md-12">
                                                        <label><strong>Foto</strong></label>
                                                        <input type="file" id="file_foto" name="file_foto"
                                                            class="form-control" placeholder="lopez">
                                                        <p class="help-block">Peso máximo de la foto 2MB</p>
                                                    </div>
                                                    
                                                    <hr style="height: 10%;">
                                                    <div class="form-group col-md-12">
                                                        <div
                                                            class="d-flex justify-content-between bd-highlight mb-2 mt-4">
                                                            <button type="button" class="btn btn-danger"
                                                                style="color: black; width: 150px;"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                style="color: black; width: 150px;">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php

                                            $crearUsuario = new CtrladorUsuarios();
                                            $crearUsuario->ctrCrearUsuario();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modalGrid2">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="index.html">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Nombres</strong></label>
                                                        <input type="text" class="form-control" placeholder="Nombres">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Apellidos</strong></label>
                                                        <input type="text" class="form-control" placeholder="Apellidos">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Rol</strong></label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">Administrador</option>
                                                            <option value="">Soporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>Sede</strong></label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">Jerusalen</option>
                                                            <option value="">San Lazaro</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label><strong>Correo</strong></label>
                                                        <input type="email" class="form-control"
                                                            placeholder="ejemplo@ejemplo.com">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label><strong>nickname</strong></label>
                                                        <input type="email" class="form-control" placeholder="lopez">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <button type="button" data-toggle="modal"
                                                            data-target="#modalGrid" class="btn btn-dark"
                                                            style="display: block; float: right; width: 100px; margin-top: 26px; border-radius: 50%;">Generar</button>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>Contraseña</strong></label>
                                                        <input type="password" class="form-control"
                                                            placeholder="lopez123">
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>Confirme contraseña</strong></label>
                                                        <input type="password" class="form-control"
                                                            placeholder="lopez123">
                                                    </div>
                                                    <hr style="height: 10%;">
                                                    <div class="form-group col-md-12">
                                                        <div
                                                            class="d-flex justify-content-between bd-highlight mb-2 mt-4">
                                                            <button type="button" class="btn btn-danger"
                                                                style="color: black; width: 150px;"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                style="color: black; width: 150px;">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->