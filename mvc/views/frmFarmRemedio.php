<h1>Cadastro de FarmRemedio</h1>
<form action="<?php echo APP.'farmRemedio/salvar'; ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $farmRemedio['id']; ?>">
  <div class="mb-3">
    <label for="preco" class="form-label">Preço</label>
    <input class="form-control" type="text" name="preco" value="<?php echo $farmRemedio['preco']; ?>">
  </div>
  <div class="mb-3">
    <label for="qnt" class="form-label">Estoque</label>
    <input class="form-control" type="text" name="qnt" maxlength="11" value="<?php echo $farmRemedio['qnt']; ?>">
  </div>

  <div class="mb-3">
    <label for="idFarm" class="form-label">Farmacia</label>
    <select class="form-select" name="idFarm" >
      <?php
        foreach ($farmacias as $farmacia) {
          $selected = $farmacia['id']==$farmRemedio['idFarm']?'selected':'';
          echo "<option $selected value='{$farmacia['id']}'>{$farmacia['nome']}</option>";
        }
       ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="idRemedio" class="form-label">Remedio</label>
    <select class="form-select" name="idRemedio" >
      <?php
        foreach ($remedios as $remedio) {
          $selected = $remedio['id']==$farmRemedio['idRemedio']?'selected':'';
          echo "<option $selected value='{$remedio['id']}'>{$remedio['nome']}</option>";
        }
       ?>
    </select>
  </div>

  <button type="submit" name="button">Salvar</button>
</form>
