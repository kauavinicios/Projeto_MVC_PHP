<?php
  class FarmRemedio extends Model {
    protected $tabela="farmRemedio";
    protected $query = "select fr.*, farm.nome as farmacia, rem.nome as remedio from farmRemedio fr join farmacia farm on farm.id = fr.idfarm join remedio rem on rem.id = fr.idRemedio order by rem.nome";
    protected $ordem="rem.nome";
  }
 ?>