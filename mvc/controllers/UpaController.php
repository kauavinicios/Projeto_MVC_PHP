<?php
// Definindo a classe "UpaController" que estende a classe "Controller"
class UpaController extends Controller {
    // Função responsável por buscar um registro da tabela "Upa" a partir do ID informado e exibi-lo em um formulário para edição
function editar($id) {
    // Instancia um objeto Upa do modelo
    $model = new Upa();
    // Busca o registro pelo ID informado
    $upa = $model->getById($id);
    // Chama a função view do controlador para exibir o formulário de edição com os dados do registro buscado
    $this->view('frmUpa', compact('upa'));
    }

    // Função responsável por listar todos os registros da tabela "Upa"
    function listar() {
        // Cria uma instância do modelo Upa
        $model = new Upa();
        // Executa a função read() para obter todos os registros da tabela Upa
        $upas = $model->read();
        // Renderiza a view "listagemUpa" passando a variável $upas como parâmetro
        $this->view('listagemUpa', compact('upas'));
    }

    // Função responsável por exibir um formulário em branco para criação de um novo registro da tabela "Upa"
    function novo() {
        // Cria um array vazio para representar os dados de um novo registro da tabela "Upa"
        $upa = array();
        // Define os valores iniciais do array
        $upa['id'] = 0;
        $upa['nome'] = "";
        $upa['localizacao'] = "";
        // Renderiza a view "frmUpa", passando o array $upa como parâmetro
        $this->view("frmUpa", compact('upa'));
    }
    

    // Função responsável por receber os dados de um formulário e salvar um novo registro na tabela "Upa", ou atualizar um registro existente
    function salvar() {
        // Cria um array vazio para armazenar os dados do novo registro ou atualização
        $upa = array();
        // Define o ID do registro a ser salvo, obtido do formulário enviado pelo usuário
        $upa['id'] = $_POST['id'];
        // Define o nome do registro a ser salvo, obtido do formulário enviado pelo usuário
        $upa['nome'] = $_POST['nome'];
        // Define a localização do registro a ser salvo, obtido do formulário enviado pelo usuário
        $upa['localizacao'] = $_POST['localizacao'];
        // Instancia um novo objeto da classe Upa para utilizar seus métodos de acesso a banco de dados
        $model = new Upa();
        // Verifica se o ID do registro é igual a zero, indicando que se trata de um novo registro a ser salvo
        if ($upa['id'] == 0) {
            // Chama o método "create" do objeto $model, passando o array $upa como parâmetro para inserir o novo registro no banco de dados
            $model->create($upa);
        } else {
            // Caso o ID do registro seja diferente de zero, chama o método "update" do objeto $model, passando o array $upa como parâmetro para atualizar o registro no banco de dados
            $model->update($upa);
        }
        // Redireciona o usuário para a listagem de registros da tabela "Upa"
        $this->redirect("upa/listar");
    }

    // Função responsável por excluir um registro da tabela "Upa" a partir do ID informado
    function excluir($id) {
        $model = new Upa(); // Instancia o objeto Upa para manipulação dos dados
        $model->delete($id); // Chama o método delete do objeto Upa, passando o ID do registro a ser excluído
        $this->redirect('upa/listar'); // Redireciona para a página de listagem de registros da tabela Upa
    }
}
?>