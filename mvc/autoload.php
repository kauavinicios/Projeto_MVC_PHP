<?php
  // Função que realiza o carregamento automático das classes
  function autoload($classe) {
    // Verifica se o arquivo da classe existe na pasta "controllers"
    if (file_exists("controllers/$classe.php")) {
      require_once("controllers/$classe.php");
      return;
    }
    // Verifica se o arquivo da classe existe na pasta "models"
    if (file_exists("models/$classe.php")) {
      require_once("models/$classe.php");
      return;
    }
    // Verifica se o arquivo da classe existe na pasta "system"
    if (file_exists("system/$classe.php")) {
      require_once("system/$classe.php");
      return;
    }
  }
  // Registra a função autoload para ser chamada quando uma classe não for encontrada
  spl_autoload_register("autoload");
?>
<!-- O código apresentado é responsável por carregar automaticamente arquivos das classes do sistema, utilizando a função
 "spl_autoload_register" que registra uma função que é executada automaticamente quando tenta-se acessar uma classe que ainda não foi
  carregada. A função "autoload" é chamada e busca o arquivo da classe em três diretórios possíveis: "controllers", "models" e 
  "system". O primeiro diretório é responsável pelos controladores, o segundo pelos modelos e o terceiro pelos arquivos do sistema. 
  O objetivo do código é facilitar a manutenção do sistema, permitindo que novas classes sejam adicionadas sem a necessidade de incluir 
   manualmente seus arquivos em cada página ou método. -->