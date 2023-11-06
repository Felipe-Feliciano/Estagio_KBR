<?php 
    //if(isset($_POST['submit']))
    //{
    //    print_r($_POST['usuario']);
    //    print_r($_POST['email']);
    //    print_r($_POST['senha']);
    //    print_r($_POST['confSenha']);
    //}
    
    include_once('config.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha =md5($_POST['senha']);
    $confSenha = $_POST['confSenha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (usuario,email,senha,confSenha) VALUES ('{$usuario}', '{$email}', '{$senha}', '{$confSenha}')");




?>