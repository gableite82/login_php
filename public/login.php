<?php 

    defined('CONTROL') or die('Acesso negado');

    // Verifica se o formulário foi submetido;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // verifica se o usuario e senha foram submetidas
        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;
        $erro = null;

        if (empty($usuario) || empty($senha)) {
            $erro = "Usuario e senhas são obrigatórios";
        }
        // Verifica se o usuario e senha são validos (MATCH);
        if (empty($erro)) {
            $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

            foreach($usuarios as $user){
                if ($user['usuario'] == $usuario && password_verify($senha, $user['senha'])) {
                    // efetua o login
                    $_SESSION['usuario'] = $usuario;
                    // Volta a página principal
                    header('Location: index.php?rota=home');
                }
            }
            // Login inválido
            $erro = "Usuario ou senha invalidos";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  
    <form action="index.php?rota=login" method="post">
        <h3>Login</h3>
        <div>
            <label for="usuario">Usuario</label>
            <input type="email" name="usuario" id="usuario">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
    <?php if(!empty($erro)):?>
        <p style="color: red"><?= $erro ?></p>
    <?php endif;?>
  
</body>
</html>