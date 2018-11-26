<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Denuncias</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-success" href="<?= base_url(); ?>painel/denuncias/inserir">Inserir</a>
    </div>
    <div style="clear: both;"></div>
</div>

<?= $this->conf->get_alertas(); ?>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Ocorrencia</th>
       <th>Endereco</th>
      <th>Operação</th>
    </tr>
  </thead>


  
  <tbody>
    <?php foreach ($denuncias as $n) { ?>
        <tr>
            <td><?= $n->id_den; ?></td>
            <td><?= $n->ocorrencia_den; ?></td>
            <td><?= $n->end_den; ?></td>
            <td>
                <a class="btn btn-warning" href="<?= base_url(); ?>painel/denuncias/alterar/<?= $n->id_den; ?>">Alterar</a>
                <a class="btn btn-danger" href="<?= base_url(); ?>painel/denuncias/apagar/<?= $n->id_den; ?>">Apagar</a>
            </td>
        </tr>
    <?php } ?>


  </tbody>
</table>
</div>