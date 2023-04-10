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

    <h1>Listagem de Remedios</h1>
    <a class="btn btn-primary" href="<?php echo APP . 'remedio/novo'; ?>">Novo</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($remedios as $remedio) {
          $pathEditar = APP . 'remedio/editar';
          $pathExcluir = APP . 'remedio/excluir';

          echo "
          <tr>
            <td>{$remedio['id']}</td>
            <td>{$remedio['nome']}</td>
            <td>{$remedio['descricao']}</td>
            <td><a class='btn btn-primary' href='$pathEditar/{$remedio['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$pathExcluir/{$remedio['id']}'>-</a></td>
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>