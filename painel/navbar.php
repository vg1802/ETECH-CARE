<?php
require_once 'header.php';
?>
<nav class="navbar navbar-expand-lg fundo-azul navbar-dark">
    <a class="navbar-brand" href="index.php">EtechCare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-pc-display-horizontal"></i>
                    Patrimônio
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="tipo_equipamento.php">
                        <i class="bi bi-tags"></i>&nbsp
                        Tipo
                    </a>
                    <a class="dropdown-item" href="modelo_equipamento.php">
                        <i class="bi bi-kanban"></i>&nbsp
                        Modelo
                    </a>
                    <a class="dropdown-item" href="local_equipamento.php">
                        <i class="bi bi-geo-alt"></i>&nbsp
                        Local
                    </a>
                    <a class="dropdown-item" href="equipamento.php">
                        <i class="bi bi-pc-display"></i>&nbsp
                        Equipamento
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-card-checklist"></i>
                    Chamados
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="abrir_chamado.php">
                        <i class="bi bi-file-earmark-check"></i>&nbsp
                        Abertos
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-file-diff"></i>&nbsp
                        Pendentes
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-file-earmark-x"></i>&nbsp
                        Fechados
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="categoria.php">
                        <i class="bi bi-bookmark-plus"></i>&nbsp
                        Categorias
                    </a>
                    <div class="dropdown-divide">
                        <a class="dropdown-item" href="ambiente.php">
                            <i class="bi bi-house-add"></i>&nbsp
                            Ambientes
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-files"></i>
                    Relatórios
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-file-person"></i>&nbsp
                        Chamados - Usuário
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-journal-text"></i>&nbsp
                        Chamados - Patrimônio
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-calendar-date"></i>&nbsp
                        Chamados - Período
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-arms-up"></i>
                    <?php
                    echo $_SESSION['user'];
                    ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-person-circle"></i>&nbsp
                        Perfil
                    </a>
                    <a class="dropdown-item" href="logoff.php">
                        <i class="bi bi-box-arrow-right"></i>&nbsp
                        Sair
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>