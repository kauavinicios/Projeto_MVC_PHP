<?php
// Definindo a classe "Remedio" que estende a classe "Model"
class Remedio extends Model {
    // Atributo protegido que armazena o nome da tabela do banco de dados utilizada pela classe
    protected $tabela="remedio";
    // Atributo protegido que armazena o nome da coluna utilizada como critério de ordenação nas consultas
    protected $ordem="nome";
}
?>