<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <!--CSS Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/2d070ab700.js" crossorigin="anonymous"></script>
    <title>Painel de Controle</title>
</head>

<body>
    <div class="box-login">
        <?php
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user, $password));
                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
					//Logamos com sucesso.
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['cargo'] = $info['cargo'];
					$_SESSION['nome'] = $info['nome']; 
					$_SESSION['img'] = $info['img'];
                    header('Location: '.INCLUDE_PATH_PAINEL);
                    die();
                }else{
                    echo '<div class="erro-box">Usuário ou senha incorretos!</div>';
                }
            }
        ?>
        <h2>Efetue o Login</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Login" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div>
</body>

</html>