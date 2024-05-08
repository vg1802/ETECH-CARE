<?php
// ----------------- FUNÇÕES De categoria ------------------ //
function CadastrarCategoria($tipoCategoria, $pagina)
{
    $sql = 'insert into tb_categoria set 
    nm_categoria = "' . $tipoCategoria . '",
    st_categoria = "' . 1 . '"
    ';
    Executar($sql, "Cadastrado com sucesso!", "Ops! Tipo não cadastrado!", $pagina);
}

function ListarCategoria()
{
    $sql = 'select cd_categoria, nm_categoria,st_categoria from tb_categoria order by nm_categoria asc';
    $res = $GLOBALS['con']->query($sql);
    if ($res === null) {
        echo "Sem registros!";
    } elseif ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}

function EditarCategoria($item, $tipo, $pagina)
{
    $sql = 'update tb_categoria set nm_categoria = "' . $tipo . '" where cd_categoria = "' . $item . '"';
    Executar($sql, "Alterado com sucesso!", "Ops! Dados não foram alterados!", $pagina);
}

function ExcluirCategoria($item, $pagina)
{
    $sql = 'delete from tb_categoria where cd_categoria = "' . $item . '"';
    Executar($sql, "Excluído com sucesso!", "Ops! Dados não foram excluídos!", $pagina);
}
// ----------------- FIM DAS FUNÇÕES de categoria ------------------ //

// ----------------- FUNÇÕES De chamado ------------------ //


function ListarEquipamento()
{
    $sql = 'select 
    cd_equipamento, nr_serie, nr_patrimonio, ds_equipamento, 
    id_local, id_tipo_equipamento, id_modelo, nm_local, 
    nm_tipo_equipamento, nm_modelo 
    from tb_equipamento
    inner join tb_tipo_equipamento on id_tipo_equipamento = cd_tipo_equipamento
    inner join tb_modelo on id_modelo = cd_modelo
    inner join tb_local on id_local = cd_local
    order by nm_tipo_equipamento asc';
    $res = $GLOBALS['con']->query($sql);
    if ($res === null) {
        echo "Sem registros!";
    } elseif ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}

function CadastrarChamado($desc, $status, $cat, $userId, $equipamento,$pagina)
{
    $sql = 'insert into tb_chamado set 
    ds_chamado = "' . $desc . '",
    st_chamado = "'.$status.'",
    id_categoria = "'.$cat.'",
    id_usuario = "'.$userId.'",
    id_equipamento = "'.$equipamento.'"
    ';
    Executar($sql, "Cadastrado com sucesso!", "Ops! Equipamento não cadastrado!", $pagina);
}


function ListarChamado()
{
    $sql = 'select 
    cd_chamado, ds_chamado, st_chamado, dt_registro_chamado, 
    nm_categoria, nm_usuario, nm_tipo_equipamento
    from tb_chamado
    inner join tb_tipo_equipamento on id_equipamento = cd_tipo_equipamento
    inner join tb_usuario on id_usuario = cd_usuario
    inner join tb_categoria on id_categoria = cd_categoria
    order by nm_tipo_equipamento asc';
    $res = $GLOBALS['con']->query($sql);
    if ($res === null) {
        echo "Sem registros!";
    } elseif ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}
