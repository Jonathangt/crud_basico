<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="navbar-collapse">
        <ul class="navbar-nav">
            <li @click="menu=0"  class="nav-item active">
                <a class="nav-link" href="#">Comprar</a>
            </li>
            <li @click="menu=1" class="nav-item active">
                <a class="nav-link" href="#">Historial de Compras</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li @click="menu=2" class="nav-item active">
                <a class="nav-link" href="#" data-target="#myModal" data-toggle="modal">Editar Informacion</a>
            </li>
        </ul>
    </div>
</nav>