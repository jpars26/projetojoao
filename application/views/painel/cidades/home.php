<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Cidades</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-success" href="<?= base_url(); ?>painel/cidades/inserir">Inserir</a>
    </div>
    <div style="clear: both;"></div>
</div>

<?= $this->conf->get_alertas(); ?>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Operação</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Operação</th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($cidades as $n) { ?>
        <tr>
            <td><?= $n->cid_id; ?></td>
            <td><?= $n->cid_nome; ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url(); ?>painel/cidades/alterar/<?= $n->cid_id; ?>">Alterar</a>
                <a class="btn btn-danger" href="<?= base_url(); ?>painel/cidades/apagar/<?= $n->cid_id; ?>">Apagar</a>
            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>