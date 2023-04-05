<?php
  class FarmRemedioController extends Controller {

    function editar($id) {
      $model = new FarmRemedio();
      $farmRemedio = $model->getById($id);
      $modelFarmacia = new Farmacia();
      $farmacias = $modelFarmacia->read();
      $modelRemedio = new Remedio();
      $remedios = $modelRemedio->read();
      $this->view('frmFarmRemedio', compact('farmRemedio', 'farmacias', 'remedios'));
    }

    function listar() {
      $model = new FarmRemedio();
      $farmRemedios = $model->read();
      $this->view('listagemFarmRemedio', compact('farmRemedios'));
    }

    function novo() {
      $farmRemedio = array();
      $farmRemedio['id'] = 0; 
      $farmRemedio['idFarm'] = 0; 
      $farmRemedio['idRemedio'] = 0; 
      $farmRemedio['preco'] = "";
      $farmRemedio['qnt'] = 0;
      $modelFarmacia = new Farmacia();
      $farmacias = $modelFarmacia->read();
      $modelRemedio = new Remedio();
      $remedios = $modelRemedio->read();
      $this->view('frmfarmRemedio', compact('farmRemedio', 'farmacias', 'remedios'));
    }

    function salvar() {
      $farmRemedio = array();
      $farmRemedio['id'] = $_POST['id'];
      $farmRemedio['idFarm'] = $_POST['idFarm'];
      $farmRemedio['idRemedio'] = $_POST['idRemedio'];
      $farmRemedio['preco'] = $_POST['preco'];
      $farmRemedio['qnt'] = $_POST['qnt'];
      $model = new FarmRemedio();
      if ($farmRemedio['id'] == 0) {
        $model->create($farmRemedio);
      } else {
        $model->update($farmRemedio);
      }
      $this->redirect("farmRemedio/listar");
    }

    function excluir($id) {
      $model = new FarmRemedio();
      $model->delete($id);
      $this->redirect('farmRemedio/listar');
    }
  }
 ?>
