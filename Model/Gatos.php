<?php 
class Gato{
    private $conn;
    public function __construct($db){
        $this->conn = $db;
    }

    public function listarTodos(){
        $query = "SELECT id, nome, profissao, habilidade, preco_sache, url_foto FROM gatos ORDER BY id ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}