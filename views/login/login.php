<style>
    .h-100 {
        background-image: url(https://cumbres-travel.com/wp-content/uploads/2022/02/cumbres_travel_ciudadymisti.jpg);
    }

    div.no-gutters {
        background-color: #0c181c;
        border-radius: 10%;
    }

    div.authincation-content {
        background-color: #0c181c;
        border-radius: 10%;
    }
</style>
<div class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-4" style="margin-top: 6%;">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <Strong>
                                        <h2 class="text-center mb-4" style="color:#5c5e36;">Al pie del Misti</h2>
                                    </Strong>
                                    <form method="post">
                                        <div class="form-group">
                                            <!--<label><strong>Username</strong></label>-->
                                            <input type="text" id="ingUsuario" name="ingUsuario" class="form-control"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <!--<label><strong>Username</strong></label>-->
                                            <select class="form-control" name="txt_sede" id="txt_sede"
                                                style="display: none;">
                                                <option value="1">Jerusalen</option>
                                                <option value="2">Yanahuara</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!--<label><strong>Contraseña</strong></label>-->
                                            <input type="password" id="ingPassword" name="ingPassword"
                                                class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label"
                                                        for="basic_checkbox_1">Recordarme</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">No recuerdo mi contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                Ingresar</button>
                                        </div>
                                        <?php

                                        $login = new controladorLogin();
                                        $login->ctrlLogin();

                                        ?>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Solicitar registro - <a class="text-primary"
                                                href="./page-register.html">Click
                                                aqui</a></p>
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
        Scripts
    ***********************************-->
<!-- Required vendors -->