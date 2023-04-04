<?php
  class Medico extends Model {
    protected $tabela="medico";
    protected $query = "SELECT med.*, up.nome AS afiliacao FROM medico med JOIN upa up ON up.id = med.afiliacao ORDER BY id, nome";
    protected $ordem="id, nome";
  }
 ?>