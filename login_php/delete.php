<?php 
if (!empty($_GET["id"])) {
    include_once('conexao.php');
    $id = $_GET["id"];

    $sql_select = "SELECT * from usuarios where id= $id";
    $result = $conexao->query($sql_select);

    if ($result->num_rows > 0) {
        
            $sql_delete = "delete from usuarios where id='$id'";
            $result = $conexao->query($sql_delete);
            header("Location:sistema.php");
        }
    } 
