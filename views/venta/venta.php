
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <style>
                    /*Background color*/
                    #grad1 {
                        background-color: : #9C27B0;
                        background-image: linear-gradient(120deg, #4d581d, #81D4FA);
                    }

                    /*form styles*/
                    #msform {
                        text-align: center;
                        position: relative;
                        margin-top: 20px;
                    }

                    #msform fieldset .form-card {
                        background: white;
                        border: 0 none;
                        border-radius: 0px;
                        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                        padding: 20px 40px 30px 40px;
                        box-sizing: border-box;
                        width: 94%;
                        margin: 0 3% 20px 3%;

                        /*stacking fieldsets above each other*/
                        position: relative;
                    }

                    #msform fieldset {
                        background: white;
                        border: 0 none;
                        border-radius: 0.5rem;
                        box-sizing: border-box;
                        width: 100%;
                        margin: 0;
                        padding-bottom: 20px;

                        /*stacking fieldsets above each other*/
                        position: relative;
                    }

                    /*Hide all except first fieldset*/
                    #msform fieldset:not(:first-of-type) {
                        display: none;
                    }

                    #msform fieldset .form-card {
                        text-align: left;
                        color: #9E9E9E;
                    }

                    #msform input,
                    #msform textarea {
                        padding: 0px 8px 4px 8px;
                        border: none;
                        border-bottom: 1px solid #ccc;
                        border-radius: 0px;
                        margin-bottom: 25px;
                        margin-top: 2px;
                        width: 100%;
                        box-sizing: border-box;
                        font-family: montserrat;
                        color: #2C3E50;
                        font-size: 16px;
                        letter-spacing: 1px;
                    }

                    #msform input:focus,
                    #msform textarea:focus {
                        -moz-box-shadow: none !important;
                        -webkit-box-shadow: none !important;
                        box-shadow: none !important;
                        border: none;
                        font-weight: bold;
                        border-bottom: 2px solid skyblue;
                        outline-width: 0;
                    }

                    /*Blue Buttons*/
                    #msform .action-button {
                        width: 100px;
                        background: skyblue;
                        font-weight: bold;
                        color: white;
                        border: 0 none;
                        border-radius: 0px;
                        cursor: pointer;
                        padding: 10px 5px;
                        margin: 10px 5px;
                    }

                    #msform .action-button:hover,
                    #msform .action-button:focus {
                        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
                    }

                    /*Previous Buttons*/
                    #msform .action-button-previous {
                        width: 100px;
                        background: #616161;
                        font-weight: bold;
                        color: white;
                        border: 0 none;
                        border-radius: 0px;
                        cursor: pointer;
                        padding: 10px 5px;
                        margin: 10px 5px;
                    }

                    #msform .action-button-previous:hover,
                    #msform .action-button-previous:focus {
                        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
                    }

                    /*Dropdown List Exp Date*/
                    select.list-dt {
                        border: none;
                        outline: 0;
                        border-bottom: 1px solid #ccc;
                        padding: 2px 5px 3px 5px;
                        margin: 2px;
                    }

                    select.list-dt:focus {
                        border-bottom: 2px solid skyblue;
                    }

                    /*The background card*/
                    .card {
                        z-index: 0;
                        border: none;
                        border-radius: 0.5rem;
                        position: relative;
                    }

                    /*FieldSet headings*/
                    .fs-title {
                        font-size: 25px;
                        color: #2C3E50;
                        margin-bottom: 10px;
                        font-weight: bold;
                        text-align: left;
                    }

                    /*progressbar*/
                    #progressbar {
                        margin-bottom: 30px;
                        overflow: hidden;
                        color: lightgrey;
                    }

                    #progressbar .active {
                        color: #000000;
                    }

                    #progressbar li {
                        list-style-type: none;
                        font-size: 12px;
                        width: 20%;
                        float: left;
                        position: relative;
                    }

                    /*Icons in the ProgressBar*/
                    #progressbar #account:before {
                        font-family: FontAwesome;
                        content: "\f023";
                    }

                    #progressbar #personal:before {
                        font-family: FontAwesome;
                        content: "\f007";
                    }

                    #progressbar #payment:before {
                        font-family: FontAwesome;
                        content: "\f09d";
                    }

                    #progressbar #confirm:before {
                        font-family: FontAwesome;
                        content: "\f00c";
                    }

                    #progressbar #cart_buy:before {
                        font-family: FontAwesome;
                        content: "\f07a";
                    }

                    #progressbar #progres_compro:before {
                        font-family: FontAwesome;
                        content: "\f145";
                    }

                    /*ProgressBar before any progress*/
                    #progressbar li:before {
                        width: 50px;
                        height: 50px;
                        line-height: 45px;
                        display: block;
                        font-size: 18px;
                        color: #ffffff;
                        background: lightgray;
                        border-radius: 50%;
                        margin: 0 auto 10px auto;
                        padding: 2px;
                    }

                    /*ProgressBar connectors*/
                    #progressbar li:after {
                        content: '';
                        width: 100%;
                        height: 2px;
                        background: lightgray;
                        position: absolute;
                        left: 0;
                        top: 25px;
                        z-index: -1;
                    }

                    /*Color number of the step and the connector before it*/
                    #progressbar li.active:before,
                    #progressbar li.active:after {
                        background: skyblue;
                    }

                    /*Imaged Radio Buttons*/
                    .radio-group {
                        position: relative;
                        margin-bottom: 25px;
                    }

                    .radio {
                        display: inline-block;
                        width: 204;
                        height: 104;
                        border-radius: 0;
                        background: lightblue;
                        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                        box-sizing: border-box;
                        cursor: pointer;
                        margin: 8px 2px;
                    }

                    .radio:hover {
                        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
                    }

                    .radio.selected {
                        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
                    }

                    /*Fit image in bootstrap div*/
                    .fit-image {
                        width: 100%;
                        object-fit: cover;
                    }
                </style>
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nueva venta</h4>
                            </div>
                            <!-- MultiStep Form -->
                            <div class="container-fluid" id="grad1">
                                <div class="row justify-content-center mt-0">
                                    <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
                                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                            <h2><strong>Registro de nueva venta</strong></h2>
                                            <p>Esto sera considerado para su meta</p>
                                            <div class="row">
                                                <div class="col-md-12 mx-0">
                                                    <form id="msform" method="post">
                                                        <!-- progressbar -->
                                                        <ul id="progressbar">
                                                            <li class="active" id="progres_compro"><strong>Tipo</strong>
                                                            </li>
                                                            <li id="account"><strong>Informacion</strong>
                                                            </li>
                                                            <li id="cart_buy"><strong>Detalle</strong></li>
                                                            <li id="payment"><strong>Pago</strong></li>
                                                            <li id="confirm"><strong>Completado</strong></li>
                                                        </ul>
                                                        <!-- fieldsets -->
                                                        <fieldset>
                                                            <div class="form-card">
                                                                <h2 class="fs-title">Tipo de comprobante</h2>
                                                                <div class="radio-group">
                                                                    <label class="pay">Seleccione el tipo de comprobante</label>
                                                                    <select name="comprobante" id="comprobante"
                                                                        class="custom-select">
                                                                        <option value="" selected>-Seleccione una opccion-
                                                                        </option>
                                                                        <option value="boleta">Boleta</option>
                                                                        <option value="factura">Factura</option>
                                                                        <option value="orden">Orden</option>
                                                                    </select>
                                                                    <br>
                                                                    <label id="val_compro" class="val_compro" style="color: red; display: none;" >Seleccione una opccion correcta*</label>
                                                                </div>
                                                            </div>
                                                            <input id="next_1" type="button" name="next" class="next action-button"
                                                                value="Next Step" disabled/>
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-card" id="_fielboleta" class="_fielboleta"
                                                                style="display: none;">
                                                                <h2 class="fs-title">Ingrese el DNI</h2>
                                                                <input type="number" id="dni" name="dni"
                                                                    placeholder="DNI" />
                                                                    
                                                                <div id="nomb_apel" class="nomb_apel"
                                                                    style="display: none;">
                                                                    <label class="pay">Nombres y apellidos
                                                                        *</label>
                                                                    <input type="text" name="nombre_apel" id="nombre_apel" disabled placeholder="--"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-card" id="_fielfactura"
                                                                class="_fielfactura" style="display: none;">
                                                                <h2 class="fs-title">Ingrese el RUC</h2>
                                                                <input type="number" id="ruc" name="ruc"
                                                                    placeholder="123..." />
                                                                <div id="ruc_info" class="ruc_info"
                                                                    style="display: none;">
                                                                    <label class="pay">Nombres titular
                                                                        *</label>
                                                                    <input type="text" name="nombre_apel" disabled />
                                                                    <label class="pay">Nombre empresa
                                                                        *</label>
                                                                    <input type="text" name="nom_empre" id="nom_empre" disabled />
                                                                    <input type="text" name="direccion" id="direccion" 
                                                                        disabled />
                                                                </div>
                                                            </div>
                                                            <input type="button" name="previous"
                                                                class="previous action-button-previous"
                                                                value="Previous" />
                                                            <input id="next_2" type="button" name="next" class="next action-button"
                                                                value="Next Step" />
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="form-card">
                                                                <h2 class="fs-title">Selecione de producto</h2>
                                                                <label class="pay">Ingrese el nombre del producto
                                                                    *</label>
                                                                <input type="text" id="pro_name" class="pro_name"
                                                                    name="pro_name" placeholder="Ingrese nombre" />
                                                                <div id="card_venta" class="card_venta"
                                                                    style="display: none;">
                                                                    <label class="pay">Cantidad *</label>
                                                                    <input class="col-sm-2" type="text" name="lname"
                                                                        placeholder="0" />
                                                                    <label class="pay">Costo *</label>
                                                                    <input class="col-sm-4" type="text" name="lname"
                                                                        placeholder="S/." />
                                                                    <label class="pay">Stock*</label>
                                                                    <input class="col-sm-2" type="text" name="lname"
                                                                        placeholder="0" />
                                                                    <label class="pay">Sub Total *</label>
                                                                    <input class="col-sm-3" type="text" name="lname"
                                                                        placeholder="S/.0" />
                                                                    <button
                                                                        class="btn btn-dark ti-shopping-cart"></button>
                                                                </div>
                                                                <table class="table">
                                                                    <th>Nro</th>
                                                                    <th>Descricion</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Precio</th>
                                                                    <th>Sub total</th>
                                                                    <th>Edit</th>
                                                                    <tbody style="color: #000000;">
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Coffe</td>
                                                                            <td>2</td>
                                                                            <td>S/.5</td>
                                                                            <td>S/.10</td>
                                                                            <td><button
                                                                                    class="btn btn-danger ti-trash"></button>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <label class="pay">IGV</label>
                                                                <input class="col-sm-2" type="number" name="phno"
                                                                    placeholder="0.8" disabled />
                                                                <label class="pay">TOTAL</label>
                                                                <input class="col-sm-2" type="number" name="phno_2"
                                                                    placeholder="S/.0" />
                                                            </div>
                                                            <input type="button" name="previous"
                                                                class="previous action-button-previous"
                                                                value="Previous" />
                                                            <input id="next_3" type="button" name="next" class="next action-button"
                                                                value="Next Step" />
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="form-card">
                                                                <h2 class="fs-title">Informacion de pago</h2>
                                                                <label class="pay">Seleccione el tipo de pago
                                                                        *</label>
                                                                <select name="tip_pago" id="tip_pago"
                                                                    class="custom-select" style="width: 200px;">Tipo
                                                                    de pago
                                                                    <option value="">-Seleccione una opccion-
                                                                    </option>
                                                                    <option value="efectivo">Efectivo</option>
                                                                    <option value="targeta">Targeta</option>
                                                                </select>
                                                                <div id="tipo_efectivo" class="tipo_efectivo" style="display: none;">
                                                                <label class="pay">Informacion adicional*</label>
                                                                    <input type="text" name="holdername"
                                                                        placeholder="" />
                                                                </div>
                                                                <div id="tipo_targeta" class="tipo_targeta"
                                                                style="display: none;">
                                                                    <div class="radio-group">
                                                                        <div class='radio' data-value="credit"><img
                                                                                src="https://i.imgur.com/XzOzVHZ.jpg"
                                                                                width="200px" height="100px"></div>
                                                                        <div class='radio' data-value="paypal"><img
                                                                                src="https://i.imgur.com/jXjwZlj.jpg"
                                                                                width="200px" height="100px"></div>
                                                                        <br>
                                                                    </div>
                                                                    <label class="pay">Card Holder Name*</label>
                                                                    <input type="text" name="holdername"
                                                                        placeholder="" />
                                                                    <div class="row">
                                                                        <div class="col-9">
                                                                            <label class="pay">Card Number*</label>
                                                                            <input type="text" name="cardno"
                                                                                placeholder="" />
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <label class="pay">CVC*</label>
                                                                            <input type="password" name="cvcpwd"
                                                                                placeholder="***" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <label class="pay">Expiry Date*</label>
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <select class="list-dt" id="month"
                                                                                name="expmonth">
                                                                                <option selected>Month</option>
                                                                                <option>January</option>
                                                                                <option>February</option>
                                                                                <option>March</option>
                                                                                <option>April</option>
                                                                                <option>May</option>
                                                                                <option>June</option>
                                                                                <option>July</option>
                                                                                <option>August</option>
                                                                                <option>September</option>
                                                                                <option>October</option>
                                                                                <option>November</option>
                                                                                <option>December</option>
                                                                            </select>
                                                                            <select class="list-dt" id="year"
                                                                                name="expyear">
                                                                                <option selected>Year</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="button" name="previous"
                                                                class="previous action-button-previous"
                                                                value="Previous" />
                                                            <input id="next_4" type="button" name="make_payment"
                                                                class="next action-button" value="Confirm" disabled/>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="form-card">
                                                                <h2 class="fs-title text-center">Success !</h2>
                                                                <br><br>
                                                                <div class="row justify-content-center">
                                                                    <div class="col-3">
                                                                        <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                                            class="fit-image">
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                                <div class="row justify-content-center">
                                                                    <div class="col-7 text-center">
                                                                        <h5>You Have Successfully Signed Up</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
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
        <script src="views/venta/js/venta.js"></script>
        <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors 
    <script src="./../../vendor/global/global.min.js"></script>
    <script src="./../../js/quixnav-init.js"></script>
    <script src="./../../js/custom.min.js"></script>

    <script src="./../../vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="./../../vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src="./../../js/plugins-init/jquery.validate-init.js"></script>-->
    <!-- Datatable 
    <script src="./../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./../../js/plugins-init/datatables.init.js"></script>
-->
    <!-- Form step init 
    <script src="./../../js/plugins-init/jquery-steps-init.js"></script>

    <script src="js/multiStepForm.js"></script>
    <script src="js/venta.js"></script>-->
