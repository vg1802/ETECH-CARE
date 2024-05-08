<?php
require_once 'header.php';
require_once 'equipamento/function.php';
require_once 'equipamento/modal.php';
require_once 'equipamento/script.php';
$pagina = 'equipamento.php';
?>

<body>
    <?php require_once 'navbar.php'; ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <h2>Equipamentos</h2>
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#cadastrar_equipamento">
                    + Equipamento
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
                                <th>Nº Série</th>
                                <th>Nº Patrimônio</th>
                                <th>Descrição</th>
                                <th>Local do Equipamento</th>
                                <th>Tipo de Equipamento</th>
                                <th>Modelo do Equipamento</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $listar = ListarEquipamento();
                            if ($listar !== null) {
                                while ($l = $listar->fetch_array()) {
                            ?>
                                    <tr>
                                        <td class="text-center text-capitalize">
                                            <?php echo $l['cd_equipamento']; ?>
                                        </td>
                                        <td>
                                            <?php echo $l['nr_serie']; ?>
                                        </td>
                                        <td>
                                            <?php echo $l['nr_patrimonio']; ?>
                                        </td>
                                        <td>
                                            <?php echo $l['ds_equipamento']; ?>
                                        </td>
                                        <td>
                                            <?php echo $l['nm_local']; ?>
                                        </td>
                                        <td>
                                            <?php echo $l['nm_tipo_equipamento']; ?>
                                        </td>
                                        <td>
                                            <?php echo $l['nm_modelo']; ?>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-sm editar" data-toggle="modal" data-target="#editar_equipamento" cd="<?php echo $l['cd_equipamento']; ?>" local="<?php echo $l['id_local']; ?>" tipo="<?php echo $l['id_tipo_equipamento']; ?>" modelo="<?php echo $l['id_modelo']; ?>" serie="<?php echo $l['nr_serie']; ?>" patrimonio="<?php echo $l['nr_patrimonio']; ?>" descricao="<?php echo $l['ds_equipamento']; ?>">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm excluir" data-toggle="modal" data-target="#excluir_equipamento" cd="<?php echo $l['cd_equipamento']; ?>" title="excluir">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
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
            CadastrarEquipamento(
                $_POST['serie'],
                $_POST['patrimonio'],
                $_POST['descricao'],
                $_POST['local'],
                $_POST['tipo'],
                $_POST['modelo'],
                $pagina
            );
        } else if ($_POST['action'] == "Alterar") {
            EditarEquipamento(
                $_POST['cd'],
                $_POST['serie'],
                $_POST['patrimonio'],
                $_POST['descricao'],
                $_POST['local'],
                $_POST['tipo'],
                $_POST['modelo'],
                $pagina
            );
        } else if ($_POST['action'] == "Excluir") {
            ExcluirEquipamento(
                $_POST['cd'],
                $pagina
            );
        }
    }
    ?>
</body>