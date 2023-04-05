<?php
  class RemedioController extends Controller {

    function editar($id) {
      $model = new Remedio();
      $remedio = $model->getById($id);
      $this->view('frmRemedio', compact('remedio'));
    }

    function listar() {
      $model = new Remedio();
      $remedios = $model->read();
      $this->view('listagemRemedio', compact('remedios'));
    }

    function novo() {
      $remedio = array();
      $remedio['id'] = 0; 
      $remedio['nome'] = "";
      $remedio['descricao'] = "";
      $this->view('frmRemedio', compact('remedio'));
    }

    function salvar() {
      $remedio = array();
      $remedio['id'] = $_POST['id'];
      $remedio['nome'] = $_POST['nome'];
      $remedio['descricao'] = $_POST['descricao'];
      $model = new Remedio();
      if ($remedio['id'] == 0) {
        $model->create($remedio);
      } else {
        $model->update($remedio);
      }
      $this->redirect("remedio/listar");
    }

    function excluir($id) {
      $model = new Remedio();
      $model->delete($id);
      #$model->delete(); 
      $this->redirect('remedio/listar');
    }
  }
 ?>
