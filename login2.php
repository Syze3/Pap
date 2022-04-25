<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['passworde']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $passworde = $_POST['passworde'];

        //print_r('email: ' . $email);
        //print_r('<br>');
        //print_r('passworde: ' . $senha);

        $sql = "SELECT * FROM clientes WHERE email = '$email' and passworde = '$passworde'";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['passworde']);
            header('Location:login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['passworde'] = $passworde;
            header('Location:index.php');
        }

    }
    else
    {
        
        header('Location: login.php');
    }
?>