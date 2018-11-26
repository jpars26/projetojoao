<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Inserir cidade</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-danger" href="<?= base_url(); ?>painel/cidades">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome">
            </div>
            <input type="submit" name="inserir" class="btn btn-success btn-block" value="Salvar">
        </form>
    </div>
</div>