<?php
// Definindo a classe "Farmacia" que estende a classe "Model"
class Farmacia extends Model {
    // Atributo protegido que armazena o nome da tabela do banco de dados utilizada pela classe
    protected $tabela="farmacia";
    // Atributo protegido que armazena a consulta SQL que será executada pela classe
    protected $query = "SELECT farm.*, up.nome AS afiliacao FROM farmacia farm JOIN upa up ON up.id = farm.afiliacao ORDER BY id, nome";
    // Atributo protegido que armazena o nome da coluna utilizada como critério de ordenação nas consultas
    protected $ordem="id, nome";
}
?>