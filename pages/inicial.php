<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>CHAT</title>
</head>
<body>
        <div id="conteudo">
            <div id="caixa-chat">
                <div id="chat">
                    <div id="dados-chat">
                        
                    </div>
                </div>
            </div>

            <form action="" method="post" id="formMsg">
                <input type="text" name="apelido" id="apelido" value="<?php echo $_SESSION['apelido']; ?>">
                <textarea name="mensagem" id="mensagem" id="" cols="30" rows="5" placeholder="Sua mensagem"></textarea>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </div>

        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/script.js"></script>
</body>
</html>