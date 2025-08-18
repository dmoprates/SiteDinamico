<?php
if (isset($_GET['logout'])) {
    Painel::logout();
}
?>

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
    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php
                if ($_SESSION['img'] == '') {
                    ?>
                    <div class="avatar-usuario">
                        <i class="fa-solid fa-user"></i>
                    </div><!--avatar-usuario-->
                <?php
                } else {
                    ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" alt="">
                    </div><!--avatar-usuario-->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div><!--nome-usuario-->
            </div><!--box-usuario-->
        </div><!--menu-wraper-->
    </div><!--menu-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!--menu-btn-->
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><span>Sair </span><i
                        class="fa-solid fa-right-from-bracket"></i></a>
            </div><!--logout-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <div class="content">
        <div class="box-content left w100">

        </div><!--box-content-->
        <div class="clear"></div>
    </div><!--content-->

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>

</html>