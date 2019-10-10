<?php
    require_once 'conexao.php';

    $apelido = $_POST['apelido'];
    $mensagem = $_POST['mensagem'];

    $salvarMSG = $pdo->prepare("INSERT INTO tb_chat (apelido,mensagem) VALUES(?,?)");
    $salvarMSG->execute(array($apelido,$mensagem));
?>