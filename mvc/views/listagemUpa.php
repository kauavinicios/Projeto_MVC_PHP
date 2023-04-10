<style>
  .upas {
    background: url(https://i.pinimg.com/originals/fb/47/62/fb4762604e8db09ae471fd74fbde5630.jpg);
    padding: 30px;
  }
  .upas-int{
    background-color: #ffffff88;
    padding: 20px;
    border-radius: 10px;
  }
</style>
<section class="upas">
  <div class="upas-int">
    <h1>Listagem de upas</h1>
    <a class="btn btn-primary" href="<?php echo APP . 'upa/novo'; ?>">Novo</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Localização</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($upas as $upa) {
          $pathEditar = APP . 'upa/editar';
          $pathExcluir = APP . 'upa/excluir';

          echo "
          <tr>
            <td>{$upa['id']}</td>
            <td>{$upa['nome']}</td>
            <td>{$upa['localizacao']}</td>
            <td><a class='btn btn-primary' href='$pathEditar/{$upa['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$pathExcluir/{$upa['id']}'>-</a></td>
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>