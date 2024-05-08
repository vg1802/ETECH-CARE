<?php
require_once 'header.php';
require_once 'chamado/function.php';
require_once 'chamado/modal.php';
require_once 'chamado/script.php';
$pagina = 'categoria.php';
?>

<body>
  <?php require_once 'navbar.php'; ?>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10">
        <h2>Categorias de chamado</h2>
      </div>
      <div class="col-sm-2">
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#cadastrar_cat">
          + Categoria
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
                <th>Nome</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $listar = ListarCategoria();
              if ($listar !== null) {
                while ($l = $listar->fetch_array()) {
              ?>
                  <tr>
                    <td class="text-center text-capitalize">
                      <?php echo $l['cd_categoria']; ?>
                    </td>
                    <td>
                      <?php echo $l['nm_categoria']; ?>
                    </td>
                    <td>
                      <?php echo $l['st_categoria']; ?>
                    </td>
                    <td class="text-center">
                      <button class="btn btn-info btn-sm editar" data-toggle="modal" data-target="#editar_categoria" cd="<?php echo $l['cd_categoria']; ?>" categoria="<?php echo $l['nm_categoria']; ?>" title="editar">
                        <i class="bi bi-pencil"></i>
                      </button>
                      <button class="btn btn-danger btn-sm excluir" data-toggle="modal" data-target="#excluir_categoria" cd="<?php echo $l['cd_categoria']; ?>" title="excluir">
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
      CadastrarCategoria(
        $_POST['nome'],
        $pagina
      );
    } else if ($_POST['action'] == "Alterar") {
      EditarCategoria(
        $_POST['cd'],
        $_POST['categoria'],
        $pagina
      );
    } else if ($_POST['action'] == "Excluir") {
      ExcluirCategoria(
        $_POST['cd'],
        $pagina
      );
    }
  }
  ?>
</body>