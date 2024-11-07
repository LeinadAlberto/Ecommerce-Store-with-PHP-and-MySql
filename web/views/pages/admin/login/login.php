<div class="login-page">

    <div class="login-box">
    
        <div class="card card-outline card-dark">

            <div class="card-header text-center">
                <h3><b>Administradores</h3>
            </div>

            <div class="card-body">
            
                <form method="post">

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="loginAdminEmail">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="loginAdminPass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recordar
                                </label>
                            </div>
                        </div><!-- /.col -->

                        <div class="col-4">
                            <button type="submit" class="btn btn-default templateColor btn-block">Ingresar</button>
                        </div><!-- /.col -->

                        <?php 

                            require_once "controllers/admins.controller.php";

                            $login = new AdminsController();

                            $login -> login();

                        ?>


                    </div><!-- /.row -->

                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">Recordar Contraseña</a>
                </p>
            
            </div><!-- /.card-body -->

        </div><!-- /.card -->

    </div><!-- /.login-box -->

</div><!-- /.login-page -->