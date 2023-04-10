<style>
  .medicos {
    background: url(https://img.freepik.com/vetores-premium/banner-de-fundo-de-tecnologia-azul-moderna-com-quadrado-linha-e-meio-tom_181182-19741.jpg?w=1800);
    padding: 30px;
  }

  .medicos-int{
    background-color: #ffffff88;
    padding: 20px;
    border-radius: 10px;
  }
</style>
<section class="medicos">
  <div class="medicos-int">
    <h1>Listagem de Medicos</h1>
    <a class='btn btn-primary' href="<?php echo APP . 'medico/novo'; ?>">Novo</a>
    <table class='table table-bordered table-striped'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Data De Nascimento</th>
          <th>Especialidade</th>
          <th>CRM</th>
          <th>Afiliacao</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($medicos as $medico) {
          $pathEditar = APP . 'medico/editar';
          $pathExcluir = APP . 'medico/excluir';
          $data = $medico['datanascimento'] != '' ?
            date('d/m/Y', strtotime($medico['datanascimento'])) : '';

          echo "
          <tr>
            <td>{$medico['id']}</td>
            <td>{$medico['nome']}</td>
            <td>$data</td>
            <td>{$medico['especialidade']}</td>
            <td>{$medico['crm']}</td>
            <td>{$medico['afiliacao']}</td>
            <td><a class='btn btn-primary' href='$pathEditar/{$medico['id']}'>+</a></td>
            <td><a class='btn btn-danger' href='$pathExcluir/{$medico['id']}'>-</a></td>
          </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>