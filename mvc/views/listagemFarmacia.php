<style>
  .fundo {
    background: url(https://i.pinimg.com/originals/fb/47/62/fb4762604e8db09ae471fd74fbde5630.jpg);
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

    <h1>Listagem de Farmacias</h1>
    <a class='btn btn-primary' href="<?php echo APP . 'farmacia/novo'; ?>">Novo</a>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Localizacao</th>
          <th>Afiliacao</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($farmacias as $farmacia) {
          $pathEditar = APP . 'farmacia/editar';
          $pathExcluir = APP . 'farmacia/excluir';

          echo "
          <tr>
            <td>{$farmacia['id']}</td>
            <td>{$farmacia['nome']}</td>
            <td>{$farmacia['localizacao']}</td>
            <td>{$farmacia['afiliacao']}</td>
            <td><a class='btn btn-primary' href='$pathEditar/{$farmacia['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$pathExcluir/{$farmacia['id']}'>-</a></td>
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>