<h1>Listagem de upas</h1>
 <a class="btn btn-primary" href="<?php echo APP.'upa/novo'; ?>">Novo</a>
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
          $pathEditar = APP.'upa/editar';
          $pathExcluir = APP.'upa/excluir';

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
