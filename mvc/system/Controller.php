<?php
  abstract class Controller {
    /*
    * A função "view" recebe uma visão e dados, extrai os dados e carrega a visão.
    * @param string $visao - A visão a ser carregada.
    * @param array $dados - Os dados que serão utilizados pela visão.
    */
    public function view($visao, $dados) {
      extract($dados);

      $arquivo = "views/$visao.php";

      require_once "views/template.php";
    }

    /*
    * A função "redirect" recebe uma visão e redireciona para ela.
    * @param string $visao - A visão para qual será redirecionado.
    */
    public function redirect($visao){
      header ('location: '.APP.$visao);
    }
  }
 ?>
