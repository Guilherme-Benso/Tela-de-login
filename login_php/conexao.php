<?php
    $dbhost = "127.0.0.1:8889";
    $dbuser = "root";
    $dbpassword = "root";
    $dbserver = "mapa_db";

    $conexao = new mysqli($dbhost, $dbuser, $dbpassword,$dbserver);

    // if ($conexao->connect_errno) {
    //     echo "erro";
    // }
    // else {
    //     echo "conexao concluida";
    // }
?>