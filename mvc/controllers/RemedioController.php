<?php
  class RemedioController extends Controller {

    function editar($id) {
      $model = new Remedio();
      $remedio = $model->getById($id);
      $modelUpa = new upa();
      $upas = $modelUpa->read();
      $this->view('frmRemedio', compact('remedio', 'upas'));
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
      $remedio['localizacao'] = "";
      $remedio['afiliacao'] = 0;
      $modelUpa = new Upa();
      $upas = $modelUpa->read();
      $this->view('frmRemedio', compact('remedio', 'upas'));
    }

    function salvar() {
      $remedio = array();
      $remedio['id'] = $_POST['id'];
      $remedio['nome'] = $_POST['nome'];
      $remedio['localizacao'] = $_POST['localizacao'];
      $remedio['afiliacao'] = $_POST['afiliacao'];
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
      $this->redirect('remedio/listar');
    }
  }
 ?>
