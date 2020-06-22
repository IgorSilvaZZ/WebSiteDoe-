<?php
    session_start();
    require_once('../global.php');

    if(isset($_POST['id'])){
        $resultado = '';
        $postagem = new Postagem();
        $postagem->setIdPostagem($_POST['id']);
        $retorno = $postagem->ListarPostagem($postagem);

        echo $resultado = <<<HTML

        <input type="hidden" id="idPostagem" name="idPostagem" value="{$retorno['idPostagem']}">

        <div class="container">
            <div class="row"">
                <div class="form-group col-md-12">
                    <div class="form-group shadow-textarea">
                        <label for="exampleFormControlTextarea6">Descricao</label>
                        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" name="txtDescricao" rows="3" style="border: none;max-height: 700px;">{$retorno['descPostagem']}</textarea>
                    </div>
                </div>
            </div>
        </div>
HTML;
    }

    if(isset($_POST['del'])){
        $resultado = '';
        $postagem = new Postagem();
        $postagem->setIdPostagem($_POST['del']);
        $retorno = $postagem->ListarPostagem($postagem);

        echo $resultado = <<<HTML

        <input type="hidden" id="idPostagem" name="idPostagem" value="{$retorno['idPostagem']}">
HTML;

    }