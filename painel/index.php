<?php
require_once 'header.php';
?>
<body>
    <?php
    require_once 'navbar.php';
    if($_SESSION['tipo'] == 1){
        require_once 'painel_admin.php';
    } 
    else if($_SESSION['tipo'] == 2){
        require_once 'painel_tecnico.php';
    } 
    else if($_SESSION['tipo'] == 3){
        require_once 'painel_cliente.php';
    }
    ?>
</body>