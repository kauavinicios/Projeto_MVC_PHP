<?php
  class Remedio extends Model {
    protected $tabela="remedio";
    protected $query = "SELECT rem.*, fr.*, farm.nome AS farmacia FROM remedio rem JOIN farmRemedio fr ON fr.idRemedio = rem.id JOIN farmacia farm ON farm.id = fr.idFarm ORDER BY nome, id";
    protected $ordem="nome, id";
  }
 ?>