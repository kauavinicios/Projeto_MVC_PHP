<style>
  .enf {
    background: url(https://cdn.pixabay.com/photo/2018/05/04/06/39/banner-3373346_960_720.jpg);
    padding: 30px;
    background-repeat: no-repeat, repeat;
    background-position:initial;
    background-size: cover;
  }

  .enf-int{
    background-color: #ffffff88;
    padding: 20px;
    border-radius: 10px;
  }
</style>
<section class="enf">
  <div class="enf-int">

<h1>Listagem de Enfermeiras</h1>
   <a class='btn btn-primary' href="<?php echo APP.'enfermeira/novo'; ?>">Novo</a>
   <table class='table table-bordered table-striped'>
   <thead>
     <tr>
       <th>ID</th>
       <th>Nome</th>
       <th>CPF</th>
       <th>Data De Nascimento</th>
       <th>Posologia</th>
       <th>Afiliacao</th>
       <th></th>
       <th></th>
     </tr>
   </thead>
   <tbody>
     <?php
       foreach ($enfermeiras as $enfermeira) {
          $pathEditar = APP.'enfermeira/editar';
          $pathExcluir = APP.'enfermeira/excluir';
          $data = $enfermeira['datanascimento']!=''?
            date('d/m/Y', strtotime($enfermeira['datanascimento'])): '';

          echo "
            <tr>
                <td>{$enfermeira['id']}</td>
                <td>{$enfermeira['nome']}</td>
                <td>{$enfermeira['cpf']}</td>
                <td>$data</td>
                <td>{$enfermeira['posologia']}</td>
                <td>{$enfermeira['afiliacao']}</td>
                <td><a class='btn btn-primary' href='$pathEditar/{$enfermeira['id']}'>+</a></td>
                <td><a class='btn btn-danger' href='$pathExcluir/{$enfermeira['id']}'>-</a></td>
            </tr>
          ";
       }
      ?>

   </tbody>
</table>
