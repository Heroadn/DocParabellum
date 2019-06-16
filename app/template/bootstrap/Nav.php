<?php
    $controller = $this->getController();
    $action = $this->getAction();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo ($action == 'introducao')? 'active' : ''; ?>" href="/Index/introducao"    class="list-group-item list-group-item-action bg-light">Introdução</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($action == 'documentation')? 'active' : ''; ?>" href="/Index/documentation">Documentação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($action == 'examples')? 'active' : ''; ?>" href="/Index/examples">Exemplos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($action == 'downloads')? 'active' : ''; ?>" href="/Index/downloads">Downloads</a>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>