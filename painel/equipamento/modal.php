<!----------------------- CADASTRO DO TIPO DE EQUIPAMENTO ------------------------>
<!-- Cadastrar tipo Equipamento -->
<div class="modal fade" id="cadastrar_tipo" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Cadastrar Tipo de Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Tipo de Equipamento" name="tipo" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- editar tipo equipamento -->
<div class="modal fade" id="editar_tipo" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Editar Tipo de Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd" readonly="readonly">
                    <input type="text" class="form-control" placeholder="Tipo de Equipamento" name="tipo" id="tipo" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-info" value="Alterar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- excluir tipo equipamento -->
<div class="modal fade" id="excluir_tipo" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Excluir Tipo de Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-danger" value="Excluir" name="action">
                </div>
            </form>
        </div>
    </div>
</div>
<!----------------------- FIM DO CADASTRO DO TIPO DE EQUIPAMENTO ------------------------>

<!----------------------- CADASTRO DO MODELO DE EQUIPAMENTO ------------------------>
<!-- Cadastrar modelo equipamento -->
<div class="modal fade" id="cadastrar_modelo" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Cadastrar Modelo de Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Modelo de Equipamento" name="modelo" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- editar modelo equipamento -->
<div class="modal fade" id="editar_modelo" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Editar Modelo de Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd" readonly>
                    <input type="text" class="form-control" placeholder="Modelo de Equipamento" name="modelo" id="tipo" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-info" value="Alterar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- excluir modelo equipamento -->
<div class="modal fade" id="excluir_modelo" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Excluir Modelo de Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-danger" value="Excluir" name="action">
                </div>
            </form>
        </div>
    </div>
</div>
<!----------------------- FIM DO CADASTRO DO MODELO DE EQUIPAMENTO ------------------------>

<!----------------------- CADASTRO LOCAL DO EQUIPAMENTO ------------------------>
<!-- Cadastrar local -->
<div class="modal fade" id="cadastrar_local" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Cadastrar Local
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Informe o Local" name="local" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- editar local -->
<div class="modal fade" id="editar_local" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Editar Local
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd" readonly>
                    <input type="text" class="form-control" placeholder="Local do Equipamento" name="local" id="tipo" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-info" value="Alterar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- excluir local -->
<div class="modal fade" id="excluir_local" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Excluir Local
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-danger" value="Excluir" name="action">
                </div>
            </form>
        </div>
    </div>
</div>
<!----------------------- FIM DO CADASTRO DO LOCAL DO EQUIPAMENTO ------------------------>

<!----------------------- CADASTRO DE EQUIPAMENTO ------------------------>
<!-- Cadastrar equipamento -->
<div class="modal fade" id="cadastrar_equipamento" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Cadastrar Equipamento
                </div>
                <div class="modal-body">
                    <select name="local" class="form-control">
                        <option disabled selected>Selecione um local...</option>
                        <?php
                        $mostrar = ListarLocal();
                        if ($mostrar !== null) {
                            while ($m = $mostrar->fetch_array()) {
                                print '<option value="' . $m['cd_local'] . '">' . $m['nm_local'] . '</option>';
                            }
                        } else {
                            print 'Sem registros!';
                        }
                        ?>
                    </select><br>
                    <select name="tipo" class="form-control">
                        <option disabled selected>Selecione um tipo de Equipamento...</option>
                        <?php
                        $mostrar = ListarTipoEquipamento();
                        if ($mostrar !== null) {
                            while ($m = $mostrar->fetch_array()) {
                                print '<option value="' . $m['cd_tipo_equipamento'] . '">' . $m['nm_tipo_equipamento'] . '</option>';
                            }
                        } else {
                            print 'Sem registros!';
                        }
                        ?>
                    </select><br>
                    <select name="modelo" class="form-control">
                        <option disabled selected>Selecione um Modelo...</option>
                        <?php
                        $mostrar = ListarModeloEquipamento();
                        if ($mostrar !== null) {
                            while ($m = $mostrar->fetch_array()) {
                                print '<option value="' . $m['cd_modelo'] . '">' . $m['nm_modelo'] . '</option>';
                            }
                        } else {
                            print 'Sem registros!';
                        }
                        ?>
                    </select><br>
                    <input type="text" class="form-control" placeholder="Nº Série do Equipamento" name="serie" required><br>
                    <input type="text" class="form-control" placeholder="Nº Patrimônio do Equipamento" name="patrimonio" required><br>
                    <textarea class="form-control" placeholder="Descrição do Equipamento" name="descricao" rows="5" required></textarea><br>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- editar equipamento -->
<div class="modal fade" id="editar_equipamento" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Editar Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd" readonly>
                    <p class="font-weight-bold titulo">Local do equipamento:</p>
                    <select name="local" class="form-control" id="local">
                        <option disabled>Selecione um local...</option>
                        <?php
                        $mostrar = ListarLocal();
                        if ($mostrar !== null) {
                            while ($m = $mostrar->fetch_array()) {
                                echo '<option value="' . $m['cd_local'] . '">' . $m['nm_local'] . '</option>';
                            }
                        } else {
                            echo 'Sem registros!';
                        }
                        ?>
                    </select><br>
                    <p class="font-weight-bold titulo">Tipo do equipamento:</p>
                    <select name="tipo" class="form-control" id="tipo">
                        <option disabled>Selecione um tipo de Equipamento...</option>
                        <?php
                        $mostrar = ListarTipoEquipamento();
                        if ($mostrar !== null) {
                            while ($m = $mostrar->fetch_array()) {
                                print '<option value="' . $m['cd_tipo_equipamento'] . '">' . $m['nm_tipo_equipamento'] . '</option>';
                            }
                        } else {
                            print 'Sem registros!';
                        }
                        ?>
                    </select><br>
                    <p class="font-weight-bold titulo">Modelo do equipamento:</p>
                    <select name="modelo" class="form-control" id="modelo">
                        <option disabled>Selecione um Modelo...</option>
                        <?php
                        $mostrar = ListarModeloEquipamento();
                        if ($mostrar !== null) {
                            while ($m = $mostrar->fetch_array()) {
                                print '<option value="' . $m['cd_modelo'] . '">' . $m['nm_modelo'] . '</option>';
                            }
                        } else {
                            print 'Sem registros!';
                        }
                        ?>
                    </select><br>
                    <p class="font-weight-bold titulo">Nº Série do Equipamento:</p>
                    <input type="text" class="form-control" placeholder="Nº Série do Equipamento" name="serie" id="serie" required><br>
                    <p class="font-weight-bold titulo">Nº Patrimônio do equipamento:</p>
                    <input type="text" class="form-control" placeholder="Nº Patrimônio do Equipamento" name="patrimonio" id="patrimonio" required><br>
                    <p class="font-weight-bold titulo">Descrição do equipamento:</p>
                    <input type="text" class="form-control" placeholder="Descrição do equipamento" name="descricao" id="descricao" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-info" value="Alterar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- excluir equipamento -->
<div class="modal fade" id="excluir_equipamento" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Excluir Equipamento
                </div>
                <div class="modal-body">
                    <input type="text" name="cd" id="cd" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-danger" value="Excluir" name="action">
                </div>
            </form>
        </div>
    </div>
</div>
<!----------------------- FIM DO CADASTRO DE EQUIPAMENTO ------------------------>