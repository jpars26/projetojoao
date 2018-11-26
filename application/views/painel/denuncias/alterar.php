<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h3>Alterar Denuncias</h3>
    </div>
    <div style="float: right;">
        <a class="btn btn-danger" href="<?= base_url(); ?>painel/denuncias">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
            <label>Ocorrencia:</label>
            <input class="form-control" type="text" name="ocorrencia" value="<?= $denuncia->ocorrencia_den; ?>">
            </div>
        <div class="form-group">
            <label>Endereco:</label>
            <input class="form-control" type="text" name="endereco" value="<?= $denuncia->end_den; ?>">
        </div>

            <input type="submit" name="alterar" class="btn btn-danger btn-block" value="Salvar">
        </form>
    </div>
</div>