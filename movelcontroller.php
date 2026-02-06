<?php
require_once __DIR__ . '/../Model/Tipo.php';
require_once __DIR__ . '/../Model/Material.php';
require_once __DIR__ . '/../Model/Movel.php';

class MovelController {

    public function index() {
        $tipos = Tipo::listar();
        $materiais = Material::listar();

        require __DIR__ . '/../View/movel/index.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $dados = [
                'nome' => $_POST['nome'] ?? '',
                'preco' => $_POST['preco'] ?? '',
                'tipo' => $_POST['tipo'] ?? '',
                'material' => $_POST['material'] ?? ''
            ];

            if (Movel::guardar($dados)) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Móvel registado com sucesso!'
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Erro ao registar o móvel.'
                ]);
            }
        }
    }
}
