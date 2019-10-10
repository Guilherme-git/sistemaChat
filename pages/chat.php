<?php
    require_once 'conexao.php';
    
    $select = $pdo->prepare("SELECT * FROM tb_chat ORDER BY id DESC");
    $select->execute();
    $resultado = $select->fetchAll();

    echo json_encode($resultado);

?>