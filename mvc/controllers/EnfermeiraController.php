<?php
  class EnfermeiraController extends Controller {

    function editar($id) {
      $model = new Enfermeira();
      $enfermeira = $model->getById($id);
      $modelUpa = new upa();
      $upas = $modelUpa->read();
      $this->view('frmEnfermeira', compact('enfermeira', 'upas'));
    }

    function listar() {
      $model = new Enfermeira();
      $enfermeiras = $model->read();
      $this->view('listagemEnfermeira', compact('enfermeiras'));
    }

    function novo() {
      $enfermeira = array();
      $enfermeira['id'] = 0; 
      $enfermeira['nome'] = ""; 
      $enfermeira['cpf'] = "";
      $enfermeira['datanascimento'] = "";
      $enfermeira['posologia'] = "";
      $enfermeira['afiliacao'] = 0;
      $modelUpa = new Upa();
      $upas = $modelUpa->read();
      $this->view('frmEnfermeira', compact('enfermeira', 'upas'));
    }

    function salvar() {
      $enfermeira = array();
      $enfermeira['id'] = $_POST['id'];
      $enfermeira['nome'] = $_POST['nome'];
      $enfermeira['cpf'] = $_POST['cpf'];
      $enfermeira['datanascimento'] = $_POST['datanascimento'];
      $enfermeira['posologia'] = $_POST['posologia'];
      $enfermeira['afiliacao'] = $_POST['afiliacao'];
      $model = new Enfermeira();
      if ($enfermeira['id'] == 0) {
        $model->create($enfermeira);
      } else {
        $model->update($enfermeira);
      }
      $this->redirect("enfermeira/listar");
    }

    function excluir($id) {
      $model = new Enfermeira();
      $model->delete($id);
      $this->redirect('enfermeira/listar');
    }
  }
 ?>
