<?php
  class UpaController extends Controller {
    function editar($id) {
      $model = new Upa();
      $upa = $model->getById($id);
      $this->view('frmUpa', compact('upa'));
    }

    function listar() {
      $model = new Upa();
      $upas = $model->read();
      $this->view('listagemUpa', compact('upas'));
    }

    function novo() {
      $upa = array();
      $upa['id'] = 0;
      $upa['nome'] = "";
      $upa['localizacao'] = "";
      $this->view("frmUpa", compact('upa'));
    }

    function salvar() {
      $upa = array();
      $upa['id'] = $_POST['id'];
      $upa['nome'] = $_POST['nome'];
      $upa['localizacao'] = $_POST['localizacao'];
      $model = new Upa();
      if ($upa['id'] == 0) {
        $model->create($upa);
      } else {
        $model->update($upa);
      }
      $this->redirect("upa/listar");
    }

    function excluir($id) {
      $model = new Upa();
      $model->delete($id);
      $this->redirect('upa/listar');
    }
  }
 ?>
