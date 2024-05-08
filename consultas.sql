use db_etechcare;

show tables;

select * from tb_chamado;

select * from tb_usuario;

select * from tb_categoria;


select * from tb_equipamento;

select * from tb_tipo_equipamento;

select * from tb_categoria;

select 
    cd_chamado, ds_chamado, st_chamado, dt_registro_chamado, 
    nm_categoria, nm_usuario, nm_tipo_equipamento
    from tb_chamado
    inner join tb_tipo_equipamento on id_equipamento = cd_tipo_equipamento
    inner join tb_usuario on id_usuario = cd_usuario
    inner join tb_categoria on id_categoria = cd_categoria;

insert into tb_chamado(cd_chamado,ds_chamado,st_chamado,id_categoria,id_usuario,id_equipamento) values(1,"instalar power bi",1,1,1,1);

update tb_chamado set id_usuario = 2 where cd_chamado =1;


delete from tb_chamado where cd_chamado >= 0;

ALTER TABLE `tb_chamado`
CHANGE `cd_chamado` `cd_chamado` int(11) NOT NULL AUTO_INCREMENT;
