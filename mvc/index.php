<?php
//Inclui o arquivo autoload.php que contém as classes utilizadas no projeto
 include_once "autoload.php";

 //Define as configurações para exibição de erros
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  //Define a constante APP com a URL base do projeto
  define("APP", "http://localhost/mvc/");

  //Verifica se foi passado um parâmetro 'url' na URL
  if (isset($_GET['url'])) {
    $url = $_GET['url'];
  } else {
    $url = 'index/index';
  }

  //Separa os parâmetros da URL em um array
  $parametros = explode("/", $url);

  //Define o nome do controlador a ser utilizado com base no primeiro parâmetro da URL
  $nomeControlador = ucfirst($parametros[0]).'Controller';

  //Define a ação a ser executada com base no segundo parâmetro da URL
  $acao = $parametros[1];

  //Instancia o controlador correspondente
  $controlador = new $nomeControlador();

  //Verifica se foi passado o parâmetro 'id' na URL e executa a ação correspondente
  if (count($parametros) == 2) {
    $controlador->$acao();
  } else {
    $id = $parametros[2];
    $controlador->$acao($id);
  }

 ?> 
 <!-- Este código PHP define as configurações para exibição de erros, define a constante APP
  com a URL base do projeto, recebe os parâmetros passados pela URL, instancia o controlador
   correspondente e executa a ação correspondente, baseada nos parâmetros passados. -->