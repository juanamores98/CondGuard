<div class="container" style="padding-bottom: 160px;">

    <section class="py-5">
        <div
            class="text-white bg-secondary border rounded border-0 border-primary d-block flex-column justify-content-between flex-lg-row bounce animated p-4 p-md-3">
            <div class="pb-2 pb-lg-1">
                <h2 class="fw-bold mb-2">Mantenimientos</h2>
            </div>
            <div class="my-0">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('administrator') ?>">Administradores</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('assembly') ?>">Asamblea</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('relative') ?>">Acreditados</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('common_area') ?>">Areas
                            Comunes</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('authorized') ?>">Autorizados</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active" data-bss-hover-animate="pulse"
                            href="<?= base_url('condo_owner') ?>">Condonominos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('assembly_voting') ?>">Votaciones</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('relative_vehicle') ?>">Vehiculos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('officer') ?>">Oficiales</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('patrol') ?>">Patrullas</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="pulse"
                            href="<?= base_url('vote') ?>">Votos</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="card card-body ">
        <a href="<?php echo base_url('condo_owner/new') ?>" class="btn btn-primary" role="button"
            style="font-size: 30px; margin-bottom: 10px;">Nuevo <i class="fa fa-plus fs-2"></i></a>
        <!--DATA TABLE-->
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered" style="width: 100%">

                <thead>
                    <tr>
                        <th>Identificacion</th>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Telefono</th>
                        <th>Filial</th>
                        <th>Pago</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $item['identity'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['vehicle_plate'] ?> </td>
                        <td><?= $item['reason'] ?> </td>
                        <td><?= $item['entry_at'] ?> </td>
                        <td><?= $item['out_at'] ?> </td>
                        <td><?= $item['expiration_at'] ?> </td>
                        <td>
                            <a href="<?php echo base_url('condo_owner/edit?id=' . $item['condo_owner_id']) ?>"
                                class="btn btn-warning " role="button">Editar <i class="far fa-edit"></i></a>
                            <a href="<?php echo base_url('condo_owner/delete?id=' . $item['condo_owner_id']) ?>"
                                class="btn btn-danger " role="button">Eliminar <i class="fas fa-eraser"></i></a>

                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>identificacion</th>
                        <th>Nombre</th>
                        <th>Placa de vehiculo</th>
                        <th>Motivo</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Expiracion</th>
                        <th>Opciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#datatable').DataTable({
        responsive: {
            breakpoints: [{
                    name: 'bigdesktop',
                    width: Infinity
                },
                {
                    name: 'meddesktop',
                    width: 1480
                },
                {
                    name: 'smalldesktop',
                    width: 1280
                },
                {
                    name: 'medium',
                    width: 1188
                },
                {
                    name: 'tabletl',
                    width: 1024
                },
                {
                    name: 'btwtabllandp',
                    width: 848
                },
                {
                    name: 'tabletp',
                    width: 768
                },
                {
                    name: 'mobilel',
                    width: 480
                },
                {
                    name: 'mobilep',
                    width: 320
                }
            ]
        }
    });
});
</script>