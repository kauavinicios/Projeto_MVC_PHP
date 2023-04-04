<?php
  class Farmacia extends Model {
    protected $tabela="farmacia";
    protected $query = "SELECT farm.*, up.nome AS afiliacao FROM farmacia farm JOIN upa up ON up.id = farm.afiliacao ORDER BY id, nome";
    protected $ordem="id, nome";
  }
 ?>