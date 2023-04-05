<h1>Listagem de Remedios</h1>
 <a class="btn btn-primary" href="<?php echo APP.'remedio/novo'; ?>">Novo</a>
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
          $pathEditar = APP.'remedio/editar';
          $pathExcluir = APP.'remedio/excluir';

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
