<?php
class Site
{
    public static function updateUsuarioOnline()
    {
        if (isset($_SESSION['online'])) {
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $check = MySql::conectar()->prepare("SELECT 'id' FROM `admin.online` WHERE token =?");
            $check->execute(array($_SESSION['online']));
            if ($check->rowCount() == 1) {
                $sql = MySql::conectar()->prepare("UPDATE `admin.online` SET ultima_acao = ? WHERE token = ?");
                $sql->execute(array($horarioAtual, $token));
            }else {
                $ip = $_SERVER['REMOTE_ADDR'];
                $token = $_SESSION['online'];
                $horarioAtual = date('Y-m-d H:i:s');
                $sql = MySql::conectar()->prepare("INSERT INTO `admin.online` VALUES (null, ?, ?, ?)");
                $sql->execute(array($ip, $horarioAtual, $token));
            }

        } else {
            $_SESSION['online'] = uniqid();
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $ip = $_SERVER['REMOTE_ADDR'];
            $sql = MySql::conectar()->prepare("INSERT INTO `admin.online` VALUES (null, ?, ?, ?)");
            $sql->execute(array($ip, $horarioAtual, $token));
        }
    }
}
?>