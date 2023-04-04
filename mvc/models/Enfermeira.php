<?php
  class Enfermeira extends Model {
    protected $tabela="enfermeira";
    protected $query = "SELECT enf.*, up.nome AS afiliacao FROM enfermeira enf JOIN upa up ON up.id = enf.afiliacao ORDER BY id, nome";
    protected $ordem="id, nome";
  }
 ?>