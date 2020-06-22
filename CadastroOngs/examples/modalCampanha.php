<?php
    session_start();
    require_once('../global.php');

    if(isset($_POST['id'])){
        $resultado = '';
        $campanha = new Campanha();
        $campanha->setIdCampanha($_POST['id']);
        $retorno = $campanha->listarCampanha($campanha);

        echo $resultado = <<<HTML

        <input type="hidden" id="idCampanha" name="idCampanha" value="{$retorno['idCampanha']}">

        <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                    <div class="md-form">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" name="txtNomeCampanha" id="inputNome" value="{$retorno['nomeCampanha']}">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="md-form">
                        <label for="inputNome">Data de ínicio</label>
                        <input type="date" class="form-control" id="txtDtInicio" name="txtDtInicio" value="{$retorno['inicioCampanha']}">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="md-form">
                        <label for="inputNome">Data de Fim</label>
                        <input type="date" class="form-control" name="txtDtFim" value="{$retorno['fimCampanha']}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="form-group shadow-textarea">
                        <label for="exampleFormControlTextarea6">Descricao</label>
                        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" name="txtDescricao" rows="3">{$retorno['descricaoCampanha']}</textarea>
                    </div>
                </div>
            </div>
        </div>
HTML;
    }

    if(isset($_POST['del'])){
        $resultado = '';
        $campanha = new Campanha();
        $campanha->setIdCampanha($_POST['del']);
        $retorno = $campanha->listarCampanha($campanha);

        echo $resultado = <<<HTML

        <input type="hidden" id="idCampanha" name="idCampanha" value="{$retorno['idCampanha']}">
HTML;

    }