<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema Ingreso</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body id="page-top">

    <?php
  $data_email = array(
    array(
      'type' => 'email',
      'name' => 'email',
      'class' => 'form-control form-control-user',
      'placeholder' => 'Digite su correo electrónico',
      'required'  => '',
      'oninvalid' => 'this.setCustomValidity(`Ingrese su correo electrónico`)',
      'oninput' => 'this.setCustomValidity(``)'
    ),
    array(
      'type' => 'password',
      'name' => 'password',
      'class' => 'form-control form-control-user',
      'placeholder' => 'Digite su contraseña',
      'required'  => '',
      'oninvalid' => 'this.setCustomValidity(`Ingrese su contraseña`)',
      'oninput' => 'this.setCustomValidity(``)'
    )
  );
  ?>

    <body class="bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Sistema de Control de Acceso</h1>
                                            <?php if (isset($_GET['error_login'])) {
                        if ($_GET['error_login'] == 1) {
                          echo "Email Incorrecto";
                        } else {
                          echo "Password Incorrecto";
                        }
                      }
                      ?>
                                        </div>
                                        <?= form_open('login/signin', 'class="user" '); ?>

                                        <div class="form-group">
                                            <?= form_input($data_email[0]); ?>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <?= form_input($data_email[1]); ?>
                                        </div>
                                        <br>
                                        <?= form_submit("Ingresar", 'Ingresar', "class = 'btn btn-primary btn-user btn-block' "); ?>
                                        <hr>
                                        <!--<a href="<?php echo base_url(); ?>index.php/login/registro" class="btn btn-success btn-user btn-block">
                      Crear una cuenta
                    </a>
                    <a href="<?php echo base_url(); ?>index.php/login/pass_olvidado" class="btn btn-warning btn-user btn-block">
                      Olvide mi contraseña
                    </a>-->
                                        <?= form_close(); ?>
                                        <span>Correo: castro@mail.com </span>
                                        <span> / Contra: Hola1234@</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>