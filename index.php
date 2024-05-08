<?php
require_once 'header.php';
?>
<style>
    @media(max-width: 536px) {
        .container-fluid {
            margin-top: 45%;
        }
    }

    @media(min-width: 1024px) {
        .container-fluid {
            margin-top: 10%;
        }
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <img src="./img/logo-etec.png" alt="logotipo etec" style="width: 35%;"
                            class="img-fluid card-img-top">
                        <br>
                        Sistema de Gerenciamento de Manutenção
                    </div>
                    <div class="card-body">
                        <form method="post" action="validar.php" class="form-group">
                            <input type="email" name="email" placeholder="Seu e-mail" class="form-control" required>
                            <br>
                            <input type="password" name="password" placeholder="Seu senha" class="form-control"
                                required>
                            <br>
                            <input type="submit" name="action" class="btn btn-primary btn-block" value="Entrar">
                        </form>
                        <button class="btn btn-warning btn-block text-white" data-toggle="modal" data-target="#recuperar">Recuperar Senha</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="recuperar">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form method="post" class="form-group">
                    <div class="modal-header">
                        Recuperar Senha
                    </div>
                    <div class="modal-body">
                        <input type="email" name="email" placeholder="Seu e-mail" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-warning text-white" name="action" value="Recuperar Senha">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>