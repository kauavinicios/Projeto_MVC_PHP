<?php
// Definindo a classe "Receita" que estende a classe "Model"
class Receita extends Model {
    // Atributo protegido que armazena o nome da tabela do banco de dados utilizada pela classe
    protected $tabela="receita";
    // Atributo protegido que armazena a consulta SQL que será executada pela classe
    protected $query = "select rec.*, med.nome as medico, enf.nome as enfermeira, rem.nome as remedio from receita rec join medico med on med.id = rec.medicoid join enfermeira enf on enf.id = rec.enfermeiraid join remedio rem on rem.id = rec.remedioid order by rec.id";
    // Atributo protegido que armazena o nome da coluna utilizada como critério de ordenação nas consultas
    protected $ordem="rec.id";
}
?>