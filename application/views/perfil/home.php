<div class="row">
    <div class="col-md-12">
        <?= $this->conf->get_alertas(); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Perfil
                <div style="float: right;">
                    <a href="<?= base_url(); ?>perfil/editar/" class="btn btn-warning">Editar meu perfil</a>
                </div>
            </div>
            <div class="card-body">
                <b>Login:</b> <?= $user->login; ?><br>
                <b>Nome:</b> <?= $user->nome; ?><br>
                <b>Sobre:</b> <?= $user->sobre; ?><br>
                <b>Cidade:</b> <?= $user->cid_nome; ?>
            </div>
        </div>
    </div>
</div>