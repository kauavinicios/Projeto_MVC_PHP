<?php
  // Definindo a classe Upa
  class Upa extends Model {
    // Definindo o nome da tabela no banco de dados
    protected $tabela="upa";
    // Definindo a ordem padrão para consultas
    protected $ordem="id";
  }
?>

<!-- A classe Upa estende a classe Model, uma classe base para
acessar e manipular dados em um banco de dados. A propriedade $tabela define
o nome da tabela em que essa classe atua, enquanto a propriedade $ordem 
define a ordem padrão que as consultas serão ordenadas. -->