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
    <!--TinyMCE-->
    <script src="https://cdn.tiny.cloud/1/sp6p50q0nnkpcz2sad0koa68or56sgjjgw12jlrjqplse91d/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
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
            <div class="itens-menu">
                <h2>Cadastro</h2>
                <a <?php selecionadoMenu('cadastrar-depoimento'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-servico'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
                <a <?php selecionadoMenu('cadastrar-slides'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slide</a>
                <h2>Gestão</h2>
                <a <?php selecionadoMenu('listar-depoimentos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php selecionadoMenu('listar-servicos'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                <a <?php selecionadoMenu('listar-slides'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>
                <h2>Administração do Painel</h2>
                <a <?php selecionadoMenu('editar-usuario'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
                <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(3); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
                <h2>Configuração Geral</h2>
                <a <?php selecionadoMenu('editar-site'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar</a>
                <h2>Gestão de Notícias</h2>
                <a <?php selecionadoMenu('cadastrar-categorias'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categorias">Cadastrar Categorias</a>
                <a <?php selecionadoMenu('gerenciar-categorias'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias">Gerenciar Categorias</a>
                <a <?php selecionadoMenu('cadastrar-noticia'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-noticia">Cadastrar Notícia</a>
                <a <?php selecionadoMenu('gerenciar-noticias'); ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-noticias">Gerenciar Notícias</a>
            </div><!--itens-menu-->
        </div><!--menu-wraper-->
    </div><!--menu-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!--menu-btn-->
            <div class="logout">
                <a <?php if (@$_GET['url'] == '') { ?> style="background:#5b5a5f;padding:15px;" <?php } ?>
                    href="<?php echo INCLUDE_PATH_PAINEL ?>"><span>Página Inicial</span> <i
                        class="fa-solid fa-house"></i></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><span>Sair </span><i
                        class="fa-solid fa-right-from-bracket"></i></a>
            </div><!--logout-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    <div class="content">
        <?php Painel::carregarPagina(); ?>
    </div><!--content-->

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

</body>

</html>