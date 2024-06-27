<?php 

    // Inicio sessão;
    session_start();

    // Definir uma cosntante de controle
    define('CONTROL', true);

    // Verifica se existe algum usuario logado
    $usuario_logado = $_SESSION['usuario'] ?? null;

    // Verfifica qual é a a rota na URL
    if (empty($usuario_logado)) {
        $rota = 'login';
    } else {
        $rota = $_GET['rota'] ?? 'home';
    }

    // Se o usuario esta logado, mas a rota é login, vai redirecionar para a home;
    if (!empty($usuario_logado) && $rota == 'login') {
        $rota = 'home';
    }

    // Analisa a rota
    $rotas = [
        'login' => 'login.php',
        'home' => 'home.php',
        'page1' => 'page1.php',
        'page2' => 'page2.php',
        'page3' => 'page3.php',
        'logout' => 'logout.php'
    ];

    if (!key_exists($rota, $rotas)) {
        die('Acesso Negadio!');
    } 
    require_once $rotas[$rota];

?>