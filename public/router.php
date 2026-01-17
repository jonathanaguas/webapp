<?php
require_once __DIR__ . '/../controllers/ClienteController.php';
$controller = new ClienteController();
$action = $_GET['action'] ?? 'index';

switch($action) {
  case 'store':
    $controller->store($_POST);
    header("Location: router.php?action=index");
    break;

  case 'index':
    $clientes = $controller->index();
    require_once __DIR__ . '/../views/cliente_list.php';
    break;

  case 'edit':
    $id = $_GET['id'] ?? null;
    if ($id) {
      $cliente = $controller->show($id);
      require_once __DIR__ . '/../views/cliente_edit.php';
    }
    break;

  case 'update':
    $controller->update($_POST['id'], $_POST);
    header("Location: router.php?action=index");
    break;

  case 'delete':
    $controller->destroy($_POST['id']);
    header("Location: router.php?action=index");
    break;
}