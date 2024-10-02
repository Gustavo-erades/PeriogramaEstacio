<?php
header('Content-Type: application/json');
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$path='http://localhost/PeriogramaEstacio/public/pages/';
$content = '';
switch ($page) {
    case 'login':
        $content = file_get_contents($path.'login/');
        break;
    default:
        $content = '<h2>Página não encontrada</h2>';
        break;
}
echo json_encode(['content' => $content]);
