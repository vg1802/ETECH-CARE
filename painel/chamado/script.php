<script>
    $(document).on('click', '.editar', function() {
        var cd = $(this).attr('cd');
        $('.modal #cd').val(cd);
        var categoria = $(this).attr('categoria');
        $('.modal #categoria').val(categoria);
    });
    $(document).on('click', '.excluir', function() {
        var cd = $(this).attr('cd');
        $('.modal #cd').val(cd);
    });
    $(document).on('click', '.editar', function() {
        var cd = $(this).attr('cd');
        $('#editar_equipamento #cd').val(cd);
        var local = $(this).attr('local');
        $('#editar_equipamento #local').val(local).change();
        var tipo = $(this).attr('tipo');
        $('#editar_equipamento #tipo').val(tipo).change();
        var modelo = $(this).attr('modelo');
        $('#editar_equipamento #modelo').val(modelo).change();
        var serie = $(this).attr('serie');
        $('#editar_equipamento #serie').val(serie);
        var patrimonio = $(this).attr('patrimonio');
        $('#editar_equipamento #patrimonio').val(patrimonio);
        var descricao = $(this).attr('descricao');
        $('#editar_equipamento #descricao').val(descricao);
    });
</script>