<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CondGuard</title>
    <link rel="icon" type="image/x-icon" href="\assets\img/ico.png">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
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
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de nuevo!</h1>
                                    </div>
                                    <?php if(session()->getFlashdata('error') != ''){ ?>
                                        <a href="#" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                            <span class="text"> <?= session()->getFlashdata('error') ?></span>
                                        </a>
                                    <?php } ?>
                                    <br><br>

                                    <form action="<?= base_url('login/signin') ?>" method="post" class="user" >
                                        <div class="form-group">
                                            <input class="form-control" type="email" id="email" name="email" placeholder="Correo electrónico"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            title="Correo electrónico ej: nombre@mail.com"
                                            value="<?= isset($item) ? $item['email'] : ''; ?>" required="" />
                                  
                                            <div class="invalid-feedback">
                                            Invalido, debe ingresar un correo electrónico valido, ej:nombre@mail.com.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <input class="form-control" type="password" id="password" name="password" placeholder="Contraseña"
                                                data-bs-toggle="tooltip" data-bs-placement="right" title="Ingrese su contraseña."
                                                value="<?= isset($item) ? $item['password'] : ''; ?>" required="" />
                                         
                                                <div class="invalid-feedback">
                                                Invalido, debe ingresar su contraseña.
                                                </div>
                                        </div>
                                   
                                        <input class="btn btn-primary btn-user btn-block" style="width:100%"
                        type="submit" value="Iniciar Sesión" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Iniciar Sesión" />
                                      
                                        <hr>
                                       
                                    </form>
                                   
                                    <div class="text-center">
                                        <a class="small" href="#">¿Olvidaste la contraseña?</a>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
</body>
</html>