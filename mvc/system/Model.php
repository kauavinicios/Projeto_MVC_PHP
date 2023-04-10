<?php
  abstract class Model {
    // declaração da variável $conexao, que será usada para armazenar a conexão com o banco de dados.
    protected $conexao;
    // declaração da variável $tabela, que será usada para armazenar o nome da tabela que será manipulada pelo model
    protected $tabela="";
    //  declaração da variável $query, que será usada para armazenar a consulta SQL personalizada
    protected $query="";
    // declaração da variável $ordem, que será usada para armazenar o campo pelo qual os registros serão ordenados na consulta SQL.
    protected $ordem="id";
    // definição do construtor da classe. Ele tenta estabelecer uma conexão com o banco de dados usando as credenciais passadas
    // como parâmetro. Se ocorrer um erro, a variável $conexao é atribuída como nula.
    public function __construct() {
      try {
        $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $this->conexao = new PDO('pgsql:host=localhost;dbname=projWebIII', "postgres", "postgres", $opcoes);
      } catch (PDOException $e) {
        $this->conexao = null;
      }
    }

    // definição da função create(). Ela recebe um array $dados como parâmetro e insere um novo registro na tabela com os valores 
    // contidos no array. Se houver um campo id no array, ele é removido antes da inserção.
    public function create($dados) {
      if (isset($dados['id'])) {
        unset($dados['id']);
      }
      $chaves = array_keys($dados);
      $campos = implode(", ", $chaves);
      $valores = ":".implode(", :", $chaves);
      $sql = "INSERT INTO $this->tabela ($campos) VALUES($valores)";
      $sentenca = $this->conexao->prepare($sql);
      foreach ($chaves as $chave) {
        $sentenca->bindParam(":$chave", $dados[$chave]);
      }
      $sentenca->execute();
    }

    // definição da função read(). Ela executa uma consulta SQL na tabela definida em $this->tabela e retorna um array associativo
    // com os registros encontrados.
    public function read() {
      if ($this->query == "") {
        $this->query = "SELECT * FROM $this->tabela ORDER BY $this->ordem ";
      }
      $sentenca = $this->conexao->query($this->query);
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $consulta = $sentenca->fetchAll();
      return $consulta;
    }

    // definição da função update(). Ela atualiza um registro existente na tabela com os valores contidos no array $dados. O campo
    // id é usado como condição na cláusula WHERE da consulta SQL.
    public function update($dados) {
      $chaves = array_keys($dados);
      $campos = "";
      foreach ($chaves as $chave) {
        if ($chave != "id") {
          if ($campos !="") {
            $campos .= ", $chave= :$chave";
          } else {
            $campos .= "$chave= :$chave";
          }
        }
      }
      $sql = "UPDATE $this->tabela SET $campos WHERE id=:id ";
      $sentenca = $this->conexao->prepare($sql);
      foreach ($chaves as $chave) {
        $sentenca->bindParam(":$chave", $dados[$chave]);
      }
      $sentenca->execute();
    }

    // definição da função delete(). Ela remove um registro da tabela com o id passado como parâmetro.
    public function delete($id) {
      $sql = "DELETE FROM $this->tabela WHERE id = :id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      $sentenca->execute();
    }

    // definição da função getById(). Ela retorna os dados de um registro da tabela com o id passado como parâmetro.
    public function getById($id) {
      $sql = "SELECT * FROM $this->tabela WHERE id = :id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      $sentenca->execute();
      $dados = $sentenca->fetch();
      return $dados;
    }

  }
 ?>
