<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Inserir Denuncia</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-danger" href="<?= base_url(); ?>painel/denucias">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>

    <form action="" method="post">
         <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                     <label>Ocorrencia:</label>
                     <input class="form-control" type="text" name="ocorrencia">
                     </div>
                </div>
        </div>
        <div class = "form-group">
                <div class="row">
                    <div class="col-md-12">
                    <label>Endereco:</label>
                    <input class="form-control" type="text" name="endereco">
                    </div>
                </div>
        </div>

                <input type="submit" name="inserir" class="btn btn-success btn-block" value="Salvar">
        
    </form>