<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <a class="navbar-brand" href="#">Summa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/employees">Empleados</a>
            </li>
        </ul>
    </div>
    <form class="form-inline" action="employees">
        <input name="id" class="form-control mr-sm-2" type="number" placeholder="Ingrese un ID" aria-label="Search" value="<?= $_GET['id'] ?>">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Empleado</button>
    </form>
</nav>