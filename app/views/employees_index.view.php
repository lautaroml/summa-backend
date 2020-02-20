<?php require('partials/head.php'); ?>

<h1>Empleados</h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Tipo</th>
            <th>Se desempeña en</th>
        </tr>
    </thead>
    <?php foreach ($employees as $employee) : ?>
        <tr>
            <td>
                <?= $employee->getId(); ?>
            </td>
            <td>
                <?= $employee->getFirstName(); ?>
            </td>
            <td>
                <?= $employee->getLastName(); ?>
            </td>
            <td>
                <?= $employee->getAge(); ?>
            </td>
            <td>
                <?= $employee->getType(); ?>
            </td>
            <td>
                <?= $employee->getJob(); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

    <p>Edad promedio: <?= $avg; ?></p>

    <a class="btn btn-primary" href="/employees/create" role="button">Nuevo Empleado</a>

<?php require('partials/footer.php'); ?>