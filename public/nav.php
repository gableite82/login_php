<?php 
    defined('CONTROL') or die('Acesso negado!');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facin!</title>
</head>
<body>
<span>Usuário: <strong><?= $_SESSION['usuario']?></strong></span>
    <span>
        
    </span>
    <hr>
    <nav>
        <a href="?rota=home">HOME</a>
        <a href="?rota=page1">PAGINA1</a>
        <a href="?rota=page2">PAGINA2</a>
        <a href="?rota=page3">PAGINA3</a>
        <a href="?rota=logout">Sair</a>
    </nav>
    
</body>
</html>

