<?php
    $pdo = new PDO("mysql:host=localhost;dbname=chat","root",'');

    function formatarData($data){
        return date('H:i:s', strtotime($data));
    }
?>