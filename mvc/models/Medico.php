<?php


// Definindo a classe "Medico" que estende a classe "Model"
class Medico extends Model {
    // Atributo protegido que armazena o nome da tabela do banco de dados utilizada pela classe
    protected $tabela="medico";
    // Atributo protegido que armazena a consulta SQL que será executada pela classe
    protected $query = "SELECT med.*, up.nome AS afiliacao FROM medico med JOIN upa up ON up.id = med.afiliacao ORDER BY id, nome";
    // Atributo protegido que armazena o nome da coluna utilizada como critério de ordenação nas consultas
    protected $ordem="id, nome";
}
?>
