<?php
require_once 'header.php';
require_once 'chamado/function.php';
require_once 'chamado/modal.php';
require_once 'chamado/script.php';
$pagina = 'abrir_chamado.php';
?>

<body>
  <?php require_once 'navbar.php'; ?>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10">
        <h2>Chamados</h2>
      </div>
      <div class="col-sm-2">
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#cadastrar_chamado">
          + Chamado
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
                <th>Descrição</th>
                <th>Status</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Usuario</th>
                <th>Equipamento</th>
                <th></th>
              </tr>
            </thead>
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