<?php
// ----------------- FUNÇÕES DO TIPO DE EQUIPAMENTO ------------------ //
function CadastrarTipoEquipamento($tipoEquipamento, $pagina)
{
    $sql = 'insert into tb_tipo_equipamento set nm_tipo_equipamento = "' . $tipoEquipamento . '"';
    Executar($sql, "Cadastrado com sucesso!", "Ops! Tipo não cadastrado!", $pagina);
}

function ListarTipoEquipamento()
{
    $sql = 'select cd_tipo_equipamento, nm_tipo_equipamento from tb_tipo_equipamento order by nm_tipo_equipamento asc';
    $res = $GLOBALS['con']->query($sql);
    if ($res === null){
        echo "Sem registros!";
    }elseif ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}

function EditarTipoEquipamento($item, $tipo, $pagina)
{
    $sql = 'update tb_tipo_equipamento set nm_tipo_equipamento = "' . $tipo . '" where cd_tipo_equipamento = "'.$item.'"';
    Executar($sql, "Alterado com sucesso!", "Ops! Dados não foram alterados!", $pagina);
}

function ExcluirTipoEquipamento($item, $pagina)
{
    $sql = 'delete from tb_tipo_equipamento where cd_tipo_equipamento = "'.$item.'"';
    Executar($sql, "Excluído com sucesso!", "Ops! Dados não foram excluídos!", $pagina);
}
// ----------------- FIM DAS FUNÇÕES DO TIPO DE EQUIPAMENTO ------------------ //

// ----------------- FUNÇÕES DO MODELO DE EQUIPAMENTO ------------------ //
function CadastrarModeloEquipamento($modeloEquipamento, $pagina)
{
    $sql = 'insert into tb_modelo set nm_modelo = "' . $modeloEquipamento . '"';
    Executar($sql, "Cadastrado com sucesso!", "Ops! modelo não cadastrado!", $pagina);
}

function ListarModeloEquipamento()
{
    $sql = 'select cd_modelo, nm_modelo from tb_modelo order by nm_modelo asc';
    $res = $GLOBALS['con']->query($sql);
    if ($res == null){
        echo "Sem registros!";
    }
    
    if ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}

function EditarModeloEquipamento($item, $modelo, $pagina)
{
    $sql = 'update tb_modelo set nm_modelo = "' . $modelo . '" where cd_modelo = "'.$item.'"';
    Executar($sql, "Alterado com sucesso!", "Ops! Dados não foram alterados!", $pagina);
}

function ExcluirModeloEquipamento($item, $pagina)
{
    $sql = 'delete from tb_modelo where cd_modelo = "'.$item.'"';
    Executar($sql, "Excluído com sucesso!", "Ops! Dados não foram excluídos!", $pagina);
}
// ----------------- FIM DAS FUNÇÕES DO MODELO DE EQUIPAMENTO ------------------ //

// ----------------- FUNÇÕES DO LOCAL DE EQUIPAMENTO ------------------ //
function CadastrarLocal($local, $pagina)
{
    $sql = 'insert into tb_local set nm_local = "' . $local . '"';
    Executar($sql, "Cadastrado com sucesso!", "Ops! Local não cadastrado!", $pagina);
}

function ListarLocal()
{
    $sql = 'select cd_local, nm_local from tb_local order by nm_local asc';
    $res = $GLOBALS['con']->query($sql);
    if ($res === null){
        echo "Sem registros!";
    }elseif ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}

function EditarLocal($item, $local, $pagina)
{
    $sql = 'update tb_local set nm_local = "' . $local . '" where cd_local = "'.$item.'"';
    Executar($sql, "Alterado com sucesso!", "Ops! Dados não foram alterados!", $pagina);
}

function ExcluirLocal($item, $pagina)
{
    $sql = 'delete from tb_local where cd_local = "'.$item.'"';
    Executar($sql, "Excluído com sucesso!", "Ops! Dados não foram excluídos!", $pagina);
}
// ----------------- FIM DAS FUNÇÕES DO LOCAL DE EQUIPAMENTO ------------------ //

// ----------------- FUNÇÕES DO EQUIPAMENTO ------------------ //
function CadastrarEquipamento($serie, $patrimonio, $descricao, $local, $tipo, $modelo, $pagina)
{
    $sql = 'insert into tb_equipamento set 
    nr_serie = "' . $serie . '",
    nr_patrimonio = "'.$patrimonio.'",
    ds_equipamento = "'.$descricao.'",
    id_local = "'.$local.'",
    id_tipo_equipamento = "'.$tipo.'",
    id_modelo = "'.$modelo.'"
    ';
    Executar($sql, "Cadastrado com sucesso!", "Ops! Equipamento não cadastrado!", $pagina);
}

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
    if ($res === null){
        echo "Sem registros!";
    }elseif ($res->num_rows > 0) {
        return $res;
    } else {
        return null;
    }
}

function EditarEquipamento($item, $serie, $patrimonio, $descricao, $local, $tipo, $modelo, $pagina)
{
    $sql = 'update tb_equipamento set 
    nr_serie = "' . $serie . '",
    nr_patrimonio = "'.$patrimonio.'",
    ds_equipamento = "'.$descricao.'",
    id_local = "'.$local.'",
    id_tipo_equipamento = "'.$tipo.'",
    id_modelo = "'.$modelo.'"
    where cd_equipamento = "'.$item.'"';
    Executar($sql, "Alterado com sucesso!", "Ops! Dados não foram alterados!", $pagina);
}

function ExcluirEquipamento($item, $pagina)
{
    $sql = 'delete from tb_equipamento where cd_equipamento = "'.$item.'"';
    Executar($sql, "Excluído com sucesso!", "Ops! Dados não foram excluídos!", $pagina);
}
// ----------------- FIM DAS FUNÇÕES DO EQUIPAMENTO ------------------ //
?>