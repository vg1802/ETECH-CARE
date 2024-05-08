<!----------------------- CADASTRO CHAMADO ------------------------>
<!-- Cadastrar Chamado -->
<div class="modal fade" id="cadastrar_chamado" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Cadastrar chamado
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Descrição chamado" name="desc" required>
                </div>
                <select name="cat" class="form-control">
                    <option disabled selected>Selecione um tipo de categoria...</option>
                    <?php
                    $mostrar = ListarCategoria();
                    if ($mostrar !== null) {
                        while ($m = $mostrar->fetch_array()) {
                            print '<option value="' . $m['cd_categoria'] . '">' . $m['nm_categoria'] . '</option>';
                        }
                    } else {
                        print 'Sem registros!';
                    }
                    ?>
                </select>
                <select name="equipamento" class="form-control">
                    <option disabled selected>Selecione um Equipamento...</option>
                    <?php
                    $mostrar = ListarEquipamento();
                    if ($mostrar !== null) {
                        while ($m = $mostrar->fetch_array()) {
                            print '<option value="' . $m['cd_equipamento'] . '">' . $m['ds_equipamento'] . '</option>';
                        }
                    } else {
                        print 'Sem registros!';
                    }
                    ?>
                </select>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

<!----------------------- CADASTRO Categoria ------------------------>
<!-- Cadastrar Categoria -->
<div class="modal fade" id="cadastrar_cat" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="post" class="form-group" action="">
                <div class="modal-header">
                    Cadastrar categoria
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Nome categoria" name="nome" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="action">
                </div>
            </form>
        </div>
    </div>
</div>

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

