<h1>Cadastro de Upa</h1>
<form action="<?php echo APP.'upa/salvar'; ?>" method="post">
  <input type="hidden" name="id" value="<?php echo $upa['id']; ?>">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input class="form-control" type="text" name="nome" value="<?php echo $upa['nome']; ?>">
  </div>
  <div class="mb-3">
    <label for="localizacao" class="form-label">Localização</label>
    <input class="form-control" type="text" name="localizacao" value="<?php echo $upa['localizacao']; ?>">
  </div>

  <button type="submit" name="button">Salvar</button>
</form>
