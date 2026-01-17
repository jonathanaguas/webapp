<?php
require_once __DIR__ . '/../config/db.php';

class Cliente {
  private $db;
  public function __construct() { $this->db = (new DB())->pdo; }

  public function create($nombre,$correo,$telefono) {
    $stmt = $this->db->prepare("INSERT INTO clientes(nombre,correo,telefono) VALUES (?,?,?)");
    $stmt->execute([$nombre,$correo,$telefono]);
  }
  public function all() {
    return $this->db->query("SELECT * FROM clientes")->fetchAll();
  }
  public function find($id) {
    $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id=?");
    $stmt->execute([$id]);
    return $stmt->fetch();
  }
  public function update($id,$nombre,$correo,$telefono) {
    $stmt = $this->db->prepare("UPDATE clientes SET nombre=?,correo=?,telefono=? WHERE id=?");
    $stmt->execute([$nombre,$correo,$telefono,$id]);
  }
  public function delete($id) {
    $stmt = $this->db->prepare("DELETE FROM clientes WHERE id=?");
    $stmt->execute([$id]);
  }
}