<?php
/**
 * Created by Haydê
 * Date: 02/11/2015
 * Time: 00:53
 */
    session_start();
    $username = $_POST['username'];
    switch($_REQUEST['acao'])
    {
        case 'logar':
            $_SESSION['username'] = $username;
            echo 'ok';
            break;
        case 'sair':
            unset($_SESSION['username']);
            session_destroy();
            header('location:index.php');
            break;
    }
?>