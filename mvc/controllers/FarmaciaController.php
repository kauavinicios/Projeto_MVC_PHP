<?php
  class FarmaciaController extends Controller {

    function editar($id) {
      $model = new Farmacia();
      $farmacia = $model->getById($id);
      $modelUpa = new upa();
      $upas = $modelUpa->read();
      $this->view('frmFarmacia', compact('farmacia', 'upas'));
    }

    function listar() {
      $model = new Farmacia();
      $farmacias = $model->read();
      $this->view('listagemFarmacia', compact('farmacias'));
    }

    function novo() {
      $farmacia = array();
      $farmacia['id'] = 0; 
      $farmacia['nome'] = ""; 
      $farmacia['localizacao'] = "";
      $farmacia['afiliacao'] = 0;
      $modelUpa = new Upa();
      $upas = $modelUpa->read();
      $this->view('frmFarmacia', compact('farmacia', 'upas'));
    }

    function salvar() {
      $farmacia = array();
      $farmacia['id'] = $_POST['id'];
      $farmacia['nome'] = $_POST['nome'];
      $farmacia['localizacao'] = $_POST['localizacao'];
      $farmacia['afiliacao'] = $_POST['afiliacao'];
      $model = new Farmacia();
      if ($farmacia['id'] == 0) {
        $model->create($farmacia);
      } else {
        $model->update($farmacia);
      }
      $this->redirect("farmacia/listar");
    }

    function excluir($id) {
      $model = new Farmacia();
      $model->delete($id);
      $this->redirect('farmacia/listar');
    }
  }
 ?>
