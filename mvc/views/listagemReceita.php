<style>
  .fundo {
    background: url(https://cdn.pixabay.com/photo/2018/05/04/06/39/banner-3373346_960_720.jpg);
    padding: 30px;
    background-repeat: no-repeat, repeat;
    background-position: initial;
    background-size: cover;
  }

  .fundo-int {
    background-color: #ffffff88;
    padding: 20px;
    border-radius: 10px;
  }
</style>
<section class="fundo">
  <div class="fundo-int">
    <h1>Estoque de Receitas</h1>
    <a class='btn btn-primary' href="<?php echo APP . 'receita/novo'; ?>">Novo</a>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Remédio</th>
          <th>Prescrição</th>
          <th>total de Medicamentos</th>
          <th>Medico</th>
          <th>Enfermeira</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($receitas as $receita) {
          $pathEditar = APP . 'receita/editar';
          $pathExcluir = APP . 'receita/excluir';

          echo "
          <tr>
            <td>{$receita['id']}</td>
            <td>{$receita['remedio']}</td>
            <td>{$receita['descricao']}</td>
            <td>{$receita['qnt']}</td>
            <td>{$receita['medico']}</td>
            <td>{$receita['enfermeira']}</td>
            <td><a class='btn btn-primary' href='$pathEditar/{$receita['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$pathExcluir/{$receita['id']}'>-</a></td>
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>