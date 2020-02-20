<?php require('partials/head.php'); ?>

<h1>Crear Empleado</h1>

    <form method="POST" action="/employees">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">Nombre</label>
                <input type="text" class="form-control" name="first_name" id="first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control" name="last_name" id="last_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="age">Edad</label>
                <input type="number" class="form-control" name="age" id="age" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="type">Tipo</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Elija un tipo de Empleado</option>
                    <option value="developer">Programador</option>
                    <option value="designer">Diseñador</option>
                </select>
            </div>
            <div class="form-group col-md-4" id="desempeño" style="display: none;">
                <label for="job">Desempeño</label>
                <select name="job" id="job" class="form-control" required>
                    <option value="">Elija un desempeño para el empleado</option>
                    <option value="PHP">PHP</option>
                    <option value="Net">Net</option>
                    <option value="Python">Python</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
<?php require('partials/footer.php'); ?>


<script>
    $('#type').on('change', function() {

        $('#job').html('');

        $('#desempeño').show();

        let type = $(this).children("option:selected").val();

        if (type === 'developer') {
            $('#job').append(`<option value="PHP">PHP</option>`);
            $('#job').append(`<option value="Net">Net</option>`);
            $('#job').append(`<option value="Python">Python</option>`);
        } else {
            $('#job').append(`<option value="Gráfico">Gráfico</option>`);
            $('#job').append(`<option value="Web">Web</option>`);
        }
    })
</script>
