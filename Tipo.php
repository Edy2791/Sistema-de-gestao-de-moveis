<?php
require_once __DIR__ . '/Base_dados.php';

class Tipo {

    public static function listar() {
        $db = Base_dados::conectar();
        $stmt = $db->query("SELECT * FROM tipo");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
