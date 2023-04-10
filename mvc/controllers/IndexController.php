<?php
  // Define a classe IndexController, que estende a classe Controller
  class IndexController extends Controller {
    // Define o método index
    function index() {
      // Define um array de dados vazio
      $dados = array();
      // Renderiza a view index, passando os dados
      $this->view('index', $dados);
    }
  }
 ?>

<!-- O código define uma classe chamada IndexController que estende outra classe Controller. A classe 
IndexController possui um método chamado index() que cria uma variável $dados vazia e em seguida chama 
um método da classe Controller chamado view(), passando os parâmetros 'index' e $dados.

O método view() é responsável por carregar a view (página HTML) correspondente ao nome 'index' e exibir
os dados passados através da variável $dados. Em resumo, este código é usado para renderizar a página 
inicial do site. -->