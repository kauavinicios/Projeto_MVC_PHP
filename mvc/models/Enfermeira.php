<?php
// Definindo a classe "Enfermeira" que estende a classe "Model"
class Enfermeira extends Model {
    // Atributo protegido que armazena o nome da tabela do banco de dados utilizada pela classe
    protected $tabela="enfermeira";
    // Atributo protegido que armazena a consulta SQL que será executada pela classe
    protected $query = "SELECT enf.*, up.nome AS afiliacao FROM enfermeira enf JOIN upa up ON up.id = enf.afiliacao ORDER BY id, nome";
    // Atributo protegido que armazena o nome da coluna utilizada como critério de ordenação nas consultas
    protected $ordem="id, nome";
}
?>