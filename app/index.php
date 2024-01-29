<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\controller\userController;

// Cria uma instância do controlador
$controller = new userController;

// Verifica a ação solicitada na URL
$action = isset($_GET['action']) ? $_GET['action'] : 'mainPage';

// Chame a função correspondente no controlador com base na ação executada
switch ($action) {
    case 'insert':
        // Aqui você pode chamar a função correspondente para exibir o formulário de inserção de usuários
        include __DIR__ . '/../view/insert.php';
        break;
    case 'insertUser':
        // Chame a função do controlador para inserir um usuário
        $controller->insertUser();
        break;
    case 'update':
        // Aqui você pode chamar a função correspondente para exibir o formulário de atualização
        include __DIR__ . '/view/update.php';
        break;
    case 'updateUser':
        // Chame a função do controlador para atualizar um usuário
        $controller->updateUser();
        break;
    case 'delete':
        // Chame a função do controlador para excluir um usuário
        $controller->deleteUser();
        break;
    default:
        // Ação padrão: exibir a página principal
        $controller->mainPage();
        break;
}
