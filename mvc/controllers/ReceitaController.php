<?php
  class ReceitaController extends Controller {

    function editar($id) {
      $model = new Receita();
      $receita = $model->getById($id);
      $modelmedico = new medico();
      $medicos = $modelmedico->read();
      $modelenfermeira = new Enfermeira();
      $enfermeiras = $modelenfermeira->read();
      $modelRemedio = new Remedio();
      $remedios = $modelRemedio->read();
      $this->view('frmReceita', compact('receita', 'medicos', 'enfermeiras', 'remedios'));
    }

    function listar() {
      $model = new Receita();
      $receitas = $model->read();
      $this->view('listagemReceita', compact('receitas'));
    }

    function novo() {
      $receita = array();
      $receita['id'] = 0; 
      $receita['descricao'] = ""; 
      $receita['qnt'] = 0;
      $receita['medicoId'] = 0; 
      $receita['enfermeiraId'] = "";
      $receita['remedioId'] = "";
      $modelmedico = new medico();
      $medicos = $modelmedico->read();
      $modelenfermeira = new Enfermeira();
      $enfermeiras = $modelenfermeira->read();
      $modelRemedio = new Remedio();
      $remedios = $modelRemedio->read();
      $this->view('frmReceita', compact('receita', 'medicos', 'enfermeiras', 'remedios'));
    }

    function salvar() {
      $receita = array();
      $receita['id'] = $_POST['id'];
      $receita['descricao'] = $_POST['descricao'];
      $receita['qnt'] = $_POST['qnt'];
      $receita['medicoId'] = $_POST['medicoId'];
      $receita['enfermeiraId'] = $_POST['enfermeiraId'];
      $receita['remedioId'] = $_POST['remedioId'];
      $model = new Receita();
      if ($receita['id'] == 0) {
        $model->create($receita);
      } else {
        $model->update($receita);
      }
      $this->redirect("receita/listar");
    }

    function excluir($id) {
      $model = new Receita();
      $model->delete($id);
      $this->redirect('receita/listar');
    }
  }
 ?>
