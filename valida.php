<?php

session_start();

require_once ("conexao.php");

$user = $_POST["user"];
$senha = $_POST["senha"];

$sql= $conexao->prepare("SELECT * FROM usuario WHERE userAcesso = '$user' AND senha = '$senha'  ");
$sql->bindValue("userAcesso",$user);
$sql->bindValue("senha",$senha);
$sql->execute();

if($sql->rowCount() > 0)
    {
        $info = $sql->fetch();
        $_SESSION['idUser'] = true;  //so deus sabe como funciona                      
        header('location:index.php');          
    }
else
    {
        header('location:login.php');   
    }
?>