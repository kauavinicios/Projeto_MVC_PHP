<h1>Cadastro de Medico</h1>
<form action="<?php echo APP.'medico/salvar'; ?>" method="post">
  <?php var_dump($medico['id']) ?>
  <input type="hidden" name="id" value="<?php echo $medico['id']; ?>">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input class="form-control" type="text" name="nome" value="<?php echo $medico['nome']; ?>">
  </div>
  <div class="mb-3">
    <label for="datanascimento" class="form-label">Data De Nascimento</label>
    <input class="form-control" type="date" name="datanascimento" value="<?php echo $medico['datanascimento']; ?>">
  </div>
  <div class="mb-3">
    <label for="crm" class="form-label">CRM</label>
    <input class="form-control" type="text" name="crm" maxlength="14" value="<?php echo $medico['crm']; ?>">
  </div>
  <div class="mb-3">
    <label for="especialidade" class="form-label">Especialidade</label>
    <input class="form-control" type="text" name="especialidade" value="<?php echo $medico['especialidade']; ?>">
  </div>

  <div class="mb-3">
    <label for="afiliacao" class="form-label">Afiliacao</label>
    <select class="form-select" name="afiliacao" >
      <?php
        foreach ($upas as $upa) {
          $selected = $upa['id']==$medico['afiliacao']?'selected':'';
          echo "<option $selected value='{$upa['id']}'>{$upa['nome']}</option>";
        }
       ?>
    </select>
  </div>

  <button type="submit" name="button">Salvar</button>
</form>
