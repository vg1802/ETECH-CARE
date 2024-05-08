<?php
require_once 'header.php';
require_once 'equipamento/function.php';
require_once 'equipamento/modal.php';
require_once 'equipamento/script.php';
$pagina = 'modelo_equipamento.php';
?>

<body>
    <?php require_once 'navbar.php'; ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <h2>Modelo de Equipamentos</h2>
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#cadastrar_modelo">
                    + Modelo de Equipamento
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
                            $listar = ListarModeloEquipamento();
                            if ($listar !== null){
                            while ($l = $listar->fetch_array()) {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo $l['cd_modelo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $l['nm_modelo']; ?>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-info btn-sm editar" data-toggle="modal"
                                            data-target="#editar_modelo" cd="<?php echo $l['cd_modelo']; ?>"
                                            equipamento="<?php echo $l['nm_modelo']; ?>" title="editar">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm excluir" data-toggle="modal"
                                            data-target="#excluir_modelo" cd="<?php echo $l['cd_modelo']; ?>"
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
            CadastrarModeloEquipamento(
                $_POST['modelo'],
                $pagina
            );
        }
        else if ($_POST['action'] == "Alterar") {
            EditarModeloEquipamento(
                $_POST['cd'],
                $_POST['modelo'],
                $pagina
            );
        }
        else if ($_POST['action'] == "Excluir") {
            ExcluirModeloEquipamento(
                $_POST['cd'],
                $pagina
            );
        }
    }
    ?>
</body>