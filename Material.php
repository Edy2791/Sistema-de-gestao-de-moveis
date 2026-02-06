<?php
require_once __DIR__ . '/Base_dados.php';

class Material {

    public static function listar() {
        $db = Base_dados::conectar();
        $stmt = $db->query("SELECT * FROM material");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
