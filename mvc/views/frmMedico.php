<h1>Cadastro de Medico</h1>
<form action="<?php echo APP.'medico/salvar'; ?>" method="post">
  <!-- Campo hidden para armazenar o id do médico -->
  <input type="hidden" name="id" value="<?php echo $medico['id']; ?>">
  <!-- Campo nome -->
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input class="form-control" type="text" name="nome" value="<?php echo $medico['nome']; ?>">
  </div>
  <!-- Campo data de nascimento -->
  <div class="mb-3">
    <label for="datanascimento" class="form-label">Data De Nascimento</label>
    <input class="form-control" type="date" name="datanascimento" value="<?php echo $medico['datanascimento']; ?>">
  </div>
  <!-- Campo CRM -->
  <div class="mb-3">
    <label for="crm" class="form-label">CRM</label>
    <input class="form-control" type="text" name="crm" maxlength="14" value="<?php echo $medico['crm']; ?>">
  </div>
  <!-- Campo especialidade -->
  <div class="mb-3">
    <label for="especialidade" class="form-label">Especialidade</label>
    <input class="form-control" type="text" name="especialidade" value="<?php echo $medico['especialidade']; ?>">
  </div>

  <!-- Campo afiliação -->
  <div class="mb-3">
    <label for="afiliacao" class="form-label">Afiliacao</label>
    <select class="form-select" name="afiliacao" >
       <!-- Laço de repetição para criar as opções de afiliação -->
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
