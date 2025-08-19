<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

$autoload = function ($class) {
    if ($class == 'Email') {

        require_once('classes/phpmailer/PHPMailerAutoload.php');
    }
    include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/SiteDinamico/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');
define('BASE_DIR_PAINEL', __DIR__.'/painel');
//Conectar com banco de dados!
define('HOST', '127.0.0.1:3312:');
define('USER', 'root');
define('PASSWORD', 'Ation@8705');
define('DATABASE', 'sitedinamico');

//funções painel
function pegaCargo($cargo)
{
    $arr = ['1' => 'Administrador', '2' => 'Sub-Administrador', '3' => 'Usuário'];
    return $arr[$cargo];
}
function selecionadoMenu($par){
    $url = explode('/', @$_GET['url'])[0];
    if($url == $par){
        echo 'class="menu-active"';
    }
}

function verificaPermissaoMenu($permissao){
    if($_SESSION['cargo'] >= $permissao){
        return;
    }else{
        echo 'style="display:none"';
    }
}
function verificaPermissaoPagina($permissao){
    if($_SESSION['cargo'] >= $permissao){
        return;
    }else{
        include('painel/pages/permissao-negada.php');
        die();
    }
}
//Constantes para o painel de controle
define('NOME_EMPRESA', 'Lorem Ipsum');

?>