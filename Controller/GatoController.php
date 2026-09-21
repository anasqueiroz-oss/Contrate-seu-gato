<?php
class GatoController {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function listar() {
        $gatoModel = new Gato($this->db);

        $listaDeGatos = $gatoModel->listarTodos();

        header('Content-Type: application/json; charset=utf-8');

        echo json_encode($listaDeGatos);
        }
}