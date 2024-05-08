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
            <tbody>
              <?php
              $listar = ListarChamado();
              if ($listar !== null) {
                while ($l = $listar->fetch_array()) {
              ?>
                  <tr>
                    <td class="text-center text-capitalize">
                      <?php echo $l['cd_chamado']; ?>
                    </td>
                    <td>
                      <?php echo $l['ds_chamado']; ?>
                    </td>
                    <td>
                      <?php echo $l['st_chamado']; ?>
                    </td>
                    <td>
                      <?php echo $l['dt_registro_chamado']; ?>
                    </td>
                    <td>
                      <?php echo $l['nm_categoria']; ?>
                    </td>
                    <td>
                      <?php echo $l['nm_usuario']; ?>
                    </td>
                    <td>
                      <?php echo $l['nm_tipo_equipamento']; ?>
                    </td>
                    <td class="text-center">
                      <button class="btn btn-info btn-sm editar" data-toggle="modal" data-target="#editar_chamado" cd="<?php echo $l['cd_chamado']; ?>"  title="editar">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-danger btn-sm excluir" data-toggle="modal" data-target="#excluir_chamado" cd="<?php echo $l['cd_chamado']; ?>" title="excluir">
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
  $userId = $_SESSION['id'];
  $status = 1;
  if (!empty($_POST)) {
    if ($_POST['action'] == "Cadastrar") {
      CadastrarChamado(
        $_POST['desc'], // Descrição do chamado
        $status,        // Status do chamado
        $_POST['cat'],  // ID da categoria
        $userId,        // ID do usuário
        $_POST['equipamento'], // ID do equipamento
        $pagina         // Página para redirecionamento
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