<style>
  .fundo {
    background: url(https://img.freepik.com/vetores-premium/banner-de-fundo-de-tecnologia-azul-moderna-com-quadrado-linha-e-meio-tom_181182-19741.jpg?w=1800);
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

    <h1>Estoque de Remedios</h1>
    <a class='btn btn-primary' href="<?php echo APP . 'farmRemedio/novo'; ?>">Novo</a>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Remedio</th>
          <th>Preço</th>
          <th>Estoque</th>
          <th>Disponivel Em</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($farmRemedios as $farmRemedio) {
          $farmRemedio['idFarm'] = $farmRemedio['idfarm'];
          $farmRemedio['idRemedio'] = $farmRemedio['idremedio'];

          $pathEditar = APP . 'farmRemedio/editar';
          $pathExcluir = APP . 'farmRemedio/excluir';

          echo "
          <tr>
            <td>{$farmRemedio['id']}</td>
            <td>{$farmRemedio['remedio']}</td>
            <td>R$ {$farmRemedio['preco']}</td>
            <td>{$farmRemedio['qnt']}</td>
            <td>Farmacia {$farmRemedio['farmacia']}</td>
            <td><a class='btn btn-primary' href='$pathEditar/{$farmRemedio['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$pathExcluir/{$farmRemedio['id']}'>-</a></td>
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>