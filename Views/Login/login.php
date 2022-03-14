<!-- Header -->
<?php include('./Views/Components/Header.php'); ?>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Inicio de Sesión</h1>
                                </div>
                                <form class="user" method="POST" id="form-login">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            name="user" id="user" aria-describedby="emailHelp"
                                            placeholder="example@example.com">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            name="pass" id="pass" placeholder="Contraseña">
                                    </div>
                                    <input name="" id="btn_set_login" class="btn btn-primary btn-user btn-block" type="submit" value="Ingresar">
                                    </input>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Olvido su contraseña?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Crear Cuenta!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- Footer -->
<?php include('./Views/Components/Footer.php'); ?>





