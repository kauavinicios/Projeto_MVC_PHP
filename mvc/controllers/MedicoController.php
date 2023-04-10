<?php
  class MedicoController extends Controller {

    function editar($id) {
      $model = new Medico();
      $medico = $model->getById($id);
      $modelUpa = new upa();
      $upas = $modelUpa->read();
      $this->view('frmMedico', compact('medico', 'upas'));
    }

    function listar() {
      $model = new Medico();
      $medicos = $model->read();
      $this->view('listagemMedico', compact('medicos'));
    }

    function novo() {
      $medico = array();
      $medico['id'] = 0;
      $medico['nome'] = "";
      $medico['datanascimento'] = "";
      $medico['crm'] = "";
      $medico['especialidade'] = "";
      $medico['afiliacao'] = 0;
      $modelUpa = new Upa();
      $upas = $modelUpa->read();
      $this->view('frmMedico', compact('medico', 'upas'));
    }

    function salvar() {
      $medico = array();
      $medico['id'] = $_POST['id'];
      $medico['nome'] = $_POST['nome'];
      $medico['datanascimento'] = $_POST['datanascimento'];
      $medico['crm'] = $_POST['crm'];
      $medico['especialidade'] = $_POST['especialidade'];
      $medico['afiliacao'] = $_POST['afiliacao'];
      $model = new Medico();
      if ($medico['id'] == 0) {
        $model->create($medico);
      } else {
        $model->update($medico);
      }
      $this->redirect("medico/listar");
    }

    function excluir($id) {
      $model = new medico();
      $model->delete($id);
      $this->redirect('medico/listar');
    }
  }
 ?>
