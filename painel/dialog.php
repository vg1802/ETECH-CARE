<?php
    function Confirma($msg, $pagina){
        print'
            <div class="modal fade" id="myModal" data-backdrop="static">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            Confirma
                        </div>
                        <div class="modal-body">
                            '.$msg.'
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" onclick="redirecionar()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function redirecionar(){
                    location.href = "'.$pagina.'";
                }
            </script>
        ';
    }
    function Erro($msg){
        print'
            <div class="modal fade" id="myModal" data-backdrop="static">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            Erro
                        </div>
                        <div class="modal-body">
                            '.$msg.'
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" onclick="redirecionar()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function redirecionar(){
                    history.go(-1);
                }
            </script>
        ';
    }

    function Executar($sql, $confirma, $erro, $pagina){
        $res = $GLOBALS['con']->query($sql);
        if($res){
            Confirma ($confirma, $pagina);
        }
        else {
            Erro($erro);
        }
    }
?>