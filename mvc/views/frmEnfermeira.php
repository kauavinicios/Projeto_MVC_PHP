<h1>Cadastro de Enfermeira</h1>
<form action="<?php echo APP.'enfermeira/salvar'; ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $enfermeira['id']; ?>">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input class="form-control" type="text" name="nome" value="<?php echo $enfermeira['nome']; ?>">
  </div>
  <div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input class="form-control" type="text" name="cpf" maxlength="11" value="<?php echo $enfermeira['cpf']; ?>">
  </div>
  <div class="mb-3">
    <label for="datanascimento" class="form-label">Data De Nascimento</label>
    <input class="form-control" type="date" name="datanascimento" value="<?php echo $enfermeira['datanascimento']; ?>">
  </div>
  <div class="mb-3">
    <label for="posologia" class="form-label">Posologia</label>
    <input class="form-control" type="text" name="posologia" value="<?php echo $enfermeira['posologia']; ?>">
  </div>

  <div class="mb-3">
    <label for="afiliacao" class="form-label">Afiliacao</label>
    <select class="form-select" name="afiliacao" >
      <?php
        foreach ($upas as $upa) {
          $selected = $upa['id']==$enfermeira['afiliacao']?'selected':'';
          echo "<option $selected value='{$upa['id']}'>{$upa['nome']}</option>";
        }
       ?>
    </select>
  </div>

  <button type="submit" name="button">Salvar</button>
</form>
