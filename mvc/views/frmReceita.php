<h1>Cadastro de Receita</h1>
<form action="<?php echo APP.'receita/salvar'; ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $receita['id']; ?>">
  <div class="mb-3">
    <label for="remedioId" class="form-label">Remedio</label>
    <select class="form-select" name="remedioId" >
      <?php
        foreach ($remedios as $remedio) {
          $selected = $remedio['id']==$receita['remedioId']?'selected':'';
          echo "<option $selected value='{$remedio['id']}'>{$remedio['nome']}</option>";
        }
       ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <input class="form-control" type="text" name="descricao" value="<?php echo $receita['descricao']; ?>">
  </div>
  <div class="mb-3">
    <label for="qnt" class="form-label">Quantidade</label>
    <input class="form-control" type="numeric" name="qnt" value="<?php echo $receita['qnt']; ?>">
  </div>
  <div class="mb-3">
    <label for="medicoId" class="form-label">Medico</label>
    <select class="form-select" name="medicoId" >
      <?php
        foreach ($medicos as $medico) {
          $selected = $medico['id']==$receita['medicoId']?'selected':'';
          echo "<option $selected value='{$medico['id']}'>{$medico['nome']}</option>";
        }
       ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="enfermeiraId" class="form-label">Enfermeira</label>
    <select class="form-select" name="enfermeiraId" >
      <?php
        foreach ($enfermeiras as $enfermeira) {
          $selected = $enfermeira['id']==$receita['enfermeiraId']?'selected':'';
          echo "<option $selected value='{$enfermeira['id']}'>{$enfermeira['nome']}</option>";
        }
       ?>
    </select>
  </div>

  <button type="submit" name="button">Salvar</button>
</form>
