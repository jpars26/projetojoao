<div class="col-md-12">
    <div class="card">
        <div class="card-header">Editar perfil
            <div style="float: right;">
                <a href="<?= base_url(); ?>perfil/" class="btn btn-success">Voltar</a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Login</label>
                            <input class="form-control" type="text" name="login" value="<?= $user->login; ?>">
                        </div>
                        <div class="col-md-6">
                            <label>Nome</label>
                            <input class="form-control" type="text" name="nome" value="<?= $user->nome; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Cidade</label>
                            <select class="form-control" name="cidade">
                                <?php 
                                foreach ($cidades as $n) { 
                                    if($n->cid_id == $user->cidade){
                                        echo "<option value=\"".$n->cid_id."\" selected>".$n->cid_nome."</option>";
                                    }else{
                                        echo "<option value=\"".$n->cid_id."\">".$n->cid_nome."</option>";
                                    }
                                }
                                ?>
                            </select> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <label>Sobre</label>
                            <textarea class="form-control" type="text" name="sobre"><?= $user->sobre; ?></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="alterar" value="Salvar">
            </form>
        </div>
    </div>
</div>