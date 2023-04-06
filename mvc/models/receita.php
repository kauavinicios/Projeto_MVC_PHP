<?php
  class Receita extends Model {
    protected $tabela="receita";
    protected $query = "select rec.*, med.nome as medico, enf.nome as enfermeira, rem.nome as remedio from receita rec join medico med on med.id = rec.medicoid join enfermeira enf on enf.id = rec.enfermeiraid join remedio rem on rem.id = rec.remedioid order by rec.id";
    protected $ordem="rec.id";
  }
 ?>