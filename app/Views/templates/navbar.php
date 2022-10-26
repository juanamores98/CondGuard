<!--Navbar-->
<nav class="navbar navbar-dark navbar-expand-md  bg-dark py-3">
    <!--class='sticky-top'-->
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" data-bss-hover-animate="pulse" href="<?= base_url() ?>"
            style="height: 50px">
            <img class="rounded-circle img-fluid" style="margin-right: 5px; height: 75px; width: 75px"
                src="/assets/img/CondominioLogoCustomOnly.png" width="0" height="0" loading="auto" /><span
                class="fs-3 text-light" style="font-family: 'IM Fell Great Primer SC', serif">Hacienda el Coyol</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-5">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active fw-semibold" data-bss-hover-animate="pulse" href="<?= base_url() ?>"
                        style="
              padding-left: 11px;
              --bs-primary: #fec006;
              --bs-primary-rgb: 254, 192, 6;
              color: #fec006;
            ">Inicio</a>
                </li>
                <?php
                if (session()->get('isLoggedIn')) { ?>
                <li class="nav-item text-warning">
                    <a class="nav-link fw-semibold " data-bss-hover-animate="pulse"
                        href="<?= base_url('reservation/common_areas') ?>" style="
              padding-left: 11px;
              --bs-primary: #fec006;
              --bs-primary-rgb: 254, 192, 6;
              color: #fec006;
            ">Reservar</a>
                </li>
                <?php } else { ?>
                <a type="button" class="nav-link fw-semibold" data-bs-toggle="popover" data-bs-title="Reservar"
                    data-bs-content="Inicie sesión para poder reservar!" style="
              padding-left: 11px;
              --bs-primary: #fec006;
              --bs-primary-rgb: 254, 192, 6;
              color: #fec006;
            ">Reservar</a>
                <?php } ?>


                <li class="nav-item text-warning visually-hidden">
                    <a class="nav-link fw-semibold " data-bss-hover-animate="pulse" href="#" style="
              padding-left: 11px;
              --bs-primary: #fec006;
              --bs-primary-rgb: 254, 192, 6;
              color: #fec006;
            ">Registrarse</a>
                </li>
                <?php if (session()->get('isLoggedIn') != true) {
                ?>
                <li class="nav-item text-warning ">
                    <a class="nav-link fw-bold link-light bg-primary" data-bss-hover-animate="pulse"
                        href="<?= base_url('login') ?>" style="border-radius: 8px; padding-left: 11px">Iniciar
                        Sesión</a>
                </li>
                <?php
                } else { ?>
                <li class="nav-item dropdown ">
                    <a class="dropdown-toggle nav-link fw-semibold" aria-expanded="false" data-bs-toggle="dropdown"
                        data-bss-hover-animate="pulse" href="#" style="
              padding-left: 11px;
              --bs-primary: #fec006;
              --bs-primary-rgb: 254, 192, 6;
              color: #fec006;
            ">Opciones</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" data-bss-hover-animate="pulse"
                            href="<?= base_url() . '/' . session()->get('type') . '/profile?id=' . session()->get(session()->get('type') . '_id') ?>">Perfil</a>
                        <?php if (session()->get('type') == 'administrator') { ?>
                        <a class="dropdown-item" data-bss-hover-animate="pulse"
                            href="<?= base_url('maintenance') ?>">Mantenimientos</a>
                        <?php } ?>
                        <?php if (session()->get('type') == 'condo_owner') { ?>
                        <a class="dropdown-item" data-bss-hover-animate="pulse"
                            href="<?= base_url('assembly_voting/preview') ?>">Votación</a>
                        <?php } ?>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" data-bss-hover-animate="pulse"
                            href="<?= base_url('login/signout') ?>">Cerrar Sesión</a>
                    </div>
                </li>
                <?php
                } ?>

            </ul>
        </div>
    </div>
</nav>