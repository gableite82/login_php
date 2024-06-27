<?php 

    defined('CONTROL') or die('Acesso negado!');

    // Efetuar o Logout
    session_destroy();

    // Voltar pagina inicial
    header('Location: index.php?rota=login');


?>