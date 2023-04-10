<style>
  .fundo {
    background: url(https://cdn.pixabay.com/photo/2018/05/04/06/39/banner-3373346_960_720.jpg);
    padding: 30px;
    background-repeat: no-repeat, repeat;
    background-position: initial;
    background-size: cover;
  }

  .fundo-int {
    background-color: #ffffff88;
    padding: 20px;
    border-radius: 10px;
  }
</style>
<section class="fundo">
  <div class="fundo-int">

    <h1>Cadastro de Remedio</h1>
    <form action="<?php echo APP . 'remedio/salvar'; ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $remedio['id']; ?>">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome" value="<?php echo $remedio['nome']; ?>">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input class="form-control" type="text" name="descricao" value="<?php echo $remedio['descricao']; ?>">
      </div>

      <button type="submit" name="button">Salvar</button>
    </form>
  </div>
</section>