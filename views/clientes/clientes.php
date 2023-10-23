<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>CLIENTES</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>

            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <button type="button" data-toggle="modal" data-target="#modalGrid" class="btn btn-outline-primary">Nuevo
                    Cliente</button>
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
                        <h5 class="col-md-12" style="margin-left: 5%; text-align: center;">Flitros</h5>
                        <div class="col-md-12" style="display: flex; justify-content: center;">
                            <div class="col-md-3">
                                <label for="">Fecha inicio:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Fecha Fecha Fin:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label for="">Edad:</label>
                                <input type="number" class="form-control">
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
                                        <th>#</th>
                                        <th>Nombre y Apellidos</th>
                                        <th>DNI</th>
                                        <th>Telefono</th>
                                        <th>Ciudad</th>
                                        <th>Correo</th>
                                        <th>Fecha nacimiento</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody style="color: #454545;">
                                    <?php

                                    $clientes = CtrlClientes::ctrMostrarClientes();

                                    foreach ($clientes as $key => $value) {

                                        $retVal = ($value["id_ciudad"] == 1) ? 'Arequipa' : 'Lima';
                                        echo '<tr>

                                                <td>' . ($key + 1) . '</td>

                                                <td>' . $value["nombre"] . ' ' . $value["apellidos"] . '</td>
                                                <td>' . $value["dni"] . '</td>

                                                <td>' . $value["telefono"] . '</td>

                                                <td>' . $retVal . '</td>

                                                <td>' . $value["correo"] . '</td>

                                                <td>' . $value["fech_nacimiento"] . '</td>

                                                <td>

                                                    <div class="btn-group">
                                                        
                                                    <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="' . $value["id_cli"] . '"><i class="fa fa-pencil"></i></button>';

                                        if ($_SESSION["perfil"] == "Administrador") {

                                            echo '<button class="btn btn-danger btnEliminarCliente" idCliente="' . $value["id_cli"] . '"><i class="fa fa-times"></i></button>';

                                        }

                                        echo '</div>  

                                                </td>

                                                </tr>';

                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="modalGrid">
                            <div class="modal-dialog" >
                                <div class="modal-content">
                                    <form role="form" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Registrar Cliente</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <?php echo '<input type="text" id="txt_idusu" name="txt_idusu" value="' . $_SESSION["id"] . '" hidden>' ?>
                                                <?php echo '<input type="text" id="txt_idsede" name="txt_idsede" value="' . $_SESSION["id"] . '" hidden>' ?>
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
                                                    <div class="form-group col-md-4">
                                                        <label><strong>Tipo documento</strong></label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">DNI</option>
                                                            <option value="">Pasaporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>NRO Documento</strong></label>
                                                        <input type="text" id="txt_dni" name="txt_dni"
                                                            class="form-control" placeholder="nro">
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>Fech. nacimiento</strong></label>
                                                        <input type="date" id="txt_nacimiento" name="txt_nacimiento"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label><strong>Ubigeo</strong></label>
                                                        <input type="number" id="txt_ubigeo" name="txt_ubigeo"
                                                            class="form-control">
                                                    </div>
                                                    <hr style="height: 10%;">
                                                    <div class="form-group col-sm-6">
                                                        <label><strong>Ciudad</strong></label>
                                                        <select class="form-control" name="selc_ciudad"
                                                            id="selc_ciudad">
                                                            <option value="1">Arequipa</option>
                                                            <option value="2">Lima</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label><strong>Distrito</strong></label>
                                                        <select class="form-control" name="selc_ditrito"
                                                            id="selc_ditrito">
                                                            <option value="1">Alto Selva Alegre</option>
                                                            <option value="2">Cercado</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label><strong>Direccion</strong></label>
                                                        <input type="text" id="txt_direcc" name="txt_direcc"
                                                            class="form-control" placeholder="Direccion">
                                                        <hr>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label><strong>Telefono</strong></label>
                                                        <input type="text" id="txt_telef" name="txt_telef"
                                                            class="form-control" placeholder="Telefono">
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                        <label><strong>Email</strong></label>
                                                        <input type="email" id="txt_correo" name="txt_correo"
                                                            class="form-control" placeholder="hello@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="form-group col-md-12">
                                                <div class="d-flex justify-content-between bd-highlight mb-2 mt-4">
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

                                    $crearCliente = new CtrlClientes();
                                    $crearCliente->ctrCrearCliente();
                                    ?>
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