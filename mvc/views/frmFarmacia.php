<h1>Cadastro de Farmacia</h1>
<form action="<?php echo APP.'farmacia/salvar'; ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $farmacia['id']; ?>">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input class="form-control" type="text" name="nome" value="<?php echo $farmacia['nome']; ?>">
  </div>
  <div class="mb-3">
    <label for="localizacao" class="form-label">Localizacao</label>
    <input class="form-control" type="text" name="localizacao" maxlength="11" value="<?php echo $farmacia['localizacao']; ?>">
  </div>

  <div class="mb-3">
    <label for="afiliacao" class="form-label">Afiliacao</label>
    <select class="form-select" name="afiliacao" >
      <?php
        foreach ($upas as $upa) {
          $selected = $upa['id']==$farmacia['afiliacao']?'selected':'';
          echo "<option $selected value='{$upa['id']}'>{$upa['nome']}</option>";
        }
       ?>
    </select>
  </div>

  <button type="submit" name="button">Salvar</button>
</form>
