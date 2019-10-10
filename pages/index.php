<?php
    session_start();
    if(isset($_POST['entrar'])){
        $_SESSION['apelido'] = $_POST['nome'];
        header('Location: inicial.php');
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>CHAT</title>
</head>
<body>
    <div id="conteudo">
        <form action="" method="post">
            <input type="text" name="nome" placeholder="Digite um apelido" id="">
            <input type="submit" value="Entrar" name="entrar">
        </form>
    </div>
</body>
</html>