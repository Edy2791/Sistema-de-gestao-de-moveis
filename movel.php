<?php
require_once __DIR__ . '/Base_dados.php';

class Movel {

    public static function guardar($dados) {
        $db = Base_dados::conectar();

        $sql = "INSERT INTO movel (nome, preco, tipo_id, material_id)
                VALUES (:nome, :preco, :tipo, :material)";

        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':nome' => $dados['nome'],
            ':preco' => $dados['preco'],
            ':tipo' => $dados['tipo'],
            ':material' => $dados['material']
        ]);
    }
}
