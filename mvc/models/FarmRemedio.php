<?php
// Definindo a classe "FarmRemedio" que estende a classe "Model"
class FarmRemedio extends Model {
    // Atributo protegido que armazena o nome da tabela do banco de dados utilizada pela classe
    protected $tabela="farmRemedio";
    // Atributo protegido que armazena a consulta SQL que será executada pela classe
    protected $query = "select fr.*, farm.nome as farmacia, rem.nome as remedio from farmRemedio fr join farmacia farm on farm.id = fr.idfarm join remedio rem on rem.id = fr.idRemedio order by rem.nome";
    // Atributo protegido que armazena o nome da coluna utilizada como critério de ordenação nas consultas
    protected $ordem="rem.nome";
}
?>