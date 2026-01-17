<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {
  private $model;
  public function __construct() { $this->model = new Cliente(); }

  public function store($data) {
    $this->model->create($data['nombre'],$data['correo'],$data['telefono']);
  }
  public function index() { return $this->model->all(); }
  public function show($id) { return $this->model->find($id); }
  public function update($id,$data) {
    $this->model->update($id,$data['nombre'],$data['correo'],$data['telefono']);
  }
  public function destroy($id) { $this->model->delete($id); }
}