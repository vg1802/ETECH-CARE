<?php
require_once 'header.php';
require_once 'equipamento/function.php';
require_once 'equipamento/modal.php';
require_once 'equipamento/script.php';
$pagina = 'tipo_equipamento.php';
?>

<body>
    <?php require_once 'navbar.php'; ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <h2>Tipos de Equipamentos</h2>
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#cadastrar_tipo">
                    + Tipo Equipamento
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Equipamento</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listar = ListarTipoEquipamento();
                            if ($listar !== null){
                            while ($l = $listar->fetch_array()) {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo $l['cd_tipo_equipamento']; ?>
                                    </td>
                                    <td>
                                        <?php echo $l['nm_tipo_equipamento']; ?>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-info btn-sm editar" data-toggle="modal"
                                            data-target="#editar_tipo" cd="<?php echo $l['cd_tipo_equipamento']; ?>"
                                            equipamento="<?php echo $l['nm_tipo_equipamento']; ?>" title="editar">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm excluir" data-toggle="modal"
                                            data-target="#excluir_tipo" cd="<?php echo $l['cd_tipo_equipamento']; ?>"
                                            title="excluir">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else{
                            echo 'Sem registros!';
                        }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (!empty($_POST)) {
        if ($_POST['action'] == "Cadastrar") {
            CadastrarTipoEquipamento(
                $_POST['tipo'],
                $pagina
            );
        }
        else if ($_POST['action'] == "Alterar") {
            EditarTipoEquipamento(
                $_POST['cd'],
                $_POST['tipo'],
                $pagina
            );
        }
        else if ($_POST['action'] == "Excluir") {
            ExcluirTipoEquipamento(
                $_POST['cd'],
                $pagina
            );
        }
    }
    ?>
</body>