<?php
require_once 'header.php';
if ($_POST) {
  ValidarLogin($_POST['email'], $_POST['password']);
}
function ValidarLogin($email, $senha)
{
  $sql = 'select
            cd_usuario,
            nm_usuario,
            id_tipo_usuario,
            st_usuario
            from tb_usuario
            where
            nm_email = "' . $email . '" and
            cd_senha = md5("' . $senha . '")';
  $res = $GLOBALS['con']->query($sql);
  if ($res->num_rows == 1) {
    $e = $res->fetch_array();
    if ($e['st_usuario'] == "1") {
      $_SESSION['id'] = $e['cd_usuario'];
      $_SESSION['user'] = $e['nm_usuario'];
      $_SESSION['tipo'] = $e['id_tipo_usuario'];
      Confirma("Bem vindo", "painel/index.php");
    } else if ($e['st_usuario'] == "2") {
      $_SESSION['id'] = $e['cd_usuario'];
      //redirecionar para recuperar_senha.php
    } else {
      Erro("Ops! Você não é um usuário ativo nesse sistema!");
    }
  } else {
    Erro("Ops! Usuário e/ou senha inválidos");
  }
}
?>
<script>
  $(document).ready(function () {
    $('#myModal').modal('show');
  });
  $('#myModal').on('shown.bs.modal', function () {
    $('myInput').trigger('focus')
  });
  console.log('Robson Tobias');
</script>